<?php
require 'JsonResponseHandler.php';
require 'DatabaseHandler.php';
require 'ServiceHandler.php';

class AnalyticsApi
{
    protected $config;
    protected $collection;
    protected $jsonResponseHandler;

    /**
     * AnalyticsApi constructor.
     */
    public function __construct()
    {
        $this->config = include('config/sources.php');
        $this->collection = [];
        $this->jsonResponseHandler = new JsonResponseHandler();
    }

    /**
     * Uses system config file to fetch from all sources
     * and responds with a JSON Response 
     * 
     * @return string
     */
    public function fetchSiteVisits()
    {
        foreach ($this->config['connections'] as $connection)
        {
            try
            {
                switch($connection['type'])
                {
                    case 'mysql':
                        $mysqlCon = new DatabaseHandler($connection);
                        $ret = $mysqlCon->fetchCurrentMonth();
                        if(count($ret) > 0)
                        {
                            array_push($this->collection, $ret);
                        }
                        break;

                    case 'service':
                        $serviceCon = new ServiceHandler($connection);
                        $ret = $serviceCon->fetchCurrentMonth();
                        if(count($ret) > 0)
                        {
                            array_push($this->collection, $ret);
                        }
                        break;
                }
            }
            catch (Exception $ex)
            {
                return $this->jsonResponseHandler->returnJsonResponse($this->collection, $ex->getCode(), $ex->getMessage());
            }
        }
        return $this->jsonResponseHandler->returnJsonResponse($this->collection);
    }
}