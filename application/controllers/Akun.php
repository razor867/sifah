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
        $data['link'] = 'Dashboard';
        $this->load->view('templates/headerakun', $data);
        $this->load->view('pages/akun/index');
        $this->load->view('templates/footerakun');
    }

    public function dataPenjualan()
    {
        $data['link'] = 'Data Penjualan';
        $this->showData($data);
    }

    public function dataPembelian()
    {
        $data['link'] = 'Data Pembelian';
        $this->showData($data);
    }

    public function obat()
    {
        $data['link'] = 'Data Obat';
        $this->showData($data);
    }

    public function supplier()
    {
        $data['link'] = 'Data Supplier';
        $this->showData($data);
    }

    public function konsumen()
    {
        $data['link'] = 'Data Konsumen';
        $this->showData($data);
    }

    public function showData($data)
    {
        $this->load->view('templates/headerakun', $data);
        $this->load->view('pages/akun/showdatatable');
        $this->load->view('templates/footerakun');
    }
}
