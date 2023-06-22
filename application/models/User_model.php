<?php
defined('BASEPATH') or exit('No direct script allow access');

class User_model extends CI_Model
{
    public function createUser($dataUser)
    {
        $this->db->insert('tb_data_peserta', $dataUser);

        return $this->db->insert_id();
    }

    public function createAyah($dataAyah)
    {
        $this->db->insert('tb_ayah', $dataAyah);

        return $this->db->insert_id();
    }

    public function createIbu($dataIbu)
    {
        $this->db->insert('tb_ibu', $dataIbu);

        return $this->db->insert_id();
    }


    public function getAgama()
    {
        $query = $this->db->get('tb_agama');

        return $query->result_array();
    }

    public function getJeniskelamin()
    {
        $query = $this->db->get('tb_jenis_kelamin');
        return $query->result_array();
    }
    public function getPekerjaan()
    {
        $query = $this->db->get('tb_pekerjaan');
        return $query->result_array();
    }
    public function getPendidikan()
    {
        $query = $this->db->get('tb_pendidikan');
        return $query->result_array();
    }
}
