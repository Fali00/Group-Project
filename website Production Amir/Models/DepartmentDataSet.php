<?php
require_once('Models/Database.php');
require_once('Models/Businesses.php');
//require_once('Models/Commercial.php');
require_once('Models/Maintenance.php');
//require_once('Models/HealthAndSafety.php');
require_once('Models/HR.php');
require_once('Models/Software.php');
require_once('Models/SystemData.php');

class DepartmentDataSet
{
    protected $_dbHandle, $_dbInstance;
    public function __construct()
    {
        $this->_dbInstance = Database::getInstance();
        $this->_dbHandle = $this->_dbInstance->getdbConnection();
    }
    public function fetchBusiness()
        {
            $selectedMonth = date('m');
            $sqlQuery = 'SELECT * FROM Business WHERE MONTH(month) = :month';
            $statement = $this->_dbHandle->prepare($sqlQuery);
            $statement->bindParam(':month', $selectedMonth);
            $statement->execute();
            $dataSet = [];
            while ($row = $statement->fetch()) {
                $dataSet[] = new Businesses($row);
            }
            return $dataSet;
        }
    public function fetchMaintenance()
    {
        $selectedMonth = date('m');
        $sqlQuery = 'SELECT * FROM ` Maintenance` WHERE MONTH(month) = :month';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->bindParam(':month', $selectedMonth);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new Maintenance($row);
        }
        return $dataSet;
    }
    public function fetchHealthAndSafety()
    {  $selectedMonth = date('m');
        $sqlQuery = 'SELECT * FROM HealthSafety WHERE MONTH(month) = :month';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->bindParam(':month', $selectedMonth);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new HealthAndSafety($row);
        }
        return $dataSet;
    }
    public function fetchCommercial()
    {
        $selectedMonth = date('m');
        $sqlQuery = 'SELECT * FROM Commercial WHERE MONTH(month) = :month';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->bindParam(':month', $selectedMonth);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new Commercial($row);
        }
        return $dataSet;
    }
    public function fetchHumanResource()
    {
        $selectedMonth = date('m');
        $sqlQuery = 'SELECT * FROM HR WHERE MONTH(month) = :month';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->bindParam(':month', $selectedMonth);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new HR($row);
        }
        return $dataSet;
    }
    public function fetchSoftware()
    {
        $sqlQuery = 'SELECT * FROM Software';
        $statement = $this->_dbHandle->prepare($sqlQuery);
        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new Software($row);
        }
        return $dataSet;
    }
    public function fetchSystemData()
    {
        $sqlQuery = 'SELECT * FROM SystemData';
        $statement = $this->_dbHandle->prepare($sqlQuery);

        $statement->execute();
        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new SystemData($row);
        }
        return $dataSet;
    }

}