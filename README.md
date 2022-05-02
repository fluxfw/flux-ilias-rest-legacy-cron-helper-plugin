# flux-ilias-rest-legacy-cron-helper-plugin

ILIAS Rest Legacy Cron Plugin Helper

Only needed for ILIAS < 8

## Installation

### flux-ilias-rest-legacy-cron-helper-plugin

#### In [flux-ilias](https://github.com/flux-caps/flux-ilias)

```dockerfile
COPY --from=docker-registry.fluxpublisher.ch/flux-ilias-api/rest-legacy-cron-helper-plugin:latest /flux-ilias-rest-legacy-cron-helper-plugin $ILIAS_WEB_DIR/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin
```

or

```dockerfile
RUN (mkdir -p $ILIAS_WEB_DIR/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin && cd $ILIAS_WEB_DIR/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin && wget -O - https://docker-registry.fluxpublisher.ch/api/get-build-archive/flux-ilias-api/rest-legacy-cron-helper-plugin | tar -xz --strip-components=1)
```

#### Other

Download https://docker-registry.fluxpublisher.ch/api/get-build-archive/flux-ilias-api/rest-legacy-cron-helper-plugin and extract it to %web_root%/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin

### Helper Plugin

You need to install [flux-ilias-rest-helper-plugin](https://github.com/flux-caps/flux-ilias-rest-helper-plugin) too
