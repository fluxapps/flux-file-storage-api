<?php

namespace FluxFileStorageApi\Service\Storage\Command;

use FluxFileStorageApi\Adapter\Storage\StorageConfigDto;
use FluxFileStorageApi\Service\Storage\StorageUtils;

class DeleteCommand
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


    public function delete(string $path) : void
    {
        $full_path = $this->getFullPath_(
            $path
        );

        $this->delete_(
            $full_path
        );
    }
}
