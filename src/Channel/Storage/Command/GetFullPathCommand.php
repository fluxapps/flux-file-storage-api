<?php

namespace FluxFileStorageApi\Channel\Storage\Command;

use FluxFileStorageApi\Adapter\Storage\StorageConfigDto;
use FluxFileStorageApi\Channel\Storage\StorageUtils;

class GetFullPathCommand
{

    use StorageUtils;

    private function __construct(
        private readonly StorageConfigDto $storage_config
    ) {

    }


    public static function new(
        StorageConfigDto $storage_config
    ) : static {
        return new static(
            $storage_config
        );
    }


    public function getFullPath(string $path) : ?string
    {
        $full_path = $this->getFullPath_(
            $path
        );
        if (!file_exists($full_path)) {
            return null;
        }

        return $full_path;
    }
}
