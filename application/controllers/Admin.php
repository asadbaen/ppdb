<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = "Halaman Beranda Admin";
        $this->load->view('styles/head');
        $this->load->view('styles/navbar');
        $this->load->view('styles/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('styles/footer');
    }

    public function save_create()
    {
    }
}
