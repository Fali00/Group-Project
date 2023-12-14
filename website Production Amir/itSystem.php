<?php
require_once('Models/DepartmentDataSet.php');
require_once("Models/HR.php");
require_once("Models/Software.php");
require_once("Models/SystemData.php");
$view = new stdClass();
$it = new DepartmentDataSet();
$view->maintenance = $it->fetchMaintenance();
$view->software = $it->fetchSoftware();
$view->systemStatus = $it->fetchSystemData();
require("Views/itSytems.phtml");