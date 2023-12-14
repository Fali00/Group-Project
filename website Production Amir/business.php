<?php
require_once('Models/DepartmentDataSet.php');
require_once("Models/Businesses.php");
$view = new stdClass();
$departmentDataSet = new DepartmentDataSet();
$view->departmentDataSet = $departmentDataSet->fetchBusiness();
require("Views/business.phtml");