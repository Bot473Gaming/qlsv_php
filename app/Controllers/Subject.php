<?php

namespace App\Controllers;

use \App\Models\Model_Subject;

class Subject extends BaseController
{
    protected $Subjects;

    public function __construct()
    {
        // parent::__construct();
        $this->Subjects = new Model_Subject();
    }

    public function index()
    {
        $subjects = $this->Subjects->GetAllSubjects();
        $Datas = [
            'title' => 'Subjects',
            'page' => 'subject',
            'data' => [
                'subjects' => $subjects
            ],

        ];
        return view('layout', $Datas);
    }
    public function create()
    {
        $data = [
            'name' => strtolower($_POST['name'])
        ];
        // echo "<pre>";
        // print_r($data);
        $this->Subjects->createSubject($data);
        return redirect()->back();
    }
    public function delete()
    {
        $this->Subjects->deleteSubjectById($_POST['sd-id']);
        return redirect()->back();
    }
    public function update() {
        // echo "<pre>";
        // print_r($_POST);
        $this->Subjects->updateSubject(['name' => $_POST['name']], $_POST['sd-id']);
        return redirect()->back();
    }
}
