# flux-file-storage-api

File Storage Api

## Installation

```dockerfile
COPY --from=docker-registry.fluxpublisher.ch/flux-file-storage/api:latest /flux-file-storage-api /%path%/libs/flux-file-storage-api
```

## Usage

```php
require_once __DIR__ . "/%path%/libs/flux-file-storage-api/autoload.php";
```

```php
FileStorageApi::new();
```

## Environment variables

| Variable | Description | Default value |
| -------- | ----------- | ------------- |
| **FLUX_FILE_STORAGE_API_STORAGE_FOLDER** | Storage directory | /file-storage |

Minimal variables required to set are **bold**

## Example

Look at [flux-file-storage-rest-api](https://github.com/flux-eco/flux-file-storage-rest-api)
