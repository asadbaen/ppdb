<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model');
        $this->load->model('Peserta_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = "Halaman Beranda User";
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['list_agama'] = $this->User_model->getAgama();
        $data['list_jenis_kelamin'] = $this->User_model->getJeniskelamin();
        $data['list_pekerjaan'] = $this->User_model->getPekerjaan();
        $data['list_pendidikan'] = $this->User_model->getPendidikan();

        $this->load->view('styles/head');
        $this->load->view('styles/navbar');
        $this->load->view('styles/sidebar');
        $this->load->view('user/index', $data);
        $this->load->view('styles/footer');
    }

    public function save_create()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_depan', 'Nama Depan', 'required');
        $this->form_validation->set_rules('nama_belakang', 'Nama Belakang', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin_id', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama_id', 'Agama', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Added FAILED!</div>');
            redirect('user');
        } else {
            $nama_depan = $this->input->post('nama_depan');
            $nama_belakang = $this->input->post('nama_belakang');
            $nama_lengkap = $nama_depan . ' ' . $nama_belakang;

            $dataUser = [
                'nama_lengkap' => $nama_lengkap,
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin_id' => $this->input->post('jenis_kelamin_id'),
                'anak_ke' => $this->input->post('anak_ke'),
                'jml_saudara' => $this->input->post('jml_saudara'),
                'agama_id' => $this->input->post('agama_id'),
                'kewarganegaraan_siswa' => $this->input->post('kewarganegaraan_siswa'),
            ];
            $dataAyah = [
                'nama_ayah' => $this->input->post('nama_ayah'),
                'tempat_lahir_ayah' => $this->input->post('tempat_lahir_ayah'),
                'tanggal_lahir_ayah' => $this->input->post('tanggal_lahir_ayah'),
                'kewarganegaraan_ayah' => $this->input->post('kewarganegaraan_ayah'),
                'pendidikan_ayah' => $this->input->post('pendidikan_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'agama_ayah' => $this->input->post('agama_ayah'),
                'telepon_ayah' => $this->input->post('telepon_ayah'),
            ];
            $dataIbu = [
                'nama_ibu' => $this->input->post('nama_ibu'),
                'tempat_lahir_ibu' => $this->input->post('tempat_lahir_ibu'),
                'tanggal_lahir_ibu' => $this->input->post('tanggal_lahir_ibu'),
                'kewarganegaraan_ibu' => $this->input->post('kewarganegaraan_ibu'),
                'pendidikan_ibu' => $this->input->post('pendidikan_ibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'agama_ibu' => $this->input->post('agama_ibu'),
                'telepon_ibu' => $this->input->post('telepon_ibu'),
            ];
            $calonSiswa = [
                'id_siswa' => $this->User_model->createUser($dataUser),
                'id_ayah' => $this->User_model->createAyah($dataAyah),
                'id_ibu' => $this->User_model->createIbu($dataIbu)
            ];

            $this->db->insert('calon_peserta', $calonSiswa);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil ditambahkan! </div>');
            redirect('user');
        }
    }
}
