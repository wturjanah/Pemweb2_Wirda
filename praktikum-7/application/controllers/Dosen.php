<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->model('dosen_model', 'dsn1');
        $this->dsn1->id = 1;
        $this->dsn1->nama = 'Abdul rojak';
        $this->dsn1->nidn = '001';
        $this->dsn1->gender = 'Laki-laki';
        $this->dsn1->tmp_lahir = 'Bogor';
        $this->dsn1->tgl_lahir = '29-07-1973';
        $this->dsn1->pendidikan = 'S2 Teknik Informatika';

        $this->load->model('dosen_model', 'dsn2');
        $this->dsn2->id = 2;
        $this->dsn2->nama = 'Neni argaeni';
        $this->dsn2->nidn = '002';
        $this->dsn2->gender = 'Perempuan';
        $this->dsn2->tmp_lahir = 'Bandung';
        $this->dsn2->tgl_lahir = '12-02-1968';
        $this->dsn2->pendidikan = 'S2 Pendidikan';

        $this->load->model('dosen_model', 'dsn3');
        $this->dsn3->id = 2;
        $this->dsn3->nama = 'Devi trisnasenjaya';
        $this->dsn3->nidn = '002';
        $this->dsn3->gender = 'Laki-laki';
        $this->dsn3->tmp_lahir = 'Yogyakarta';
        $this->dsn3->tgl_lahir = '10-03-1972';
        $this->dsn3->pendidikan = 'S2 Teknik';

        $all_dosen = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['all_dosen'] = $all_dosen;
        $this->load->view('dosen/index', $data);
    }
}
