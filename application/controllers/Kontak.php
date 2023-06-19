<?php
defined('BASEPATH') or exit('No direct script allow access');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data = 'Kontak';
        $this->load->view('styles/head');
        $this->load->view('styles/navbar');
        $this->load->view('styles/sidebar');
        $this->load->view('admin/Kontak', $data);
        $this->load->view('styles/footer');
    }
}
