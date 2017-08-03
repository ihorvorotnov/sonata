# Sonata

Orchestrate your new WordPress project with Composer.

Latest version: [**0.1.0**](https://github.com/ihorvorotnov/sonata/releases/tag/0.1.0)

## Usage

`composer create-project ihorvorotnov/sonata project_name`

## What's inside

- Latest stable WordPress, as a Composer dependency
- Better password hashing library (uses `bcrypt`)
- Support for `.env` configuration files (WIP)
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
- [ ] Add brief descriptions of included plugins and libraries 
- [ ] Add instructions about editing `composer.json`
- [ ] Add full support for `.env` with example configs
- [ ] Finalize `wp-config.php`
- [ ] Explain autoloading and namespaces
- [ ] Add `WP-CLI` support
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

Also, consider adding shell script to automate the manual bits that left (salts, configuration etc)
