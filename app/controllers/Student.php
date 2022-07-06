<?php 

class Student extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Pelajar';
        $data['student'] = $this->model('Student_model')->getAllStudent();
        $this->view('templates/header', $data);
        $this->view('student/index', $data);
        $this->view('templates/footer');
    }
}
