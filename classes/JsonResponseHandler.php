<?php

class JsonResponseHandler
{
    /**
     * Creates a json response
     * @param $collection
     * @param bool $error
     * @param string $message
     * @return string
     */
    public function returnJsonResponse($collection, $error = false, $message = '')
    {
        $response = [];

        $response['error'] = $error;

        $response['message'] = $message;
            
        $response['data'] = $collection;
        
        return json_encode($response);
    }
}