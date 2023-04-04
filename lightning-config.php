<?php

declare(strict_types=1);

use PhpLightning\Config\Backend\LnBitsBackendConfig;
use PhpLightning\Config\LightningConfig;

return (new LightningConfig())
    ->setDomain('domain.com')
    ->setReceiver('receiver')
    ->setSendableRange(100_000, 10_000_000_000)
    ->addBackend(
        (new LnBitsBackendConfig())
            ->setApiEndpoint('http://localhost:5000')  // lnbits endpoint : protocol://host:port
            ->setApiKey('XYZ'),  // put your lnbits read key here
    );
