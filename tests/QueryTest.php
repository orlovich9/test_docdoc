<?php

include_once __DIR__.'/../vendor/autoload.php';

use Lib\Database\Query;

class QueryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test returned data
     */
    public function testQuery()
    {
        $query = new Query;
        $this->assertTrue(is_array($query->getData()));
        $this->assertNotEmpty($query->getData());
    }
}