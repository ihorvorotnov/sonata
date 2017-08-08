# Sonata

Orchestrate your new WordPress project with Composer.

Latest version: [**0.1.0**](https://github.com/ihorvorotnov/sonata/releases/tag/0.1.0)

## Requirements

- PHP 7.0 and newer. Because it's 2017, you know
- Native PHP `gettext` extension
- [Composer](https://getcomposer.org/), obviously
- [WP-CLI](http://wp-cli.org/)

## Usage

**Create new project**

```
composer create-project ihorvorotnov/sonata project_name
```

**Install new package or WordPress plugin**

```
composer require author/package
composer require wpackagist/plugin-name
```

**Update all packages to latest versions**

```
composer update
```

## What's inside

- Latest stable WordPress, as a Composer dependency
- Better password hashing library (uses `bcrypt`)
- Support for `.env` configuration files
- Some plugins for development (as Composer dependencies):
	- [Query Monitor](https://packagist.org/packages/johnbillion/query-monitor) by @johnbillion
	- [Laps](https://packagist.org/packages/rarst/laps) by @Rarst
	- [Non-Production Robots Ignore](https://packagist.org/packages/mgargano/non-production-robots-ignore) by @matgargano
	- [User Switching](https://packagist.org/packages/johnbillion/user-switching) by @johnbillion
	- [Airplane](https://packagist.org/packages/norcross/airplane-mode) Mode by @norcross

### Project directory layout

```
- app
  + languages
  + mu-plugins
  + plugins
  + themes
  + uploads
+ core
+ vendor
⚬ .gitignore
⚬ composer.json
⚬ composer.lock
⚬ index.php
⚬ LICENSE
⚬ README.md
⚬ wp-config.php
```

## Additional Composer packages

Following packages are useful, but not mandatory. Depends on the project.

`@todo To be done later`

## Roadmap

- [x] Add `.gitkeep` files to preserve base directory structure
- [x] Remove `.gitkeep` files, replace them with WP's empty `index.php` files
- [x] Add links for included plugins and libraries
- [x] Add complete set of rules to `.gitignore`
- [x] Add `.env.example`
- [x] Add composer post-install action to rename `env.example` to `.env`
- [ ] Add full support for `.env` with example configs
- [ ] Finalize `wp-config.php`
- [x] Add `WP-CLI` support
- [ ] Add brief descriptions of included plugins and libraries 
- [ ] Add instructions about editing `composer.json`
- [ ] Explain autoloading and namespaces
- [ ] Add `.editorconfig` support (PSR or WordPress?)

## Ideas

Consider using alternative directory layout:

```
app/
  content/
    mu-plugins/
    plugins/
    themes/
    uploads/
  core/
config/
vendor/
wp-config.php
```

to move `wp-config.php` and `config/` directory one level up, serving the site from `app/` directory. For better security.
