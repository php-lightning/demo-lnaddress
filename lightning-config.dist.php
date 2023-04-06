<?php

declare(strict_types=1);

use PhpLightning\Config\Backend\LnBitsBackendConfig;
use PhpLightning\Config\LightningConfig;

return (new LightningConfig())
    ->setDomain('your-domain.com')
    ->setReceiver('receiver')
    ->setSendableRange(100_000, 10_000_000_000)
    ->setCallbackUrl('https://your-domain.com/path/to/index.php')
    ->addBackend(
        (new LnBitsBackendConfig())
            ->setApiEndpoint('http://localhost:5000')
            ->setApiKey('api_key')
    );
