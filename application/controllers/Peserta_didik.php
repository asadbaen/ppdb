<?php
defined('BASEPATH') or exit('No direct script allow access');
require FCPATH . '/vendor/autoload.php';

use Dompdf\Dompdf;

class Peserta_didik extends CI_Controller
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
        $title = 'Data Peserta';

        $data['list_peserta'] = $this->Peserta_model->getPeserta();

        $this->load->view('styles/head');
        $this->load->view('styles/navbar');
        $this->load->view('styles/sidebar');
        $this->load->view('admin/data_peserta', $data);
        $this->load->view('styles/footer');
    }

    public function detail($id_peserta)
    {
        $data['peserta'] = $this->Peserta_model->getById($id_peserta);
        $data['list_agama'] = $this->User_model->getAgama();
        $this->load->view('styles/head');
        $this->load->view('styles/navbar');
        $this->load->view('styles/sidebar');
        $this->load->view('admin/detail', $data);
        $this->load->view('styles/footer');
    }
    public function cetak($id_peserta)
    {

        $data['peserta'] = $this->Peserta_model->getById($id_peserta);
        $data['list_agama'] = $this->User_model->getAgama();

        $this->load->view('admin/cetak_form', $data);
    }

    public function deleted($id_peserta)
    {
        $delete_image = $this->get_profile_id($id_peserta);
        unlink('uploads/' . $delete_image->nama_file);

        $result = $this->Peserta_model->delete($id_peserta);

        if ($result) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data deleted successfully!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to delete data!</div>');
        }

        redirect('Peserta_didik');
    }
    private function get_profile_id($id_peserta)
    {
        $this->db->select('nama_file');
        $this->db->from('tbl_profile');
        $this->db->where('tbl_profile.id_profile', $id_peserta);
        $info = $this->db->get();
        return $info->row();
    }
}
