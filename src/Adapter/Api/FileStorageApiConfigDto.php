<?php

namespace FluxFileStorageApi\Adapter\Api;

use FluxFileStorageApi\Adapter\Config\StorageConfigDto;

class FileStorageApiConfigDto
{

    private function __construct(
        public readonly StorageConfigDto $storage_config
    ) {

    }


    public static function new(
        StorageConfigDto $storage_config
    ) : static {
        return new static(
            $storage_config
        );
    }


    public static function newFromEnv() : static
    {
        return static::new(
            StorageConfigDto::newFromEnv()
        );
    }
}
