<?php

// @docksal Drush alias
$aliases['docksal'] = array(
  'root' => '/var/www/docroot',
  'uri' => 'docksal-composer.docksal',
);
// @self Drush alias
$aliases['self'] = array(
  'root' => '/var/www/docroot',
  'uri' => 'docksal-composer.docksal',
  'path-aliases' => array(
    '%drush-script' => 'fin drush' . $drush_major_version,
  ),
);