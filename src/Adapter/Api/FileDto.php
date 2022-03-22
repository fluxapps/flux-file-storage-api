<?php

namespace FluxFileStorageApi\Adapter\Api;

class FileDto
{

    private function __construct(
        public readonly string $name
    ) {

    }


    public static function new(
        string $name
    ) : static {
        return new static(
            $name
        );
    }
}
