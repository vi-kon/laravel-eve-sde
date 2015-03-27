# EVE Online Static Data Export (SDE) for Laravel 5

The package contains migration, seed and model files for [EVE Online](http://eveonline.com) [Static Data Export](https://developers.eveonline.com/resource/static-data-export).

**Database version:** Tiamat 1.0 110751

## Table of content

* [Features](#features)
* [Installation](#installation)

---
[Back to top][top]

## Features

* database independent migration and seed files (not only MSSQL)
* models for each table with relation methods

---
[Back to top][top]

## Installation

### Basic

To `composer.json` file add following lines:

```json
// to "require" object
"vi-kon/laravel-eve-sde": "~1.*"
```

Or run following command in project root:

```bash
composer require vi-kon/laravel-eve-sde
```

In Laravel 5 project add following lines to `app.php`:

```php
// to providers array
'ViKon\EveSDE\EveSDEServiceProvider',
```

---
[Back to top][top]

## License

This package is licensed under the MIT License

---
[Back to top][top]

[top]: #eve-online-static-data-export-sde-for-laravel-5