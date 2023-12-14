<?php
class Maintenance
{
    protected $maintenanceID, $month, $scheduledOutages;

    public function __construct($row)
    {
        $this->month = $row['month'];
        $this->scheduledOutages = $row['scheduledOutages'];
        $this->maintenanceID = $row['maintenanceID'];
    }

    /**
     * @return mixed
     */
    public function getMaintenanceID()
    {
        return $this->maintenanceID;
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
    public function getScheduledOutages()
    {
        return $this->scheduledOutages;
    }



}