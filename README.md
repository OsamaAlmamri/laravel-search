#  package laravel-search

[![Latest Version on Packagist](https://img.shields.io/packagist/v/osamaalmamri/laravel-search.svg?style=flat-square)](https://packagist.org/packages/osamaalmamri/laravel-search)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/osamaalmamri/laravel-search/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/osamaalmamri/laravel-search/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/osamaalmamri/laravel-search/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/osamaalmamri/laravel-search/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/osamaalmamri/laravel-search.svg?style=flat-square)](https://packagist.org/packages/osamaalmamri/laravel-search)

this package is facility the search in model with complex relations

## Installation

You can install the package via composer:

```bash
composer require osamaalmamri/laravel-search
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-search-config"
```

This is the contents of the published config file:



```php
return [

// this is the key namein Request $request 
 'key' => "search"
];
```


## Usage

in the modal we use searchable class 
```php
use OsamaAlmamri\LaravelSearch\Searchable;

class YourModal extends Model
{
  use Searchable;
  
  // define the name of cols 
  //if you need search in another fields of another table using the relation name then col name
  // you can search any  related relation as the following
      public $searchable = ['name','description','user.name','user.phone','user.role.name'];
}
```





## Credits

- [Osama Al-mamari](https://github.com/OsamaAlmamri)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
