<?php
global $allow_download;
require_once dirname( __DIR__ ) . '/lib/fns/bootstrap.php';

use function UpdateServer\utilities\{getLatestPackage};
$package_info = getLatestPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CMC Video Player WordPress Plugin</title>
  <link rel="stylesheet" href="assets/flexboxgrid.min.css" />
  <link rel="stylesheet" href="assets/styles.css" />
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12"><img src="assets/banner-1544x500.jpg" style="width: auto; max-width: 100%;" /></div>
    </div>
    <div class="row">
      <div class="col-xs-2 hide-mobile"><img src="assets/icon-256x256.jpg" /></div>
      <div class="col-xs">
        <h1 class="plugin-title">CMC Video Player</h1>
        <span class="byline">By <a href="https://mwender.com">Michael Wender</a></span>
      </div>
      <div class="col-md-3 end-md"><?php if( $allow_download ){ ?><a href="<?= $package_info['package']; ?>" class="button">Download</a><?php } ?></div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <h2>Description</h2>
        <p>Implements Cloud Media Center's video player on your WordPress site.</p>
        <p>This plugin provides an admin screen, found under "Settings > CMC Player", for adding Cloud Media Center's player script. Once you've added the player, you may use the following shortcode to display the player:</p>
        <p><code>[cmcplayer/]</code> - displays the CMC Player saved in the "CMC Player Script" field below. Available attributes:</p><ul style="list-style-type: disc; margin-left: 2em;"><li><code>show_on_desktop</code> (bool) - Show on desktop? Default: <code>true</code></li><li><code>show_on_mobile</code> (bool) - Show on mobile? Default: <code>true</code></li></ul><p>Example: <code>[cmcplayer show_on_desktop="true" show_on_mobile="false"/]</code></p>
        <h2>Changelog</h2>
        <h3>1.0.0</h3>
        <ul>
          <li>First release.</li>
        </ul>
      </div>
      <div class="col-md-4 col-xs-12">
        <table>
          <tr>
            <th style="width: 50%">Version:</th>
            <td style="width: 50%"><?= $package_info['version'] ?></td>
          </tr>
          <tr>
            <th>Last updated:</th>
            <td><?= $package_info['last_update'] ?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="footer">&copy; <?= date('Y') ?> Cloud Media Center. All rights reserved.</div>
</body>
</html>