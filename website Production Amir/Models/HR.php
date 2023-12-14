<?php
class HR
{
    protected $healthID, $month, $bankHoliday, $hrBulletin, $announcement;

    public function __construct($row)
    {
        $this->healthID = $row['hrID'];
        $this->month = $row['month'];
        $this->bankHoliday = $row['bankHoliday'];
        $this->hrBulletin = $row['hrBulletin'];
        $this->announcement = $row['announcement'];
    }

    /**
     * @return mixed
     */
    public function getHealthID()
    {
        return $this->healthID;
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
    public function getBankHoliday()
    {
        return $this->bankHoliday;
    }

    /**
     * @return mixed
     */
    public function getHrBulletin()
    {
        return $this->hrBulletin;
    }

    /**
     * @return mixed
     */
    public function getAnnouncement()
    {
        return $this->announcement;
    }
}
