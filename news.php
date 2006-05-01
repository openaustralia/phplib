<?php
/* 
 * THIS FILE WAS AUTOMATICALLY GENERATED BY ./rabxtophp.pl, DO NOT EDIT DIRECTLY
 * 
 * news.php:
 * Client interface for NeWs
 *
 * Copyright (c) 2005 UK Citizens Online Democracy. All rights reserved.
 * WWW: http://www.mysociety.org
 *
 * $Id: news.php,v 1.3 2006/05/01 15:12:32 louise Exp $
 *
 */

require_once('rabx.php');

/* news_get_error R
 * Return FALSE if R indicates success, or an error string otherwise. */
function news_get_error($e) {
    if (!rabx_is_error($e))
        return FALSE;
    else
        return $e->text;
}

/* news_check_error R
 * If R indicates failure, displays error message and stops procesing. */
function news_check_error($data) {
    if ($error_message = news_get_error($data))
        err($error_message);
}

$news_client = new RABX_Client(OPTION_NEWS_URL);

/* news_get_newspaper ID

  Given a newspaper ID, returns information about that newspaper */
function news_get_newspaper($id) {
    global $news_client;
    $params = func_get_args();
    $result = $news_client->call('NeWs.get_newspaper', $params);
    return $result;
}

/* news_get_newspapers

  Get a list of all the newspapers in the DB */
function news_get_newspapers() {
    global $news_client;
    $params = func_get_args();
    $result = $news_client->call('NeWs.get_newspapers', $params);
    return $result;
}

/* news_get_newspapers_by_name

  Get a hash keyed on id of newspapers in the DB matching a partial name
  string */
function news_get_newspapers_by_name() {
    global $news_client;
    $params = func_get_args();
    $result = $news_client->call('NeWs.get_newspapers_by_name', $params);
    return $result;
}

/* news_publish_update ID EDITOR HASH

  Update the newspaper with the ID using the attribute values in the hash
  and assigning the update to the username EDITOR. */
function news_publish_update($id, $editor, $hash) {
    global $news_client;
    $params = func_get_args();
    $result = $news_client->call('NeWs.publish_update', $params);
    return $result;
}

/* news_get_history ID

  Given a newspaper ID, returns the history of edits to that newspaper's
  record in the database  */
function news_get_history($id) {
    global $news_client;
    $params = func_get_args();
    $result = $news_client->call('NeWs.get_history', $params);
    return $result;
}

/* news_get_coverage ID

  Given a newspaper ID, returns the coverage information related to that
  newspaper */
function news_get_coverage($id) {
    global $news_client;
    $params = func_get_args();
    $result = $news_client->call('NeWs.get_coverage', $params);
    return $result;
}


?>
