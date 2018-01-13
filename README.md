# WP Migrate DB PRO Installer

[![Packagist](https://img.shields.io/packagist/v/Harmonic/acf-pro-installer.svg?maxAge=3600)](https://packagist.org/packages/Harmonic/acf-pro-installer)
[![Packagist](https://img.shields.io/packagist/l/Harmonic/acf-pro-installer.svg?maxAge=2592000)](https://github.com/Harmonic/acf-pro-installer/blob/master/LICENSE)
[![Travis](https://img.shields.io/travis/Harmonic/acf-pro-installer.svg?maxAge=3600)](https://travis-ci.org/Harmonic/acf-pro-installer)
[![Coveralls](https://img.shields.io/coveralls/Harmonic/acf-pro-installer.svg?maxAge=3600)](https://coveralls.io/github/Harmonic/acf-pro-installer)

A composer plugin that makes installing [WP Migrate DB Pro] with [composer] easier. 

It reads your :key: WP Migrate DB Pro key from the **environment** or a **.env file**.

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
      "url": "https://deliciousbrains.com/dl/wp-migrate-db-pro-cli-latest.zip?"
    },
    "require": {
      "harmonic/wp-migrate-db-pro": "^1.0",
      "composer/installers": "^1.0"
    }
  }
}
```
Replace `"version": "*.*.*(.*)"` with your desired version.

Replace `"type": "wordpress-plugin"` with `"type": "library"` if you would like to have ACF PRO installed in the `./vendor` directory instead of `./wp-content/plugins`. This may be desireable if for example, you are including ACF PRO in a WordPress theme.

**2. Make your WP MIGRATE DB PRO PRO key available**

Set the environment variable **`WP_MIGRATE_DB_PRO_KEY`** to your [WP Migrate DB Pro PRO key][acf-account].

Alternatively you can add an entry to your **`.env`** file:

```ini
# .env (same directory as composer.json)
WP_MIGRATE_DB_PRO_KEY=Your-Key-Here
APP_URL=site.com
```

**3. Require WP Migrate DB Pro PRO**

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
