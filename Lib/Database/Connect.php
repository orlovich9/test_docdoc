<?php namespace Lib\Database;

/**
 * Class for connect to database
 */
class Connect
{
    public $db;

    /**
     * Connect to database
     */
    public function __construct()
    {
        try {
            $this->db = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
        } catch (PDOException $e) {
            echo "Error!: " . $e->getMessage() . "<br/>";
        }
    }
}