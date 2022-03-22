<?php

namespace FluxFileStorageApi\Channel\Storage\Command;

use Exception;
use FluxFileStorageApi\Adapter\Config\StorageConfigDto;
use FluxFileStorageApi\Channel\Storage\StorageUtils;

class StoreCommand
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


    public function store(string $path, string $data) : void
    {
        $full_path = $this->getFullPath_(
            $path
        );

        $this->mkdirParent(
            $full_path
        );

        if (!file_put_contents($full_path, $data)) {
            throw new Exception("Failed to write " . $full_path);
        }
    }
}
