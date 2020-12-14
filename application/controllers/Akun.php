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
        if ($data['link'] == 'Data Penjualan') {
            $urlTable = 'pages/akun/tablepenjualan';
        } elseif ($data['link'] == 'Data Pembelian') {
            $urlTable = 'pages/akun/tablepembelian';
        } elseif ($data['link'] == 'Data Obat') {
            $urlTable = 'pages/akun/tableobat';
        } elseif ($data['link'] == 'Data Supplier') {
            $urlTable = 'pages/akun/tablesupplier';
        } else {
            $urlTable = 'pages/akun/tablekonsumen';
        }

        $data['datafortable'] = $this->m_data->getData($data['link']);
        $data['dataGetNamaObat'] = $this->m_data->getNamaObat('obat');
        $data['dataGetKonsup'] = $this->m_data->getNamaKonsup($data['link']);
        $this->load->view('templates/headerakun', $data);
        $this->load->view('pages/akun/showdatatable', $data);
        $this->load->view($urlTable);
        $this->load->view('templates/footerakun', $data);
    }

    public function cekID()
    {
        $page = $this->cekInput($this->input->post('page'), 'page', 'Data Penjualan'); //Data penjualan alamat redirect default
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

    public function getDataEdit()
    {
        $page = $this->cekInput($this->input->post('page'), 'page', 'Data Penjualan');
        $id = $this->cekInput($this->input->post('id'), 'text', 'Data Penjualan');
        echo json_encode(($this->m_data->getDataForEdit($page, $id)));
    }

    //CRUD
    public function tambah()
    {
        $page = $this->cekInput($this->input->post('page'), 'page', 'Data Penjualan');
        if ($page == 'Data Penjualan') {
            $data = array(
                'id_penjualan' => $this->cekInput($this->input->post('iddatajualbeli'), 'text', $page),
                'id_obat' => $this->cekInput($this->input->post('namaobatjualbeli'), 'text', $page),
                'id_konsumen' => $this->cekInput($this->input->post('konsumen'), 'int', $page),
                'tgl_jual' => $this->cekInput($this->input->post('tanggaljual'), 'date', $page),
                'net' => $this->cekInput($this->input->post('net'), 'int', $page),
                'total_jual' => $this->cekInput($this->input->post('totaljual'), 'int', $page)
            );
            $table = 'penjualan';
        } elseif ($page == 'Data Pembelian') {
            $data = array(
                'id_pembelian' => $this->cekInput($this->input->post('iddatajualbeli'), 'text', $page),
                'id_supplier' => $this->cekInput($this->input->post('supplier'), 'int', $page),
                'id_obat' => $this->cekInput($this->input->post('namaobatjualbeli'), 'text', $page),
                'tgl_beli' => $this->cekInput($this->input->post('tanggalbeli'), 'date', $page),
                'net' => $this->cekInput($this->input->post('net'), 'int', $page),
                'total_beli' => $this->cekInput($this->input->post('totalbeli'), 'int', $page)
            );
            $table = 'pembelian';
        } elseif ($page == 'Data Obat') {
            $data = array(
                'id_obat' => $this->cekInput($this->input->post('idobat'), 'text', $page),
                'nama_obat' => $this->cekInput($this->input->post('namaobat'), 'text', $page),
                'jenis_obat' => $this->cekInput($this->input->post('jenis'), 'text', $page),
                'kegunaan' => $this->cekInput($this->input->post('kegunaan'), 'text', $page),
                'tgl_kedaluarsa' => $this->cekInput($this->input->post('expired'), 'date', $page),
                'stok' => $this->cekInput($this->input->post('stok'), 'int', $page),
                'harga' => $this->cekInput($this->input->post('hargasatuan'), 'int', $page)
            );
            $table = 'obat';
        } elseif ($page == 'Data Supplier') {
            $data = array(
                'nama_supplier' => $this->cekInput($this->input->post('supplier'), 'text', $page)
            );
            $table = 'supplier';
        } else {
            $data = array(
                'nama_konsumen' => $this->cekInput($this->input->post('konsumen'), 'text', $page)
            );
            $table = 'konsumen';
        }
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
        } elseif ($page == 'Data Pembelian') {
            $url = base_url('akun/dataPembelian');
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
