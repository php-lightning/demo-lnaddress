#  Demo lightning-address


Use the `lnaddress` to be able to *get a callback url* and *request an invoice from your server*.

This demo shows that the entire library works by using the library code + with custom configuration in your own `lightning-config.php`.

## Setup

#### From scratch

```bash
composer init
composer require php-lightning/lnaddress
```

#### Using this template

```bash
https://github.com/php-lightning/demo-lnaddress/generate
composer install
```

## Configuration

The configuration is set up in `lightning-config.php` at the root of the project.

```yaml
# This is in YAML just for readability. 
# The configuration is in PHP using the `LightningConfig` object.
LightningConfig:
- Mode: 'test|prod'
- Domain: 'https://domain.com'
- Receiver: 'receiver'
- MinSendable: 10_000        # millisats
- MaxSendable: 1_000_000_000 # millisats
- Backends:
    - LnBitsBackendConfig:
        - ApiEndpoint: 'http://localhost:5000'
        - ApiKey: 'XYZ'
```

## What can you do?

#### Get a callback url

```bash
vendor/bin/lnaddress callback-url
```
<img src="images/callback-url.jpg" alt="Get a callback url command example">

#### Request an invoice from your server (in millisats)

This is the FE part which could be listening in your own server

```bash
php -S localhost:8080 vendor/php-lightning/lnaddress/index.php

# And then request using amount as GET param:
http://localhost:8080/?amount=100000  
```
<img src="images/index-as-server.jpg" alt="Request an invoice from your server example">

Or as command:
```php
php vendor/php-lightning/lnaddress/index.php 100000
```
<img src="images/index-as-command.jpg" alt="Request an invoice using index.php as command example">