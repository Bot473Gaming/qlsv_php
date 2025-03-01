<?php

namespace App\Core;

abstract class MY_Model
{
    protected $builder;
    public function __construct()
    {
        // parent::__construct();
    }
    public function connectData($tableName)
    {
        $db = \Config\Database::connect();
        $this->builder = $db->table($tableName);
    }
    public function getAllData()
    {
        $query = $this->builder->get();
        $result = $query->getResult();
        return (count($result) > 0) ? $result : false;
    }
    public function getDataById($_id) {
        $query = $this->builder->getWhere(['_id' => $_id]);
        $result = $query->getResult();
        return (count($result) > 0) ? $result[0] : false;
    }
    public function dataAdd($data)
    {
        $this->builder->insert($data);
    }

    public function dataUpdate($data, $_id)
    {
        $this->builder->update($data, ['_id' => $_id]); //
    }
    public function dataDeleteById($_id)
    {
        $this->builder->delete(['_id' => $_id]);
    }
}
