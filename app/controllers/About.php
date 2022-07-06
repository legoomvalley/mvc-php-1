<?php
// About adalah anak kepada Controller. Sebab tu guna extends utk tunjuk siapa parent dia
// kalau kita tiada extends ni maka (this->view) xkan dapat kenal datang dari mana.
class About extends Controller{
    public function index($nama = 'Adin', $pekerjaan = 'Developer', $umur = 23)
    {
        // property $data
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';

        // kita panggil template header, index dan footer 
        $this->view('templates/header', $data);
        $this->view('about/index' , $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        // property $data
        $data['judul'] = 'Pages';

        // kita panggil template header, page dan footer 
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}