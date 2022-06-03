<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
 public function index()
 {
     
 $this->load->model('mahasiswa_model','mhs1');
 $this->mhs1->id=1;
 $this->mhs1->nim='011022';
 $this->mhs1->nama='Fayyaza';
 $this->mhs1->gender='P';

$this->mhs1->ipk=3.87;
 $this->load->model('mahasiswa_model','mhs2');
 $this->mhs2->id=2;
 $this->mhs2->nim='011011';
 $this->mhs2->nama='Naira';
 $this->mhs2->gender='P';
$this->mhs2->ipk=3.37;
 $list_mhs = [$this->mhs1, $this->mhs2];
 $data['list_mhs']=$list_mhs;

//  $this->load->view('header');
 $this->load->view('mahasiswa/index',$data);
//  $this->load->view('footer');
 }
}
?>