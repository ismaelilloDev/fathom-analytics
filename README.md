# Warning

This package is under development right now. Any suggestions are greatly appreciated!

## Installation

Install the package via composer:

```bash
composer require ismaelillodev/fathom-analytics:dev-main
```

Publish the config file with and add your FATHOM_ACCESS_TOKEN:

```bash
php artisan vendor:publish --tag="fathom-analytics-config"
```

Add your FATHOM_ACCESS_TOKEN variable to your .env

## Usage

```php

    use Ismaelillodev\FathomAnalytics\DTO\Aggregation;
    use Ismaelillodev\FathomAnalytics\FathomAnalytics;

    public function __construct(
            private FathomAnalytics $fathomAnalytics
    ){}

    public function handle()
    {
        $response = $this->fathomAnalytics->aggregations(
            new Aggregation(
                entity: 'pageview',
                entity_id: 'your_site_id',
                aggregates: 'uniques',
                field_grouping: 'hostname,pathname'
            ));
        //do something awesome with the response!
    }
```
## Current features

If you have any questions about how to make a specific request you can visit the API documentation (https://usefathom.com/api).

### Aggregations

```php

    $this->fathomAnalytics->aggregations(
            new Aggregation(
                entity: 'pageview',
                entity_id: 'your_site_id',
                aggregates: 'visits',
            ));
        //do something awesome with the response!
```
            
## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [ismaelilloDev](https://github.com/ismaelillodev)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
