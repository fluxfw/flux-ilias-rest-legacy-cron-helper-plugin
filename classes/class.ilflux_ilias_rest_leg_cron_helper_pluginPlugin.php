<?php

use FluxIliasRestApi\Adapter\Api\Api;

class ilflux_ilias_rest_leg_cron_helper_pluginPlugin extends ilCronHookPlugin
{

    private Api $api;


    public function getCronJobInstance(/*string*/ $a_job_id) : ?ilCronJob
    {
        return $this->api->getCronJob(
            $a_job_id
        );
    }


    public function getCronJobInstances() : array
    {
        return $this->api->getCronJobs();
    }


    public function getPluginName() : string
    {
        return "flux_ilias_rest_leg_cron_helper_plugin";
    }


    protected function init() : void
    {
        require_once __DIR__ . "/../autoload.php";

        $this->api = Api::new();
    }
}
