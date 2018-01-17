# WP Migrate DB PRO Installer

A composer plugin that makes installing [WP Migrate DB Pro] with [composer] easier, based on the amazing work by PhilippBaschke and his [acf-pro-installer] https://github.com/PhilippBaschke/acf-pro-installer

It reads your :key: WP Migrate DB Pro key and site URL from the **environment** or a **.env file**.

[WP Migrate DB Pro]: https://deliciousbrains.com/wp-migrate-db-pro
[composer]: https://github.com/composer/composer

## Usage

**1. Add the package repository to the [`repositories`][composer-repositories] field in `composer.json` 
   (based on this [gist][package-gist]):**

```json
{
  "type": "package",
  "package": {
    "name": "deliciousbrains/wp-migrate-db-pro",
    "version": "*.*.*(.*)",
    "type": "wordpress-plugin",
    "dist": {
      "type": "zip",
      "url": "https://deliciousbrains.com/dl/wp-migrate-db-pro-latest.zip"
    },
    "require": {
      "harmonic/wp-migrate-db-pro": "^1.0",
      "composer/installers": "^1.0"
    }
  }
}
```
Replace `"version": "*.*.*(.*)"` with your desired version.

Replace `"type": "wordpress-plugin"` with `"type": "library"` if you would like to have WP MIGRATE DB PRO installed in the `./vendor` directory instead of `./wp-content/plugins`. This may be desireable if for example, you are including WP MIGRATE DB PRO in a WordPress theme.

If you also require the media files and cli plugins you can add these as well:

```json
{
  "type": "package",
  "package": {
    "name": "deliciousbrains/wp-migrate-db-pro",
    "version": "*.*.*(.*)",
    "type": "wordpress-plugin",
    "dist": {
      "type": "zip",
      "url": "https://deliciousbrains.com/dl/wp-migrate-db-pro-media-files-latest.zip"
    },
    "require": {
      "harmonic/wp-migrate-db-pro": "^1.0",
      "composer/installers": "^1.0"
    }
  }
},
{
  "type": "package",
  "package": {
    "name": "deliciousbrains/wp-migrate-db-pro",
    "version": "*.*.*(.*)",
    "type": "wordpress-plugin",
    "dist": {
      "type": "zip",
      "url": "https://deliciousbrains.com/dl/wp-migrate-db-pro-cli-latest.zip"
    },
    "require": {
      "harmonic/wp-migrate-db-pro": "^1.0",
      "composer/installers": "^1.0"
    }
  }
}
```

**2. Make your WP MIGRATE DB PRO PRO key available**

Set the environment variable **`WP_MIGRATE_DB_PRO_KEY`** to your [WP Migrate DB Pro PRO key][acf-account].
Set the environment variable **`APP_URL`** to your website URL. Full URL is accepted so you can also use this variable in your wp-config.php.

Alternatively you can add an entry to your **`.env`** file:

```ini
# .env (same directory as composer.json)
WP_MIGRATE_DB_PRO_KEY=Your-Key-Here
APP_URL=http://site.com
```

**3. Require WP Migrate DB Pro**

```sh
composer require deliciousbrains/wp-migrate-db-pro:*
```
You can specify an [exact version][composer-versions] (that matches your desired version).

If you use **`*`**, composer will install the version from the package repository (see 1). This has the benefit that you only need to change the version in the package repository when you want to update.

*Be aware that `composer update` will only work if you change the `version` in the package repository. Decreasing the version only works if you require an [exact version][composer-versions].*

[composer-repositories]: https://getcomposer.org/doc/04-schema.md#repositories
[composer-versions]: https://getcomposer.org/doc/articles/versions.md
[package-gist]: https://gist.github.com/fThues/705da4c6574a4441b488
[acf-account]: https://deliciousbrains.com/my-account/
