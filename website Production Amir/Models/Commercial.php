<?php

class Commercial
{
    protected $commercialID, $month, $payday, $payrollBulletin, $performance;

    public function __construct($row)
    {
        $this->commercialID = $row['commercialID'];
        $this->month = $row['month'];
        $this->payday = $row['payday'];
        $this->payrollBulletin = $row['payrollBulletin'];
        $this->performance = $row['performance'];
    }

    /**
     * @return mixed
     */
    public function getPerformance()
    {
        return $this->performance;
    }

    /**
     * @return mixed
     */
    public function getPayrollBulletin()
    {
        return $this->payrollBulletin;
    }

    /**
     * @return mixed
     */
    public function getPayday()
    {
        return $this->payday;
    }

    /**
     * @return mixed
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * @return mixed
     */
    public function getCommercialID()
    {
        return $this->commercialID;
    }

}