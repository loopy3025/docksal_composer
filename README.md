# BLT Docksal For WebNY
Fresh shell of a BLT Drupal site for your local environment.

## New Site

Clone this repository in your ~/projects folder and run `fin init`. After that, delete the .git folder so that you can create your own repo for the project.

## Existing BLT Site

Clone this repository in a temporary location. Copy the .docksal folder and paste it into your existing BLT Drupal site. Run `fin init`.

## Existing Non-BLT Site

*This is a work in progress.*

Clone this repository in a temporary location. Copy the /.docksal and /blt folders and paste them into your existing BLT Drupal site. 

You will also need to copy the docroot/composer.json file and edit it to include all the projects in your site. 

Make sure the modules, themes, libraries, and other resources are saved to the right location:
```
        "installer-paths": {
            "docroot/core": [
                "type:drupal-core"
            ],
            "docroot/modules/contrib/{$name}": [
                "type:drupal-module"
            ],
            "docroot/modules/custom/{$name}": [
                "type:drupal-custom-module"
            ],
            "docroot/profiles/contrib/{$name}": [
                "type:drupal-profile"
            ],
            "docroot/profiles/custom/{$name}": [
                "type:drupal-custom-profile"
            ],
            "docroot/themes/contrib/{$name}": [
                "type:drupal-theme"
            ],
            "docroot/themes/custom/{$name}": [
                "type:drupal-custom-theme"
            ],
            "docroot/libraries/{$name}": [
                "type:drupal-library",
                "type:bower-asset",
                "type:npm-asset"
            ],
            "drush/Commands/{$name}": [
                "type:drupal-drush",
                "type:drupal-drush"
            ]
        },
```
You will note that Drupal Core is not included here, but blt is. blt will tell your site which version of Drupal it should install based on what version of blt you have chosen.

If you are using any patches on any projects, you will need to indicate them in the composer file as well. Example:
```
        "patches": {
            "drupal/core": {
                "config": "https://www.drupal.org/files/issues/2018-09-20/2915036-79.patch"
            }
        },
```

Run `fin init`.