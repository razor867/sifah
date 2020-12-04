<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    }

    public function dashboard()
    {
        $this->load->view('pages/akun/index');
    }
}
