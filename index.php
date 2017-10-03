<?php

#
# Start Slim
#


#
# boot
#
require "boot.php";


#
# settings to slim
#
$settings =  array(
    'settings' => [
        'displayErrorDetails'    => $debug,
        'addContentLengthHeader' => false,
    ]
);


#
# Slim App
#
$app = new \Slim\App($settings);


#
# Twig (template)
#
require  "twig.php";


#
# Models
#
require 'models/todo.php';


#
# Controllers
#
require 'controllers/default.php';
require 'controllers/todo.php';

$app->run();