<?php

/**
 * @file
 * debug.php:
 * Debugging functions.
 *
 * Copyright (c) 2006 UK Citizens Online Democracy. All rights reserved.
 * Email: chris@mysociety.org; WWW: http://www.mysociety.org/
 *
 * $Id: debug.php,v 1.5 2006/06/08 16:26:02 chris Exp $
 *
 */

/* getmicrotime
 * Return time since the epoch, including fractional seconds.
 * Used by: nothing in phplib. This is a fallback, as twfy's
 * www/includes/utility.php defines the same function. */
if (!function_exists('getmicrotime')) {

    /**
     *
     */
    function getmicrotime() {
        $mtime = microtime();
        $mtime = explode(" ", $mtime);
        $mtime = $mtime[1] + $mtime[0];
        return $mtime;
    }

}

/**
 * debug HEADER TEXT [VARIABLE]
 * Print, to the page, a debugging variable, if a debug=... parameter is
 * present. The message is prefixed with the HEADER and consists of the passed
 * TEXT and an optional (perhaps array or class) VARIABLE which, if present, is
 * also dumped to the page. Display of items is dependent on the integer value
 * of the debug query variable and the passed HEADER, according to the table in
 * $levels below.
 * Used by: RABX_Client::call() in rabx.php. twfy loads this file only through
 * rabx.php, and only RABX_Client calls it.
 */
function debug($header, $text = "", $complex_variable = NULL) {
    $debug_level = OPTION_PHP_DEBUG_LEVEL;

    if ($debug_level != '') {
        // Set which level shows which types of debug info.
        $levels = [
              1 => ['FRONTEND', 'WARNING', 'MAPIT', 'DADEM', 'QUEUE', 'TIMESTAMP'],
              2 => ['MAPITRESULT', 'DADEMRESULT', 'RATTY'],
              3 => ['XMLRPC', 'RABX', 'RATTYRESULT'],
              4 => ['RABXWIRE', 'SERIALIZE'],
              ];

        // Store which headers we are allowed to show.
        $allowed_headers = [];

        if ($debug_level > count($levels)) {
            $max_level_to_show = count($levels);
        }
        else {
            $max_level_to_show = $debug_level;
        }

        for ($n = 1; $n <= $max_level_to_show; $n++) {
            $allowed_headers = array_merge($allowed_headers, $levels[$n]);
        }

        // If we can show this header, then, er, show it.
        if (in_array($header, $allowed_headers) || $debug_level >= 4) {
            print "<p><span style=\"color:#039;\"><strong>$header</strong></span> $text";
            if (isset($complex_variable)) {
                print "</p><p>";
                debug_vardump($complex_variable);
            }
            print "</p>\n";
        }
    }
}

/**
 * debug_vardump VARIABLE
 * Dump VARIABLE to the page, properly escaped and wrapped in <pre> tags.
 * Used by: debug() in this file.
 */
function debug_vardump($blah) {
    /* Miserable. We need to encode entities in the output, which means messing
     * about with output buffering. */
    ob_start();
    var_dump($blah);
    $d = ob_get_contents();
    ob_end_clean();
    print "<pre>" . htmlspecialchars($d, ENT_QUOTES, 'UTF-8') . "</pre>";
}
