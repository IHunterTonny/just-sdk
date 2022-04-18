# PHP Just API

## Requirements
 - PHP >= 7.4
 - A PSR-17 implementation
 - A PSR-18 implementation

## Install preparations
Add package repository in `composer.json` of your project:
```bash
"repositories": [
    {
      "type": "github",
      "url": "https://github.com/IHunterTonny/php-just-api"
    }
  ]
```

## Quick install
This command will get you up and running quickly with Guzzle HTTP client, adapter and factory:
```bash
composer require just/api guzzlehttp/guzzle:^7.0 php-http/guzzle7-adapter http-interop/http-factory-guzzle 
```

## Advanced install (with specific http-client)
We are decoupled from any HTTP messaging client with help by [HTTPlug](https://httplug.io).

```bash
composer require just/api symfony/http-client nyholm/psr7
```

## Basic usage
```php
<?php

// This file is generated by Composer
require_once __DIR__ . '/vendor/autoload.php';

// Simple
$sdk = \Just\Sdk('your_api_key');
// From `$sdk` object, you have access to all available PHP Just API endpoints. E.g.:
$data = $sdk->api('car')->result();

// With specific parameters
$sdk = \Just\Sdk('your_api_key');
// From `$sdk` object, you have access to all available PHP Just API endpoints. E.g.:
$data = $sdk->api('car')->result('id1,id2');
```

## Advanced usage
```php
<?php

// This file is generated by Composer
require_once __DIR__ . '/vendor/autoload.php';

// With specific options: client builder, api version, api uri etc.
$sdk = \Just\Sdk(
    'your_api_key'
    new \Just\Options([
        'clientBuilder' => new \Symfony\Component\HttpClient\HttplugClient(),
        'apiVersion' => 'v2',
    ])
);
// From `$sdk` object, you have access to all available PHP Just API endpoints. E.g.:
$data = $sdk->api('car')->result();