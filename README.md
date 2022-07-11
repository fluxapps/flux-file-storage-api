# flux-file-storage-api

File Storage Api

## Installation

### Native

#### Download

```dockerfile
RUN (mkdir -p /%path%/libs/flux-file-storage-api && cd /%path%/libs/flux-file-storage-api && wget -O - https://github.com/flux-eco/flux-file-storage-api/releases/download/%tag%/flux-file-storage-api-%tag%-build.tar.gz | tar -xz --strip-components=1)
```

or

Download https://github.com/flux-eco/flux-file-storage-api/releases/download/%tag%/flux-file-storage-api-%tag%-build.tar.gz and extract it to `/%path%/libs/flux-file-storage-api`

#### Load

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
                    "url": "https://github.com/flux-eco/flux-file-storage-api/releases/download/%tag%/flux-file-storage-api-%tag%-build.tar.gz",
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
