<?php

use FluxIliasRestApi\Libs\FluxIliasApi\Adapter\Api\IliasApi;

class ilflux_ilias_rest_leg_cron_helper_pluginPlugin extends ilCronHookPlugin
{

    public static function getIliasApi() : IliasApi
    {
        require_once __DIR__ . "/../autoload.php";

        return ilflux_ilias_rest_helper_pluginPlugin::getIliasApi();
    }


    public function getCronJobInstance(/*string*/ $a_job_id) : ?ilCronJob
    {
        return static::getIliasApi()
            ->getCronJob(
                $a_job_id
            );
    }


    public function getCronJobInstances() : array
    {
        return static::getIliasApi()
            ->getCronJobs();
    }


    public function getPluginName() : string
    {
        return "flux_ilias_rest_leg_cron_helper_plugin";
    }
}
