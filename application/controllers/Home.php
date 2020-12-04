<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/home/index');
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $data['infoLogin'] = $this->session->flashdata('infoAksi');
        $this->load->view('pages/home/login', $data);
    }

    public function cekLogin()
    {
        $table = 'admin';
        $data = array(
            'username' => $this->cekInput($this->input->post('username'), 'username'),
            'password' => md5($this->cekInput($this->input->post('password'), 'password'))
        );
        echo json_encode($this->m_login->dataLogin($table, $data)->result());
    }

    public function cekInput($data, $catInput)
    {
        if (empty($data)) {
            die($this->showError('kosong'));
        }
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $pattern = '/^[a-zA-Z0-9 ]*$/'; //pattern untuk username (hanya huruf, spasi, dan angka)
        $pattern2 = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/';
        //pattern2 Input Password and Submit [8 to 15 characters 
        //which contain at least one lowercase letter, one uppercase letter, 
        //one numeric digit, and one special character]

        if ($catInput == 'user') {
            if (!preg_match($pattern, $data)) {
                die($this->showError('gagal'));
            }
        } else {
            if (!preg_match($pattern2, $data)) {
                die($this->showError('gagal'));
            }
        }
        return $data;
    }

    public function showError($data)
    {
        if ($data == 'kosong') {
            $pesan = 'Form tidak boleh kosong!';
        } else {
            $pesan = 'Kombinasi username dan password salah!';
        }
        $this->session->set_flashdata('infoAksi', $pesan);
        redirect(base_url('home/login/'));
    }
}
