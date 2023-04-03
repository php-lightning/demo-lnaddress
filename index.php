#!/usr/bin/env php
<?php
header("Access-Control-Allow-Origin: *");

require __DIR__ . '/vendor/autoload.php';

use Gacela\Framework\Gacela;
use PhpLightning\Lightning;

Gacela::bootstrap(__DIR__, Lightning::configFn());

$milliSats = (int)($argv[1] ?? $_GET['amount'] ?? 0);

echo Lightning::generateInvoice($milliSats);
echo PHP_EOL;
