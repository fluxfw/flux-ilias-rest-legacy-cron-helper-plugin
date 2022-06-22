# flux-ilias-rest-legacy-cron-helper-plugin

ILIAS Rest Legacy Cron Plugin Helper

Only needed for ILIAS < 8

## Installation

Hint: Use `latest` as `%tag%` (or omit it) for get the latest build

### flux-ilias-rest-legacy-cron-helper-plugin

```dockerfile
COPY --from=docker-registry.fluxpublisher.ch/flux-ilias-api/rest-legacy-cron-helper-plugin:%tag% /flux-ilias-rest-legacy-cron-helper-plugin %web_root%/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin
```

or

```dockerfile
RUN (mkdir -p %web_root%/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin && cd %web_root%/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin && wget -O - https://docker-registry.fluxpublisher.ch/api/get-build-archive/flux-ilias-api/rest-legacy-cron-helper-plugin.tar.gz?tag=%tag% | tar -xz --strip-components=1)
```

or

Download https://docker-registry.fluxpublisher.ch/api/get-build-archive/flux-ilias-api/rest-legacy-cron-helper-plugin.tar.gz?tag=%tag% and extract it to `%web_root%/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin`

Hint: If you use `wget` without pipe use `--content-disposition` to get the correct file name

### Helper Plugin

You need to install [flux-ilias-rest-helper-plugin](https://github.com/flux-caps/flux-ilias-rest-helper-plugin) too
