<?php

class Mahasiswa extends CI_Controller {
   
    public function index () {
        $this->load->model('Mahasiswa_model', 'mhs1');
        $this->mhs1->id = 1;
        $this->mhs1->nim = '0110121026';
        $this->mhs1->nama = 'Nia anggraeni';
        $this->mhs1->gender = 'P';
        $this->mhs1->ipk = 3.85;
       
        $this->load->model('Mahasiswa_model', 'mhs2');
        $this->mhs2->id = 2;
        $this->mhs2->nim = '0110121027';
        $this->mhs2->nama = 'Mutia azahra';
        $this->mhs2->gender = 'P';
        $this->mhs2->ipk = 3.75;

       
        $list_mhs = [$this->mhs1, $this->mhs2];
        $data['list_mhs'] = $list_mhs;
       
       
       $this->load->view('mahasiswa', $data);
    }
}

?>