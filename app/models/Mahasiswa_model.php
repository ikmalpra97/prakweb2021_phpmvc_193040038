<?php

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Ilham Akmal",
    //         "nrp" => "193040038",
    //         "email" => "ilhamakmal@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Chika Kameria",
    //         "nrp" => "193040138",
    //         "email" => "chikakameria@gmail.com",
    //         "jurusan" => "Teknik Pangan"
    //     ],
    //     [
    //         "nama" => "Mira Fridayanti",
    //         "nrp" => "193040238",
    //         "email" => "mirafridayanti@gmail.com",
    //         "jurusan" => "Teknik Kimia"
    //     ]
    //     ];

        private $dbh; //database handler
        private $stmt;

        public function __construct(){
            //data source name
            $dsn = 'mysql:host=localhost;dbname=phpmvc';

            try{
                $this->dbh = new PDO($dsn, 'root', '');
            } catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function getAllMahasiswa(){
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}