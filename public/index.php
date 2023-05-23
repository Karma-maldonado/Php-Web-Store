<?php

use core\classes\Database;

#open session
session_start();

#load config
require_once('../config.php');

#load all classes
require_once('../vendor/autoload.php');

#load system routes
require_once('../core/routes.php');
