<?php

class ServiceHandler
{
    protected $serviceHandler;
    /**
     * ServiceHandler constructor.
     * @param array $connection
     */
    public function __construct(array $connection)
    {
        $this->serviceHandler = $this->init($connection);
    }

    /**
     * @param $connection
     * @return ServiceHandler
     */
    public function init($connection)
    {
        //TODO: Will probably a mysql database handler
        return 'ServiceHandler';
    }

    /**
     * @return array
     */
    public function fetchCurrentMonth()
    {
        //TODO: Do database fetch with databaseHandler
        $this->serviceHandler;

        return ['googleAnalyticsVisits' => 568];
    }
}