<?php
require_once('Models/DepartmentDataSet.php');
require_once("Models/HealthAndSafety.php");
$view = new stdClass();
$healthAndSafety = new DepartmentDataSet();
$view->healthAndSafety  = $healthAndSafety->fetchHealthAndSafety();
require("Views/healthAndSafety.phtml");