# Installation

Via [composer](http://getcomposer.org):

```bash
$ composer require sunel/eav
```

You'll need to register the service provider, in your `config/app.php`:

```php
'providers' => [
	...
	Kissneck\Providers\LaravelServiceProvider::class,
]
```


## Api

You'll need to register the service provider if you need to use the api, in your `config/app.php`:

```php
'providers' => [
    ...
    Kissneck\Api\ServiceProvider::class,
]
```