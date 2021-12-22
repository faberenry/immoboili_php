<?php
require("../vendor/autoload.php");
$openapi = \OpenApi\Generator::scan(['/pages/includes/']);
header('Content-Type: application/json');
echo $openapi->toJSON();