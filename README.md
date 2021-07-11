# Model Tracker

## Installation

You can install the package via composer:

```bash
composer require ghoni-jee/model-tracker
```

You can publish and custom Blueprint Macro Or Model Trait with:

```bash
php artisan vendor:publish --provider="GhoniJee\ModelTracker\ModelTrackerServiceProvider"
```

## Usage

1. Add Model tracker to model migration

```php
....
     public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            ....
            $table->modelTracker();
        });
    }
...
```

2. Add Model Tracker Trait to Model

```

class User extends Authenticatable
{
    use ModelTracker;
    ....
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:author_name](https://github.com/ghonijee)

## License

The MIT License (MIT).
