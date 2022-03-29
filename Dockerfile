ARG ALPINE_IMAGE=alpine:latest
ARG FLUX_AUTOLOAD_API_IMAGE=docker-registry.fluxpublisher.ch/flux-autoload/api:latest
ARG FLUX_NAMESPACE_CHANGER_IMAGE=docker-registry.fluxpublisher.ch/flux-namespace-changer:latest

FROM $FLUX_AUTOLOAD_API_IMAGE AS flux_autoload_api
FROM $FLUX_NAMESPACE_CHANGER_IMAGE AS flux_autoload_api_build
ENV FLUX_NAMESPACE_CHANGER_FROM_NAMESPACE FluxAutoloadApi
ENV FLUX_NAMESPACE_CHANGER_TO_NAMESPACE FluxFileStorageApi\\Libs\\FluxAutoloadApi
COPY --from=flux_autoload_api /flux-autoload-api /code
RUN $FLUX_NAMESPACE_CHANGER_BIN

FROM $ALPINE_IMAGE AS build

COPY --from=flux_autoload_api_build /code /flux-file-storage-api/libs/flux-autoload-api
COPY . /flux-file-storage-api

FROM scratch

LABEL org.opencontainers.image.source="https://github.com/flux-eco/flux-file-storage-api"
LABEL maintainer="fluxlabs <support@fluxlabs.ch> (https://fluxlabs.ch)"

COPY --from=build /flux-file-storage-api /flux-file-storage-api
