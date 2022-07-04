<?php

class Dosen extends CI_Controller {
   
    public function index () {
        $this->load->model('Dosen_model', 'dsn1');
        $this->dsn1->nama = 'Pak rojul';
        $this->dsn1->matakuliah = 'Pemrograman Web';
        $this->dsn1->gender = 'L';
        
        $this->load->model('Dosen_model', 'dsn2');
        $this->dsn2->nama = 'Bu misna';
        $this->dsn2->matakuliah = 'UI/UX';
        $this->dsn2->gender = 'P';
        
        $this->load->model('Dosen_model', 'dsn3');
        $this->dsn3->nama = 'Mrs Nurul jannah';
        $this->dsn3->matakuliah = 'Bahasa inggris';
        $this->dsn3->gender = 'P';
       
        $this->load->model('Dosen_model', 'dsn4');
        $this->dsn4->nama = 'Pak Lukman';
        $this->dsn4->matakuliah = 'Jaringan Komputer';
        $this->dsn4->gender = 'L';

        $list_dsn = [$this->dsn1, $this->dsn2,$this->dsn3,$this->dsn4];
        $data['list_dsn'] = $list_dsn;
       
       
       $this->load->view('dosen', $data);
    }
}

?>