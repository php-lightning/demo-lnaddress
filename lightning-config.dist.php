<?php

declare(strict_types=1);

use PhpLightning\Config\Backend\LnBitsBackendConfig;
use PhpLightning\Config\LightningConfig;

return (new LightningConfig())
    ->setDomain('localhost')
    ->setReceiver('default-receiver')
    ->setSendableRange(min: 100_000, max: 10_000_000_000)
    ->setCallbackUrl('localhost:8000/callback')
    ->setBackends([
        'user_1' => (new LnBitsBackendConfig())
            ->setApiEndpoint('http://localhost:5000')
            ->setApiKey('api_key_1'),
        'user_2' => (new LnBitsBackendConfig())
            ->setApiEndpoint('http://localhost:5000')
            ->setApiKey('api_key_2')
    ]);
