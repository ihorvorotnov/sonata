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

- Add instructions about editing `composer.json`
- Add full support for `.env` with example configs
- Finalize `wp-config.php`
- Explain autoloading and namespaces 
