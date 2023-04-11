<?php

class Bases
{
    public $baseItems;

    /**
     * Tours constructor.
     */
    public function __construct()
    {
        $this->baseItems = $this->getBases();
    }

    /**
     * @param $id
     * @return array|mixed
     */
    public function getBaseById($id)
    {
        $baseItem = [];

        if (array_key_exists($id, $this->baseItems))
        {
            $baseItem = $this->baseItems[$id];
        }

        return $baseItem;
    }

    /**
     * @return array
     */
    private function getBases()
    {
        $baseItems = [];

        $result = Database::$db->query('SELECT * FROM `bases`');
        while ($row = $result->fetch_assoc()) {
            $baseItems[$row['id']] = $row;
        }

        return $baseItems;
    }
}