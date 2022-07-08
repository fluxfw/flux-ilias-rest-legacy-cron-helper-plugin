# flux-ilias-rest-legacy-cron-helper-plugin

ILIAS Rest Legacy Cron Plugin Helper

Only needed for ILIAS < 8

## Installation

### flux-ilias-rest-legacy-cron-helper-plugin

```dockerfile
RUN (mkdir -p %web_root%/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin && cd %web_root%/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin && wget -O - https://github.com/flux-caps/flux-ilias-rest-legacy-cron-helper-plugin/releases/download/%tag%/flux-ilias-rest-legacy-cron-helper-plugin-%tag%-build.tar.gz | tar -xz --strip-components=1)
```

or

Download https://github.com/flux-caps/flux-ilias-rest-legacy-cron-helper-plugin/releases/download/%tag%/flux-ilias-rest-legacy-cron-helper-plugin-%tag%-build.tar.gz and extract it to `%web_root%/Customizing/global/plugins/Services/Cron/CronHook/flux_ilias_rest_leg_cron_helper_plugin`

### Helper Plugin

You need to install [flux-ilias-rest-helper-plugin](https://github.com/flux-caps/flux-ilias-rest-helper-plugin) too
