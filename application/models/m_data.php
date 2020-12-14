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

    public function cekTable($page)
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
        return $table;
    }

    public function getData($page)
    {
        $table = $this->cekTable($page);

        if ($table == 'penjualan' || $table == 'pembelian') {
            if ($table == 'penjualan') {
            } else {
                $this->db->select('nama_obat, tgl_beli, nama_supplier');
                $this->db->from('pembelian');
                $this->db->join('obat', 'obat.id_obat = pembelian.id_obat', 'left');
                $this->db->join('supplier', 'supplier.id_supplier = pembelian.id_supplier', 'left');
                // $this->db->where('c.album_id', $id);
                // $this->db->order_by('c.track_title', 'asc');
            }
            $query = $this->db->get();
            return $query->result();
        } else {
            $query = $this->db->get($table);
            return $query->result();
        }
    }

    public function getNamaObat($table)
    {
        $this->db->select('id_obat, nama_obat');
        $query = $this->db->get($table);
        return $query->result();
    }

    public function getNamaKonsup($page)
    {
        if ($page == 'Data Pembelian') {
            $table = 'supplier';
        } else {
            $table = 'konsumen';
        }
        $query = $this->db->get($table);
        return $query->result();
    }

    public function getDataForEdit($page, $id)
    {
        $table = $this->cekTable($page);

        if ($table == 'penjualan') {
            $data = array('id_penjualan' => $id);
        } elseif ($table == 'pembelian') {
            $data = array('id_pembelian' => $id);
        } elseif ($table == 'obat') {
            $data = array('id_obat' => $id);
        } elseif ($table == 'supplier') {
            $data = array('id_supplier' => $id);
        } else {
            $data = array('id_konsumen' => $id);
        }

        $query = $this->db->get_where($table, $data);
        return $query->result();
    }

    public function addData($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
