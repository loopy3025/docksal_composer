# Docksal Composer Library
Add docksal to your composer-built Drupal site.

## Usage:

Add the following to your Composer file's Libraries section:

```
    "repositories": {
      "docksal_composer": {
        "type": "package",
        "package": {
          "name": "loopy3025/docksal_composer",
          "version": "1.0.0",
          "type": "local-dev",
          "dist": {
            "url": "https://github.com/loopy3025/docksal_composer/archive/master.zip",
            "type": "zip"
          }
        }
      },
```

Add the following to your Composer file's installer-paths:

```
        "installer-paths": {
            ".docksal": [
                "type:local-dev"
            ],
        }
```

Add the following to your Composer.require

```
"docksal_composer" : "*",
```

And run composer update loopy3025/docksal_composer
