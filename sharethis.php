<?php

/**
 * @file
 * sharethis.php:
 * Generic code for Share this functionality.
 * Starting point of Alex King's code, quite changed.
 * Requires front-end to have jQuery.
 *
 * Copyright (c) 2007 UK Citizens Online Democracy. All rights reserved.
 * Email: matthew@mysociety.org; WWW: http://www.mysociety.org/
 *
 * $Id: sharethis.php,v 1.1 2007/11/06 16:27:24 matthew Exp $
 *
 */

$share_sites = [
    'delicious' => [
        'name' => 'del.icio.us',
        'url' => 'http://del.icio.us/post?url={url}&title={title}'
    ],
    'digg' => [
        'name' => 'Digg',
        'url' => 'http://digg.com/submit?phase=2&url={url}&title={title}'
    ],
    'facebook' => [
        'name' => 'Facebook',
        'url' => 'http://facebook.com/share.php?u={url}&t={title}'
    ],
    'furl' => [
        'name' => 'Furl',
        'url' => 'http://furl.net/storeIt.jsp?u={url}&t={title}'
    ],
    'netscape' => [
        'name' => 'Netscape',
        'url' => ' http://www.netscape.com/submit/?U={url}&T={title}'
    ],
    'yahoo_myweb' => [
        'name' => 'Yahoo! My Web',
        'url' => 'http://myweb2.search.yahoo.com/myresults/bookmarklet?u={url}&t={title}'
    ],
    'stumbleupon' => [
        'name' => 'StumbleUpon',
        'url' => 'http://www.stumbleupon.com/submit?url={url}&title={title}'
    ],
    'google_bmarks' => [
        'name' => 'Google Bookmarks',
        'url' => '  http://www.google.com/bookmarks/mark?op=edit&bkmk={url}&title={title}'
    ],
    'technorati' => [
        'name' => 'Technorati',
        'url' => 'http://www.technorati.com/faves?add={url}'
    ],
    'blinklist' => [
        'name' => 'BlinkList',
        'url' => 'http://blinklist.com/index.php?Action=Blink/addblink.php&Url={url}&Title={title}'
    ],
    'newsvine' => [
        'name' => 'Newsvine',
        'url' => 'http://www.newsvine.com/_wine/save?u={url}&h={title}'
    ],
    'magnolia' => [
        'name' => 'ma.gnolia',
        'url' => 'http://ma.gnolia.com/bookmarklet/add?url={url}&title={title}'
    ],
    'reddit' => [
        'name' => 'reddit',
        'url' => 'http://reddit.com/submit?url={url}&title={title}'
    ],
    'windows_live' => [
        'name' => 'Windows Live',
        'url' => 'https://favorites.live.com/quickadd.aspx?marklet=1&mkt=en-us&url={url}&title={title}&top=1'
    ],
    'tailrank' => [
        'name' => 'Tailrank',
        'url' => 'http://tailrank.com/share/?link_href={url}&title={title}'
    ],
];

/**
 *
 */
function share_form($url, $title, $email_url, $name, $email) {
  ?>
<div id="share_form">
<a href="#" onclick="$('#share_form').hide(); return false" class="share_close"><?php echo gettext('Close'); ?></a>
<ul class="share_tabs">
<li id="share_tab1" class="selected" onclick="share_tab('1');"><?php echo gettext('Social Web'); ?></li>
<li id="share_tab2" onclick="share_tab('2');"><?php echo gettext('Email'); ?></li>
</ul>
<div class="clear"></div>
  <?php
  share_form_social($url, $title);
  share_form_email($email_url, $name, $email);
}

/**
 *
 */
function share_form_social($url, $title) {
  global $share_sites;
  echo '<div id="share_social"><ul>';
  foreach ($share_sites as $key => $data) {
    $u = str_replace(['{url}', '{title}'],
          [urlencode($url), urlencode($title)],
          $data['url']
      );
    print '<li><a href="' . htmlspecialchars($u) . '" id="share_' . $key . '">'
            . str_replace(' ', '&nbsp;', $data['name']) . '</a></li>' . "\n";
  }
  echo '</ul> <div class="clear"></div> </div>';
}

/**
 *
 */
function share_form_email($url, $name, $email) {
  ?>
<div id="share_email">
<form action="<?php echo $url; ?>" method="post">
<fieldset>
<legend><?php echo gettext('Email'); ?></legend>
<ul>
<li>
<label><?php echo gettext('To: (up to 5 emails)'); ?></label>
<input type="text" name="e1" value="" class="share_text">
</li>
<li>
<label><?php echo gettext('Your name:'); ?></label>
<input type="text" name="fromname" value="<?php print(htmlspecialchars($name)); ?>" class="share_text">
</li>
<li>
<label><?php echo gettext('Your email:'); ?></label>
<input type="text" name="fromat" value="<?php print(htmlspecialchars($email)); ?>" class="share_text">
</li>
<li><?php echo gettext('Add a message, if you want:'); ?>

<textarea name="frommessage" rows="8" cols="40"></textarea>
<li>
<input type="submit" name="submit" value="<?php echo gettext('Send message'); ?>">
</li>
</ul>
</fieldset>
</form>
</div>
</div>
  <?php
}
