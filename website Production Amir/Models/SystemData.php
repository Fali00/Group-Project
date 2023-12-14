<?php

class SystemData
{

    protected $systemID, $system, $status;

    public function __construct($row)
    {
        $this->systemID = $row['systemID'];
        $this->system = $row['system'];
        $this->status = $row['status'];
    }

    /**
     * @return mixed
     */
    public function getSystemID()
    {
        return $this->systemID;
    }

    /**
     * @return mixed
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
}