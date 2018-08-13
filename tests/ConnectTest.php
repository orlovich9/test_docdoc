<?php

include_once __DIR__.'/../vendor/autoload.php';

use Lib\Database\Query;

class ConnectTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test to database connect
     */
    public function testConnect()
    {
        $this->assertObjectHasAttribute('db', new Query);
        $query = new Query;
        $this->assertInstanceOf('PDO', $query->db);
    }
}
