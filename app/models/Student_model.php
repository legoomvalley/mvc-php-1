<?php

class Student_model {
    // property database handler(buat menampung koneksi database) dan statement(untuk simpan query nanti)
    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllStudent()
    {
        $this->stmt = $this->dbh->prepare('Select * FROM student');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}