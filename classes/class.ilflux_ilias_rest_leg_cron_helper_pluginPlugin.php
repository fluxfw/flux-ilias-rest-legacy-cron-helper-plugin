<?php

use FluxIliasRestApi\Adapter\Api\IliasRestApi;

class ilflux_ilias_rest_leg_cron_helper_pluginPlugin extends ilCronHookPlugin
{

    private IliasRestApi $ilias_rest_api;


    public function getCronJobInstance(/*string*/ $a_job_id) : ?ilCronJob
    {
        return $this->ilias_rest_api->getCronJob(
            $a_job_id
        );
    }


    public function getCronJobInstances() : array
    {
        return $this->ilias_rest_api->getCronJobs();
    }


    public function getPluginName() : string
    {
        return "flux_ilias_rest_leg_cron_helper_plugin";
    }


    protected function init() : void
    {
        require_once __DIR__ . "/../autoload.php";

        $this->ilias_rest_api = IliasRestApi::new();
    }
}
