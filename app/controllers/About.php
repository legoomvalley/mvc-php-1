<?php

class About {
    public function index($nama = 'Adin', $pekerjaan = 'Developer')
    {
        echo "hallo nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}