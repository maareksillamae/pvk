<?php

error_reporting(~E_NOTICE);
require_once '../app/bootstrap.php';



//init app core


$init = new Core();
echo '<pre>';
print_r($init);
echo '</pre>';