# Simple repeat/iteration utility.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/terpomoj/times.svg?style=flat-square)](https://packagist.org/packages/terpomoj/times)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/terpomoj/times/run-tests?label=tests)](https://github.com/terpomoj/times/actions?query=workflow%3ATests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/terpomoj/times.svg?style=flat-square)](https://packagist.org/packages/terpomoj/times)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require terpomoj/times
```

## Usage

```php
use Terpomoj\Times\Times;
Times::of(5)->do(fn ($i) => echo "hello! {$i}");
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [BinotaLIU](https://github.com/BinotaLIU)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
