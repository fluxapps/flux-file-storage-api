<?php

namespace FluxFileStorageApi;

require_once __DIR__ . "/../libs/flux-autoload-api/autoload.php";

use FluxFileStorageApi\Libs\FluxAutoloadApi\Adapter\Autoload\Psr4Autoload;
use FluxFileStorageApi\Libs\FluxAutoloadApi\Adapter\Checker\PhpExtChecker;
use FluxFileStorageApi\Libs\FluxAutoloadApi\Adapter\Checker\PhpVersionChecker;

PhpVersionChecker::new(
    ">=8.2"
)
    ->checkAndDie(
        __NAMESPACE__
    );
PhpExtChecker::new(
    [
        "zip"
    ]
)
    ->checkAndDie(
        __NAMESPACE__
    );

Psr4Autoload::new(
    [
        __NAMESPACE__ => __DIR__
    ]
)
    ->autoload();
