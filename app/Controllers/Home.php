<?php

namespace App\Models;

namespace App\Controllers;
// use CodeIgniter\HTTP\ResponseInterface;
// use CodeIgniter\HTTP\RequestInterface;
use \App\Models\Model_Students;

class Home extends BaseController
{
    protected $Students;
    public function __construct()
    {
        // parent::__construct();
        $this->Students = new Model_Students();
    }
    public function index()
    {
        $students = $this->Students->getAllStudents();
        $Datas = [
            'title' => 'Home',
            'page' => 'home2',
            'data' => ['students' => $students],

        ];
        return view('layout', $Datas);
    }
    public function handler()
    {
        $case = $_POST['_method'];
        $data = $_POST;
        unset($data['_method']);
        switch ($case) {
            case 'POST':
                $this->Students->createStudent($data);
                break;
            case 'UPD':
                $sd_id = $data['sd-id'];
                unset($data['sd-id']);
                $this->Students->updateStudent($data, $sd_id);
                break;
            case 'DEL':
                $sd_id = $data['sd-id'];
                $this->Students->deleteStudent($sd_id);
                break;
        }
        return redirect()->to('/');
    }
    public function deletes()
    {
        $studentIds = explode(',', $_POST['studentIds']);
        foreach ($studentIds as $studentId) {
            $this->Students->deleteStudent($studentId);
        }
        return redirect()->to('../');
    }
}

// mysql: stored procedure; function; view; trigger