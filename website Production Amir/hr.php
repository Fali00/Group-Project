<?php
require_once('Models/DepartmentDataSet.php');
require_once("Models/HR.php");
$view = new stdClass();
$hr = new DepartmentDataSet();
$view->humanResource = $hr->fetchHumanResource();
require("Views/hr.phtml");