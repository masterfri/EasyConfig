<?php

require 'EasyConfig.php';

$config = new EasyConfig();

var_dump($config->readFile('test1.ecf'));

echo $config->toString();


