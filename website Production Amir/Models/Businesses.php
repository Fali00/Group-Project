<?php
class Businesses{
    protected $bidID, $month,$bidTotal,$liveBids,$value,$leads;

    public function __construct($row) {
        $this->bidID = isset($row['bidID']) ? $row['bidID'] : null;
        $this->month = isset($row['month']) ? $row['month'] : null;
        $this->bidTotal = isset($row['bidsTotal']) ? $row['bidsTotal'] : null;
        $this->liveBids = isset($row['liveBids']) ? $row['liveBids'] : null;
        $this->value = isset($row['value']) ? $row['value'] : null;
        $this->leads = isset($row['leads']) ? $row['leads'] : null;
    }


    /**
     * @return mixed
     */
    public function getLeads()
    {
        return $this->leads;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getLiveBids()
    {
        return $this->liveBids;
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
    public function getBidTotal()
    {
        return $this->bidTotal;
    }

    /**
     * @return mixed
     */
    public function getBidID()
    {
        return $this->bidID;
    }
}