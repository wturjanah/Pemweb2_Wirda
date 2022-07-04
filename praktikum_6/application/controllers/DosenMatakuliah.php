<?php

class DosenMatakuliah extends CI_Controller {
   
    public function index () {
        $this->load->model('DosenMatakuliah_model', 'dm1');
        $this->dm1->semester = 2;
        $this->dm1->dosen = 'bu Misna aqia';
        $this->dm1->matakuliah = 'UI/UX';
       
        $this->load->model('DosenMatakuliah_model', 'dm2');
        $this->dm2->semester = 2;
        $this->dm2->dosen = 'Pak yahya';
        $this->dm2->matakuliah = 'Statistika';
       
        $list_dm = [$this->dm1, $this->dm2];
        $data['list_dm'] = $list_dm;
       
       
       $this->load->view('dosenmatakuliah', $data);
    }
}

?>