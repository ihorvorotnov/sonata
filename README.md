# Sonata

Orchestrate your new WordPress project with Composer.

Latest version: [**1.1.0**](https://github.com/ihorvorotnov/sonata/releases/tag/1.1.0)

## Requirements

- PHP 7.0 and newer. Because it's 2018, you know
- Native PHP `gettext` extension (will be used in future versions)
- [Composer](https://getcomposer.org/), obviously
- [WP-CLI](http://wp-cli.org/)

## Usage

**Create new project**

```
composer create-project ihorvorotnov/sonata project_name
```

**Install new package or WordPress plugin**

```
composer require vendor/package

composer require wpackagist-plugin/{plugin-slug}
```

**Update specific package, WordPress or a plugin to latest version**

```
composer update vendor/package

composer update johnpbloch/wordpress
composer update johnbillion/query-monitor
composer wpackagist-plugin/{plugin-slug}
```

**Update all packages to latest versions**

```
composer update
```

## What's inside

- Latest stable WordPress, as a Composer dependency
- Better password hashing library (uses `bcrypt`)
- Support for `.env` configuration files
- Automatically generated WordPress salts in `.env` using WP-CLI
- Optimized autoloader by default
- Symlinked Twenty Seventeen theme
- Some plugins for development (as Composer dependencies):
	- [Query Monitor](https://packagist.org/packages/johnbillion/query-monitor) by @johnbillion
	- [Laps](https://packagist.org/packages/rarst/laps) by @Rarst
	- [Non-Production Robots Ignore](https://packagist.org/packages/mgargano/non-production-robots-ignore) by @matgargano
	- [User Switching](https://packagist.org/packages/johnbillion/user-switching) by @johnbillion
	- [Airplane Mode](https://packagist.org/packages/norcross/airplane-mode) by @norcross
- Prevent installing packages with known vulnerabilities with [SecurityAdvisories](https://packagist.org/packages/roave/security-advisories) by @Roave
- Ready for Memcached object cache, including custom `WP_CACHE_KEY_SALT`

### Project directory layout

```
- app
  + languages
  + mu-plugins
  + plugins
  + themes
  + uploads
  • debug.log
- config
  • local.php
  • production.php
  • staging.php  
+ core
+ vendor
• .env
• .env.example
• .gitignore
• composer.json
• composer.lock
• index.php
• LICENSE
• wp-cli.yml
• wp-config.php
```

## Additional Composer packages

Following packages are useful, but not mandatory. Depends on the project.

`@todo To be done later`
