<?php
defined('BASEPATH') or exit('No direct script allow access');

class Peserta_model extends CI_Model
{

    public function getPeserta()
    {
        $this->db->select('calon_peserta.*,tb_data_peserta.*,tb_jenis_kelamin.*,tb_agama.*');
        $this->db->from('calon_peserta');
        $this->db->join('tb_data_peserta', 'tb_data_peserta.id_siswa=calon_peserta.id_siswa');
        $this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.jenis_kelamin_id=tb_data_peserta.jenis_kelamin_id');
        $this->db->join('tb_agama', 'tb_agama.agama_id=tb_data_peserta.agama_id');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getById($id_peserta)
    {
        $this->db->select('calon_peserta.*,tb_data_peserta.*,tb_jenis_kelamin.*,tb_agama.*,tb_ayah.*,tb_pendidikan.*,tb_pekerjaan.*,tb_ibu.*');
        $this->db->from('calon_peserta');
        // data peserta
        $this->db->join('tb_data_peserta', 'tb_data_peserta.id_siswa=calon_peserta.id_siswa');
        $this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.jenis_kelamin_id=tb_data_peserta.jenis_kelamin_id');
        $this->db->join('tb_agama', 'tb_agama.agama_id=tb_data_peserta.agama_id');
        // ayah
        $this->db->join('tb_ayah', 'tb_ayah.id_ayah=calon_peserta.id_ayah');
        $this->db->join('tb_pendidikan', 'tb_pendidikan.pendidikan_id=tb_ayah.pendidikan_ayah');
        $this->db->join('tb_pekerjaan', 'tb_pekerjaan.pekerjaan_id=tb_ayah.pekerjaan_ayah');
        $this->db->join('tb_agama AS tbagama_ayah', 'tbagama_ayah.agama_id=tb_ayah.agama_ayah');
        // ibu
        $this->db->join('tb_ibu', 'tb_ibu.id_ibu=calon_peserta.id_ibu');
        $this->db->join('tb_pendidikan AS tbpendidikan_ibu', 'tbpendidikan_ibu.pendidikan_id=tb_ibu.pendidikan_ibu');
        $this->db->join('tb_pekerjaan AS tbpekerjaan_ibu', 'tbpekerjaan_ibu.pekerjaan_id=tb_ibu.pekerjaan_ibu');
        $this->db->join('tb_agama AS tbagama_ibu', 'tbagama_ibu.agama_id=tb_ibu.agama_ibu');
        $this->db->where('id', $id_peserta);

        $query = $this->db->get();

        return $query->row_array();
    }


    public function updateDataPeserta($idDataSiswa, $dataCalonPeserta, $dataPeserta, $dataAyah, $dataIbu)
    {
        $this->db->trans_start(); // Mulai transaksi

        // Perbarui data siswa
        $this->db->where('id', $idDataSiswa);
        $this->db->update('calon_peserta', $dataCalonPeserta);
        // Perbarui data siswa
        $this->db->where('id_siswa', $dataCalonPeserta['id_siswa']);
        $this->db->update('tb_data_peserta', $dataPeserta);

        // Perbarui data ayah
        $this->db->where('id_ayah', $dataCalonPeserta['id_ayah']);
        $this->db->update('tb_ayah', $dataAyah);

        // Perbarui data ibu
        $this->db->where('id_ibu', $dataCalonPeserta['id_ibu']);
        $this->db->update('tb_ibu', $dataIbu);

        $this->db->trans_complete(); // Selesai transaksi

        if ($this->db->trans_status() === FALSE) {
            // Terjadi kesalahan dalam transaksi
            return false;
        } else {
            // Berhasil memperbarui data
            return true;
        }
    }


    public function delete($id_peserta)
    {
        $query = "DELETE calon_peserta, tb_data_peserta, tb_ayah, tb_ibu
              FROM calon_peserta
              LEFT JOIN tb_data_peserta ON tb_data_peserta.id_siswa = calon_peserta.id_siswa
              LEFT JOIN tb_ayah ON tb_ayah.id_ayah = calon_peserta.id_ayah
              LEFT JOIN tb_ibu ON tb_ibu.id_ibu = calon_peserta.id_ibu
              WHERE calon_peserta.id = $id_peserta";

        $this->db->query($query);

        return true;
    }
}
