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

    public function addData($table, $data)
    {
        if ($this->db->insert($table, $data)) {
            return 1;
        } else {
            return 0;
        }
    }
}
