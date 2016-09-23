<?php
include ('classes/AnalyticsApi.php');
$api = new AnalyticsApi();

echo $api->fetchSiteVisits();