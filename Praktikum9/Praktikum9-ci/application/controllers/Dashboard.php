<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        if (!$this->session->has_userdata('username')) {
            redirect(base_url() . 'login', 'refresh');
            return;
        }
        $this->load->view('layouts/template.php');
    }
}
