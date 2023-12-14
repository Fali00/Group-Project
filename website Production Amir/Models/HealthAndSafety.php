<?php
class HealthAndSafety
{
    protected $healthID, $month, $totalAccidents, $absences, $bulletin;

    public function __construct($row)
    {
        $this->healthID = $row['healthID'];
        $this->month = $row['month'];
        $this->totalAccidents = $row['accidents'];
        $this->absences = $row['absences'];
        $this->bulletin = $row['bulletin'];
    }

    /**
     * @return mixed
     */
    public function getBulletin()
    {
        return $this->bulletin;
    }

    /**
     * @return mixed
     */
    public function getAbsences()
    {
        return $this->absences;
    }

    /**
     * @return mixed
     */
    public function getTotalAccidents()
    {
        return $this->totalAccidents;
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
    public function getHealthID()
    {
        return $this->healthID;
    }


}
