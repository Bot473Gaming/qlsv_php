<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Students extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->connectData('student');
    }
    public function getAllStudents()
    {
        return $this->getAllData();
    }
    public function getStudentById($_id)
    {
        return $this->getDataById($_id);
    }
    public function createStudent($data)
    {
        return $this->dataAdd($data);
    }
    public function updateStudent($data, $_id)
    {
        return $this->dataUpdate($data, $_id);
    }
    public function deleteStudent($_id)
    {
        return $this->dataDeleteById($_id);
    }
}
