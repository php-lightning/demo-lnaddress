#  Demo lightning-address

### Setup

1) Install the dependencies:
```bash
# From scratch:
composer init
composer require php-lightning/lightning-address

# Or, in case you are using this template, simply install:
composer install
```

Then you can *get a callback url* and *request an invoice from your server*.

2) Get a callback url
```bash
vendor/bin/lnaddress callback-url
```

3) Request an invoice from your server (in millisats)
```bash
php index.php 1000000
```

### Configuration

The configuration is set up in `lightning-config.php` at the root of the project.

```yaml
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