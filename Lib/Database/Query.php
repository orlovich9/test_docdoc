<?php namespace Lib\Database;

/**
 * Class for queries in database
 */
class Query extends Connect
{
    /**
     * Get all from table data
     * @return array
     */
    public function getData()
    {
        $arData = [];

        foreach($this->db->query('SELECT string from data') as $row) {
            $arData[] = $row['string'];
        }

        return $arData;
    }
}