<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    public function cekIdTable($table)
    {
        $pattern = '/([^0-9]+)/'; //pola untuk angka
        $pattern2 = '/([^A-Z]+)/'; //pola untuk huruf
        //untuk membuat auto add ID
        if ($table == 'penjualan') {
            $id = 'id_penjualan';
        } elseif ($table == 'pembelian') {
            $id = 'id_pembelian';
        } else {
            $id = 'id_obat';
        }

        $this->db->select($id);
        $query = $this->db->get($table, 0, 0);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $d) {
                $data = $d->$id;
            }
            $angka = preg_replace($pattern, "", $data) + 1; //get angka
            $huruf = preg_replace($pattern2, "", $data); //get huruf
            return $huruf . $angka;
        } else {
            if ($table == 'penjualan') {
                $idBaru = 'DPJ10001';
            } elseif ($table == 'pembelian') {
                $idBaru = 'DPB10001';
            } else {
                $idBaru = 'DOB10001';
            }
            return $idBaru;
        }
    }

    public function getData($page)
    {
        if ($page == 'Data Penjualan') {
            $this->db->select('');
            $table = 'penjualan';
        } elseif ($page == 'Data Pembelian') {
            $this->db->select('');
            $table = 'pembelian';
        } elseif ($page == 'Data Obat') {
            $table = 'obat';
        } elseif ($page == 'Data Supplier') {
            $table = 'supplier';
        } else {
            $table = 'konsumen';
        }
        $query = $this->db->get($table);
        return $query->result();
    }

    public function addData($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
