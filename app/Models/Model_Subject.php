<?php

namespace App\Models;

use App\Core\MY_Model;

class Model_Subject extends MY_Model
{
    public function __construct() {
        parent::__construct();
        $this->connectData('Subject');
    }
    public function  GetAllSubjects() {
        return $this->getAllData();
    }
    public function createSubject($data) {
        return $this->dataAdd($data);
    }
    // update subject
    public function updateSubject($data, $_id) {
        return $this->dataUpdate($data, $_id);
    }
    // delete subject

    public function deleteSubjectById($_id) {
        return $this->dataDeleteById($_id);
    }

}
