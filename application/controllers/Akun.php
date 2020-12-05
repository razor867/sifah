<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != 'berhasil') {
            redirect(base_url('home/login'));
        }
    }

    public function index()
    {
        show_404();
    }

    public function dashboard()
    {
        $this->load->view('pages/akun/index');
        $this->load->view('templates/footer');
    }
}
