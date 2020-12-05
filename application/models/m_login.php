<?php

class M_login extends CI_Model
{
    public function dataLogin($table, $data)
    {
        $query = $this->db->get_where($table, $data);
        return $query;
    }
}
