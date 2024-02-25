# Laravel Action Command

## Installation

To get started with Laravel Action Command, simply require the package
via [Composer](https://packagist.org/packages/lozemc/laravel-actions):

```bash
composer require lozemc/laravel-actions
```

Next, add the following line to the $commands array in your `/App/Console/Kernel.php` file:

```php
protected $commands = [
    
    // ...

    \App\Console\Commands\ActionMakeCommand::class,
];
```

If the protected $commands array does not exist, you will need to add it.

## Usage

Once installed and configured, you can use the artisan command to create a new action:

```bash
php artisan make:action UpdatePostAction
```

This will generate a new action class named `UpdatePostAction` in the `App\Actions` namespace. You can then implement
your business logic within this action class.

###

[Laravel Service Command](https://github.com/lozemc/laravel-service)
