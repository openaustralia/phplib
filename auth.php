<?php
// Directly included by TWFY.

/**
 * @file
 * auth.php:
 * Authentication code (originally written for PledgeBank).  Token related
 * code.
 *
 * Copyright (c) 2005 UK Citizens Online Democracy. All rights reserved.
 * Email: francis@mysociety.org; WWW: http://www.mysociety.org/
 *
 * $Id: auth.php,v 1.10 2008-12-01 13:46:50 matthew Exp $
 *
 */

require_once dirname(__FILE__) . '/random.php';
require_once dirname(__FILE__) . '/BaseN.php';

/**
 * auth_ab64_encode DATA
 * Return an encoding of DATA, using email-client-friendly characters;
 * specifically the encoded data match /^[0-9A-Za-z]+$/) excluding O0I1l.
 *
 */
function auth_ab64_encode($i) {
    $t = basen_encodefast(57, $i);
    $t = str_replace(['O', '0', '1', 'I', 'l'], ['5', '6', '7', '8', '9'], $t);
    return $t;
}

/**
 * auth_verify_with_shared_secret ITEM SECRET SIGNATURE
 * Verifies that the ITEM has been correctly signed with SIGNATURE.  The signer
 * must also have had SECRET and will have called auth_sign_with_shared_secret
 * to make the SIGNATURE.
 */
function auth_verify_with_shared_secret($item, $secret, $signature) {
    if (!preg_match('#^([0-9a-f]+)-([0-9a-f]+)$#', $signature, $matches)) {
        return FALSE;
    }
    [$dummy, $sha, $salt] = $matches;
    $verify_sha = sha1("$salt-$secret-$item");
    if ($verify_sha == $sha) {
        return TRUE;
    }
    return FALSE;
}
