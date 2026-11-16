<?php

/**
 * @file
 * Directly included by TWFY.
 */

/**
 * @file
 * rabx.php:
 * RPC using Anything But XML.
 *
 * This is all a bit miserable, because PHP doesn't have string-streams (so
 * we have to do everything with substr) or exceptions (so we have to return
 * error objects and test for them).
 *
 * Copyright (c) 2004 UK Citizens Online Democracy. All rights reserved.
 * Email: chris@mysociety.org; WWW: http://www.mysociety.org/
 *
 * $Id: rabx.php,v 1.26 2006-09-18 12:48:18 francis Exp $
 *
 */

/*
 * Errors and error codes.
 */
define("RABX_ERROR_UNKNOWN", 0);
define("RABX_ERROR_INTERFACE", 1);
define("RABX_ERROR_TRANSPORT", 2);
define("RABX_ERROR_PROTOCOL", 3);

define("RABX_ERROR_MASK", 511); /* Mask off "error detected on server" bit */

define("RABX_ERROR_SERVER", 512);

define("RABX_ERROR_USER", 1024);

/**
 * RABX_Error
 * Simple class to represent an error in RABX.
 */
class RABX_Error {
    public $code;
    public $text;
    public $extra;

    /**
     *
     */
    public function __construct($code, $text, $extra = NULL) {
        $this->code = $code;
        $this->text = $text;
        $this->extra = $extra;
    }

}

/**
 *
 */
class RABX_Error_Unknown extends RABX_Error {
}

/**
 *
 */
class RABX_Error_Interface extends RABX_Error {
}

/**
 *
 */
class RABX_Error_Transport extends RABX_Error {
}

/**
 *
 */
class RABX_Error_Protocol extends RABX_Error {
}

/**
 *
 */
class RABX_Error_User extends RABX_Error {
}

/**
 * rabx_error CODE TEXT [EXTRA]
 * Return a suitable object representing the error with the given CODE,
 * descriptive TEXT, and optional EXTRA data.
 * Used by: the other rabx functions in this file.
 */
function rabx_error($code, $text, $extra = NULL) {
    if ($code >= RABX_ERROR_USER) {
        return new RABX_Error_User($code, $text, $extra);
    }
    $c = $code & RABX_ERROR_MASK;
    if ($c == RABX_ERROR_INTERFACE) {
        return new RABX_Error_Interface($code, $text, $extra);
    }
    elseif ($c == RABX_ERROR_TRANSPORT) {
        return new RABX_Error_Transport($code, $text, $extra);
    }
    elseif ($c == RABX_ERROR_PROTOCOL) {
        return new RABX_Error_Protocol($code, $text, $extra);
    }
    else {
        return new RABX_Error_Unknown($code, $text, $extra);
    }
}

/**
 * rabx_is_error E
 * Does E represent an RABX error?
 * Used by: the other rabx functions in this file.
 */
function rabx_is_error($e) {
    if (is_object($e) and is_a($e, "RABX_Error")) {
        return TRUE;
    }
    else {
        return FALSE;
    }
}

/*
 * Construction/parsing of wire format.
 */

/**
 * rabx_netstring_wr STRING BUFFER
 * Append STRING to BUFFER, formatted as a netstring. Returns true on success
 * or an error on failure.
 * Used by: rabx_wire_wr() in this file.
 */
function rabx_netstring_wr(&$string, &$buffer) {
    $l = setlocale(LC_NUMERIC, "0");
    setlocale(LC_NUMERIC, "C");
    $buffer .= sprintf("%d:%s,", strlen($string), $string);
    setlocale(LC_NUMERIC, $l);
    return TRUE;
}

/**
 * rabx_wire_wr X BUFFER
 * Append the on-the-wire representation of X to BUFFER. Returns true on
 * success or an error on failure.
 * Used by: api_output_rabx() in twfy's www/docs/api/api_functions.php.
 */
function rabx_wire_wr(&$x, &$buffer) {
    if (is_object($x)) {
        return rabx_error(RABX_ERROR_INTERFACE, "can't pass objects over RABX");
    }
    elseif (is_array($x)) {
        /* Determine whether this is an associative array or vector. */
        $n = count($x);
        $f = 1;
        for ($i = 0; $i < $n; ++$i) {
            if (!array_key_exists($i, $x)) {
                $f = 0;
                break;
            }
        }
        if ($f) {
            /* "List" */
            $buffer .= 'L';
            $cnx = count($x);
            if (rabx_is_error($e = rabx_netstring_wr($cnx, $buffer))) {
                return $e;
            }
            for ($i = 0; $i < $n; ++$i) {
                if (rabx_is_error($e = rabx_wire_wr($x[$i], $buffer))) {
                    return $e;
                }
            }
            return TRUE;
        }
        else {
            /* "Associative array" */
            $buffer .= 'A';
            $cnx = count($x);
            if (rabx_is_error($e = rabx_netstring_wr($cnx, $buffer))) {
                return $e;
            }
            foreach ($x as $k => $v) {
                if (rabx_is_error($e = rabx_wire_wr($k, $buffer))
                    || rabx_is_error($e = rabx_wire_wr($v, $buffer))) {
                    return $e;
                }
            }
            return TRUE;
        }
    }
    else {
        if (is_null($x)) {
            $buffer .= 'N';
            return TRUE;
        }
        elseif (is_bool($x)) {
            /* false bool in PHP is '' not 0 */
            $buffer .= 'I1:' . ($x ? '1' : '0') . ',';
            return TRUE;
        }
        elseif (is_int($x)) {
            $buffer .= 'I';
        }
        elseif (is_float($x)) {
            $buffer .= 'R';
        }
        elseif (is_string($x)) {
            $buffer .= 'T';     /* XXX should check for UTF-8 */
        }    return rabx_netstring_wr($x, $buffer);
    }
}
