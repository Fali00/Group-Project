<?php
require_once('Models/DepartmentDataSet.php');
require_once("Models/Commercial.php");
$view = new stdClass();
$commercial = new DepartmentDataSet();
$view->commercial = $commercial->fetchCommercial();
require("Views/commercial.phtml");

