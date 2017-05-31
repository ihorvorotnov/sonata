# Sonata

Orchestrate your new WordPress project with Composer.

## Usage

`composer create-project ihorvorotnov/sonata project_name`

## What's inside

- Latest stable WordPress, as a Composer dependency
- Better password hashing library (uses `bcrypt`)
- Support for `.env` configuration files (WIP)
- Some plugins for development (as Composer dependencies):
	- Query Monitor
	- Laps
	- Non-Production Robots Ignore
	- User Switching
	- Airplane Mode

```
- app/ # Custom wp-content directory
  - mu-plugins/
  - plugins/
  - themes/
  - uploads/
- core/ # WordPress core
- .gitignore
- composer.json
- index.php
- LICENSE
- README.md
- wp-config.php
```

## Additional Composer packages

Following packages are useful, but not mandatory. Depends on the project.

`@todo To be done later`

## Roadmap

- [x] Add `.gitkeep` files to preserve base directory structure
- [ ] Add links and descriptions for included plugins and libraries
- [ ] Add instructions about editing `composer.json`
- [ ] Add full support for `.env` with example configs
- [ ] Finalize `wp-config.php`
- [ ] Explain autoloading and namespaces
- [ ] Add `WP-CLI` support

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
