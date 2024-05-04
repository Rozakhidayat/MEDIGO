<?php
class M_pasien extends CI_Model
{
    public function create($data)
    {
        return $this->db->insert('pendaftaran', $data);
    }

    public function read()
    {
        $data = $this->db->get('pendaftaran');
        return $data->result();
    }
}