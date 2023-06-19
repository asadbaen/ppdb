<?php
defined('BASEPATH') or exit('No direct script allow access');

class Peserta_model extends CI_Model
{

    public function pesertaGetAll()
    {
        //select * from 'tbldatabase' 
        $this->db->select('*');
        $this->db->from('tb_data_siswa');
        $this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.jenis_kelamin_id=tb_data_siswa.jenis_kelamin_id');
        $this->db->join('tb_agama', 'tb_agama.agama_id=tb_data_siswa.agama_id');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function getPeserta()
    {
        $this->db->select('calon_siswa.*,tb_data_siswa.*,tb_jenis_kelamin.*,tb_agama.*');
        $this->db->from('calon_siswa');
        $this->db->join('tb_data_siswa', 'tb_data_siswa.id_siswa=calon_siswa.id_siswa');
        $this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.jenis_kelamin_id=tb_data_siswa.jenis_kelamin_id');
        $this->db->join('tb_agama', 'tb_agama.agama_id=tb_data_siswa.agama_id');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id_peserta)
    {
        $this->db->select('calon_siswa.*,tb_data_siswa.*,tb_jenis_kelamin.*,tb_agama.*,tb_ayah.*,tb_pendidikan.*,tb_pekerjaan.*,tb_ibu.*,tbl_profile.*');
        $this->db->from('calon_siswa');
        $this->db->join('tb_data_siswa', 'tb_data_siswa.id_siswa=calon_siswa.id_siswa');
        $this->db->join('tb_ayah', 'tb_ayah.id_ayah=calon_siswa.id_ayah');
        $this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.jenis_kelamin_id=tb_data_siswa.jenis_kelamin_id');
        $this->db->join('tb_pendidikan', 'tb_pendidikan.pendidikan_id=tb_ayah.pendidikan_id');
        $this->db->join('tb_pekerjaan', 'tb_pekerjaan.pekerjaan_id=tb_ayah.pekerjaan_id');
        $this->db->join('tb_ibu', 'tb_ibu.id_ibu=calon_siswa.id_ibu');
        $this->db->join('tbl_profile', 'tbl_profile.id_profile=calon_siswa.id_profile');
        $this->db->join('tb_agama', 'tb_agama.agama_id=tb_data_siswa.agama_id');

        $this->db->where('id', $id_peserta);

        $query = $this->db->get();

        return $query->row_array();
    }


    public function delete($id_peserta)
    {
        $query = "DELETE calon_siswa, tb_data_siswa, tb_ayah, tb_ibu, tbl_profile 
              FROM calon_siswa
              LEFT JOIN tb_data_siswa ON tb_data_siswa.id_siswa = calon_siswa.id_siswa
              LEFT JOIN tb_ayah ON tb_ayah.id_ayah = calon_siswa.id_ayah
              LEFT JOIN tb_ibu ON tb_ibu.id_ibu = calon_siswa.id_ibu
              LEFT JOIN tbl_profile ON tbl_profile.id_profile = calon_siswa.id_profile
              WHERE calon_siswa.id = $id_peserta";

        $this->db->query($query);

        return true;
    }
}
