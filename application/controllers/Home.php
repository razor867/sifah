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
        if ($this->session->userdata('status') != 'berhasil') {
            $statusLogin = 'Login';
            $linkLogin = base_url('home/login');
        } else {
            $statusLogin = 'Akun';
            $linkLogin = base_url('akun/dashboard');
        }
        $data = array(
            'statusLogin' => $statusLogin,
            'linkLogin' => $linkLogin
        );
        $this->load->view('templates/header');
        $this->load->view('pages/home/index', $data);
        $this->load->view('templates/footer');
    }

    public function login()
    {
        if ($this->session->userdata('status') != 'berhasil') {
            $data['infoLogin'] = $this->session->flashdata('infoAksi');
            $this->load->view('pages/home/login', $data);
        } else {
            redirect(base_url('akun/dashboard'));
        }
    }

    public function cekLogin()
    {
        $table = 'admin';
        $data = array(
            'username' => $this->cekInput($this->input->post('username'), 'username'),
            'password' => md5($this->cekInput($this->input->post('password'), 'password'))
        );
        $cek = $this->m_login->dataLogin($table, $data);
        if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $dl) {
                $datalogin = array(
                    'user' => $dl->username,
                    'status' => 'berhasil'
                );
            }
            $this->session->set_userdata($datalogin);
            redirect(base_url('akun/dashboard'));
        } else {
            $this->showError('gagal');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('home/login'));
    }

    public function cekInput($data, $catInput)
    {
        if (empty($data)) {
            die($this->showError('kosong'));
        }
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $pattern = '/^[a-zA-Z0-9 ]*$/';
        $pattern2 = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/';

        if ($catInput == 'username') {
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
