<?php 
// Home adalah anak kepada Controller. Sebab tu guna extends utk tunjuk siapa parent dia
// kalau kita tiada extends ni maka (this->view) xkan dapat kenal datang dari mana.
class Home extends Controller{
    public function index()
    {
        // property $data
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        // kita panggil template header, index dan footer 
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}