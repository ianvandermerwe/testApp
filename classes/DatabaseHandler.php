<?php

class DatabaseHandler
{
    protected $databaseHandler;
    /**
     * DatabaseHandler constructor.
     * @param array $connection
     */
    public function __construct(array $connection)
    {
        $this->databaseHandler = $this->init($connection);
    }

    /**
     * @param $connection
     * @return DatabaseHandler
     */
    public function init($connection)
    {
        //to test error response
        //throw new Exception('something went wrong',500);

        //TODO: Will probably a mysql database handler
        return 'DatabaseHandler';
    }

    /**
     * @return array
     */
    public function fetchCurrentMonth()
    {
        //TODO: Do database fetch with databaseHandler
        $this->databaseHandler;

        return ['siteVisits' => 180];
    }
}