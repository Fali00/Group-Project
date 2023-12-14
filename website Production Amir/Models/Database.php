<?php

class Database
{
    /**
     * @var Database instance
     */
    protected static $_dbInstance = null;
    /**
     * @var Database instance
     */
    protected $_dbHandle;

    /**
     * @return Database instance
     */
    public static function getInstance()
    {
        $username = 'hc23-04';
        $password = 'dwg92EzjHEuRoeh';
        $host = 'poseidon.salford.ac.uk';
        $dbName = 'hc23_04';

        if (self::$_dbInstance === null) { //checks if the PDO exists
            // creates new instance if not, sending in connection info
            self::$_dbInstance = new self($username, $password, $host, $dbName);
        }

        return self::$_dbInstance;
    }

    /**
     * Class constructor for creating a database connection.
     *
     * @param string $username - The username for the database connection.
     * @param string $password - The password for the database connection.
     * @param string $host - The host for the database connection.
     * @param string $database - The database name for the connection.
     */
    private function __construct($username, $password, $host, $database)
    {
        try {
            // Create a PDO database handle with the provided connection information
            $this->_dbHandle = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        } catch (PDOException $e) {
            // Catch any failure to connect to the database and terminate with an error message
            die("Database connection failed: " . $e->getMessage());
        }
    }

    /**
     * @return PDO database connection
     */
    public function getdbConnection()
    {
        return $this->_dbHandle;
    }

    /**
     *  closes the database
     */
    public function __destruct()
    {
        $this->_dbHandle = null;
    }
}