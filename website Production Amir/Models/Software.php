<?php
class Software
{
    protected $softwareID, $software, $buildStatus;

    public function __construct($row)
    {
        $this->softwareID = $row['softwareID'];
        $this->software = $row['software'];
        $this->buildStatus = $row['buildStatus'];
    }

    /**
     * @return mixed
     */
    public function getSoftwareID()
    {
        return $this->softwareID;
    }

    /**
     * @return mixed
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * @return mixed
     */
    public function getBuildStatus()
    {
        return $this->buildStatus;
    }

}
