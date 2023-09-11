# This is my package laravel-foodics

[![Latest Version on Packagist](https://img.shields.io/packagist/v/almesery/laravel-foodics.svg?style=flat-square)](https://packagist.org/packages/almesery/laravel-foodics)
[![Total Downloads](https://img.shields.io/packagist/dt/almesery/laravel-foodics.svg?style=flat-square)](https://packagist.org/packages/almesery/laravel-foodics)

## Installation

You can install the package via composer:

```bash
composer require almesery/laravel-foodics
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Foodics\FoodicsServiceProvider"
```

This is the contents of the published config file:

```php
return [

    "foodics_mode" => env("FOODICS_MODE", "sandbox"),

    "client_id" => env("FOODICS_CLIENT_ID", null),

    "client_secret" => env("FOODICS_CLIENT_SECRET", null),

    "redirect_uri" => env("FOODICS_REDIRECT_URI", null),

    "webhook_url" => env("FOODICS_WEBHOOK_URL", null)
    
];
```

## Usage

### First Make OAuth Redirection
make sure you open foodics account
```php
    
    use Foodics\Services\FoodicsRedirectServices;
    
    $foodicsOAuthServices = new FoodicsRedirectServices();
    
    return $foodicsOAuthServices->redirect();
    
    // you will redirect to [FOODICS_REDIRECT_URI], the url contain code as a query parameter
```

### Second Make Authorization Request to get Access Token
```php
    
   use Foodics\Services\FoodicsAuthorizationServices;
    
   $foodicsAuthorizationServices = new FoodicsAuthorizationServices();
   
   // $code variable you can get from the previous request 
   $response =  $foodicsOAuthServices->authorize($code);
   
   $access_token = $response["access_token"];
```

### Who IAm Request
```php
    
   use Foodics\Foodics;
    
   $foodics = new Foodics($access_token);
    
   $data = $foodics->settings()->whoami();
   
   echo $data;
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Abdalrahman Almesery](https://github.com/almesery)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
