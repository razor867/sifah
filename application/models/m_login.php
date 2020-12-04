<?php

class M_login extends CI_Model
{
    public function dataLogin($table, $data)
    {
        $this->db->where($data);
        $this->db->from($table);
        $row = $this->db->count_all_results();
        if ($row > 0) {
            $pesan = 'berhasil login ' . $row;
        } else {
            $pesan = 'gagal login' . $row;
        }
        return $pesan;
    }
}
