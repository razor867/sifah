<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_data');
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
        $data['flash'] = $this->session->flashdata('infoAksi');
        $data['tipeFlash'] = $this->session->flashdata('tipe');
        $this->showData($data);
    }

    public function dataPembelian()
    {
        $data['link'] = 'Data Pembelian';
        $data['flash'] = $this->session->flashdata('infoAksi');
        $data['tipeFlash'] = $this->session->flashdata('tipe');
        $this->showData($data);
    }

    public function obat()
    {
        $data['link'] = 'Data Obat';
        $data['flash'] = $this->session->flashdata('infoAksi');
        $data['tipeFlash'] = $this->session->flashdata('tipe');
        $this->showData($data);
    }

    public function supplier()
    {
        $data['link'] = 'Data Supplier';
        $data['flash'] = $this->session->flashdata('infoAksi');
        $data['tipeFlash'] = $this->session->flashdata('tipe');
        $this->showData($data);
    }

    public function konsumen()
    {
        $data['link'] = 'Data Konsumen';
        $data['flash'] = $this->session->flashdata('infoAksi');
        $data['tipeFlash'] = $this->session->flashdata('tipe');
        $this->showData($data);
    }

    public function showData($data)
    {
        $this->load->view('templates/headerakun', $data);
        $this->load->view('pages/akun/showdatatable');
        $this->load->view('templates/footerakun');
    }

    public function cekID()
    {
        $page = $this->cekInput($this->input->post('page'), 'page', $this->input->post('page'));
        if ($page == 'Data Penjualan') {
            $table = 'penjualan';
        } elseif ($page == 'Data Pembelian') {
            $table = 'pembelian';
        } elseif ($page == 'Data Obat') {
            $table = 'obat';
        } elseif ($page == 'Data Supplier') {
            $table = 'supplier';
        } else {
            $table = 'konsumen';
        }
        echo json_encode($this->m_data->cekIdTable($table));
    }

    //CRUD
    public function tambah()
    {
        $page = $this->cekInput($this->input->post('page'), 'page', 'Data Penjualan'); //page default data penjualan;
        $data = array(
            'id_obat' => $this->cekInput($this->input->post('idobat'), 'text', $page),
            'nama_obat' => $this->cekInput($this->input->post('namaobat'), 'text', $page),
            'jenis_obat' => $this->cekInput($this->input->post('jenis'), 'text', $page),
            'kegunaan' => $this->cekInput($this->input->post('kegunaan'), 'text', $page),
            'tgl_kedaluarsa' => $this->cekInput($this->input->post('expired'), 'date', $page),
            'stok' => $this->cekInput($this->input->post('stok'), 'int', 'Data Obat'),
            'harga' => $this->cekInput($this->input->post('hargasatuan'), 'int', $page)
        );
        $table = 'obat';
        $this->m_data->addData($table, $data);
        $this->alertInfo(1, $page, 'ditambahkan');
    }

    public function edit()
    {
        echo 'berhasil';
    }

    public function hapus()
    {
        echo 'berhasil';
    }

    public function cekInput($data, $catInput, $page)
    {
        if (empty($data)) {
            die($this->alertInfo('kosong', $page));
        }
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $pattern = '/^[a-zA-Z0-9 ]*$/';
        $pattern2 = '/^[a-zA-Z ]*$/';
        $pattern3 = '/^[0-9 ]*$/';
        $pattern4 = '/^[0-9]{4}-[0-9]{1,2}-[0-9]{1,2}$/'; //for date yyyy-mm-dd

        if ($catInput == 'text') {
            if (!preg_match($pattern, $data)) {
                die($this->alertInfo('gagal', $page));
            }
        } elseif ($catInput == 'page') {
            if (!preg_match($pattern2, $data)) {
                die($this->alertInfo('gagal', $page));
            }
        } elseif ($catInput == 'int') {
            if (!preg_match($pattern3, $data)) {
                die($this->alertInfo('gagal', $page));
            }
        } else {
            if (!preg_match($pattern4, $data)) {
                die($this->alertInfo('gagal', $page));
            }
        }
        return $data;
    }

    public function alertInfo($param, $page, $tipe = '')
    {
        if ($page == 'Data Penjualan') {
            $url = base_url('akun/dataPenjualan');
        } elseif ($page == 'Data Pembeli') {
            $url = base_url('akun/dataPembeli');
        } elseif ($page == 'Data Obat') {
            $url = base_url('akun/obat');
        } elseif ($page == 'Data Supplier') {
            $url = base_url('akun/supplier');
        } else {
            $url = base_url('akun/konsumen');
        }

        if ($param == 'kosong') {
            $pesan = 'Form tidak boleh kosong!';
        } elseif ($param == 1) {
            $pesan = 'Data berhasil ' . $tipe;
        } else {
            $pesan = 'Terjadi kesalahan!';
        }
        $dataFlash = array(
            'infoAksi' => $pesan,
            'tipe' => $param
        );
        $this->session->set_flashdata($dataFlash);
        redirect($url);
    }
}
