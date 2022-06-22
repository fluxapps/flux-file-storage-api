# flux-file-storage-api

File Storage Api

## Installation

Hint: Use `latest` as `%tag%` (or omit it) for get the latest build

### Non-Composer

```dockerfile
COPY --from=docker-registry.fluxpublisher.ch/flux-file-storage/api:%tag% /flux-file-storage-api /%path%/libs/flux-file-storage-api
```

or

```dockerfile
RUN (mkdir -p /%path%/libs/flux-file-storage-api && cd /%path%/libs/flux-file-storage-api && wget -O - https://docker-registry.fluxpublisher.ch/api/get-build-archive/flux-file-storage/api.tar.gz?tag=%tag% | tar -xz --strip-components=1)
```

or

Download https://docker-registry.fluxpublisher.ch/api/get-build-archive/flux-file-storage/api.tar.gz?tag=%tag% and extract it to `/%path%/libs/flux-file-storage-api`

Hint: If you use `wget` without pipe use `--content-disposition` to get the correct file name

#### Usage

```php
require_once __DIR__ . "/%path%/libs/flux-file-storage-api/autoload.php";
```

### Composer

```json
{
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "flux/flux-file-storage-api",
                "version": "%tag%",
                "dist": {
                    "url": "https://docker-registry.fluxpublisher.ch/api/get-build-archive/flux-file-storage/api.tar.gz?tag=%tag%",
                    "type": "tar"
                },
                "autoload": {
                    "files": [
                        "autoload.php"
                    ]
                }
            }
        }
    ],
    "require": {
        "flux/flux-file-storage-api": "*"
    }
}
```

## Environment variables

| Variable | Description | Default value |
| -------- | ----------- | ------------- |
| **FLUX_FILE_STORAGE_API_STORAGE_FOLDER** | Storage directory | /file-storage |

Minimal variables required to set are **bold**

## Example

Look at [flux-file-storage-rest-api](https://github.com/flux-caps/flux-file-storage-rest-api)
