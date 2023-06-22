<?php
defined('BASEPATH') or exit('No direct script allow access');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Peserta_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Data Peserta';

        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['list_peserta'] = $this->Peserta_model->getPeserta();

        $this->load->view('styles/head', $data);
        $this->load->view('styles/navbar');
        $this->load->view('styles/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('styles/footer');
    }

    public function detail($id_peserta)
    {
        $data['title'] = "Halaman Detail";
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['peserta'] = $this->Peserta_model->getById($id_peserta);
        $data['list_agama'] = $this->User_model->getAgama();

        $this->load->view('styles/head', $data);
        $this->load->view('styles/navbar');
        $this->load->view('styles/sidebar');
        $this->load->view('admin/detail', $data);
        $this->load->view('styles/footer');
    }

    public function edit($id_peserta)
    {
        $data['title'] = "Halaman Edit";
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['peserta'] = $this->Peserta_model->getById($id_peserta);
        $data['list_agama'] = $this->User_model->getAgama();
        $data['list_jenis_kelamin'] = $this->User_model->getJeniskelamin();
        $data['list_pekerjaan'] = $this->User_model->getPekerjaan();
        $data['list_pendidikan'] = $this->User_model->getPendidikan();

        $this->load->view('styles/head', $data);
        $this->load->view('styles/navbar');
        $this->load->view('styles/sidebar');
        $this->load->view('admin/edit', $data);
        $this->load->view('styles/footer');
    }

    public function save_edit()
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_lengkap', 'Nama Depan', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('jenis_kelamin_id', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama_id', 'Agama', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Added FAILED!</div>');
            redirect('admin');
        } else {
            $idDataPeserta = $this->input->post('id');

            $dataPeserta = [
                'nama_lengkap' => $this->input->post('nama_lengkap'),
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

            $dataCalonPeserta = [
                'id_siswa' => $this->input->post('id_siswa'),
                'id_ayah' => $this->input->post('id_ayah'),
                'id_ibu' => $this->input->post('id_ibu'),
            ];

            $result = $this->Peserta_model->updateDataPeserta($idDataPeserta, $dataCalonPeserta, $dataPeserta, $dataAyah, $dataIbu);

            if ($result) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil Di Update! </div>');
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal Update! </div>');
                redirect('admin');
            }
        }
    }

    public function cetak($id_peserta)
    {
        $data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

        $data['peserta'] = $this->Peserta_model->getById($id_peserta);
        $data['list_agama'] = $this->User_model->getAgama();

        $this->load->view('admin/cetak_form', $data);
    }
}
