<?php

class Matakuliah extends CI_Controller {
   
    public function index () {
        $this->load->model('Matakuliah_model', 'matkul1');
        $this->matkul1->nama = 'Pemrograman Web';
        $this->matkul1->sks = '3';
      
        $this->load->model('Matakuliah_model', 'matkul2');
        $this->matkul2->nama = 'Basis Data';
        $this->matkul2->sks = '4';
        
        $this->load->model('Matakuliah_model', 'matkul3');
        $this->matkul3->nama = 'Jaringan Komputer';
        $this->matkul3->sks = '3';
        
        $this->load->model('Matakuliah_model', 'matkul4');
        $this->matkul4->nama = 'Bahasa Inggris';
        $this->matkul4->sks = '3';

        $list_matkul = [$this->matkul1, $this->matkul2,$this->matkul3,$this->matkul4];
        $data['list_matkul'] = $list_matkul;
       
       
       $this->load->view('matkul', $data);
    }
}

?>