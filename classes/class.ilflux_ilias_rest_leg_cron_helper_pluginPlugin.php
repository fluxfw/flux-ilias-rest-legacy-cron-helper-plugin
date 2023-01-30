<?php

use FluxIliasRestApi\Adapter\Api\IliasRestApi;

class ilflux_ilias_rest_leg_cron_helper_pluginPlugin extends ilCronHookPlugin
{

    public static function getIliasRestApi() : IliasRestApi
    {
        require_once __DIR__ . "/../autoload.php";

        return ilflux_ilias_rest_helper_pluginPlugin::getIliasRestApi();
    }


    public function getCronJobInstance(/*string*/ $a_job_id) : ?ilCronJob
    {
        return static::getIliasRestApi()
            ->getCronJob(
                $a_job_id
            );
    }


    public function getCronJobInstances() : array
    {
        return static::getIliasRestApi()
            ->getCronJobs();
    }


    public function getPluginName() : string
    {
        return "flux_ilias_rest_leg_cron_helper_plugin";
    }
}
