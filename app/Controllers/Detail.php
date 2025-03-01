<?php

namespace App\Controllers;

use App\Models\Model_Students;
use App\Models\Model_Subject;

class Detail extends BaseController
{
    public function __construct()
    {
        // parent::__construct();
        $this->Student = new Model_Students();
        $this->Subjects = new Model_Subject();
    }
    public function index($_id = 0)
    {
        if ($_id)
            $student = $this->Student->getStudentById($_id);
        else
            $student = false;
        $subjects = $this->Subjects->GetAllSubjects();

        // echo "<pre>";
        // print_r($student->scoreStudent);
        if ($student)
            $student->scoreStudent = json_decode($student->scoreStudent, true);
        
        $Datas = [
            'title' => 'Home',
            'page' => 'detail',
            'data' => [
                'student' => $student,
                'subjects' => $subjects,
            ],

        ];
        return view('layout', $Datas);
    }
    public function delete($_id)
    {
        $this->Student->deleteStudent($_id);
        return redirect()->to('../');
    }
    public function updateScore($_id)
    {
        $student = $this->Student->getStudentById($_id);
        $student->scoreStudent = json_encode($_POST);

        $this->Student->updateStudent(json_decode(json_encode($student), true), $_id);
        return redirect()->back();
    }
}
