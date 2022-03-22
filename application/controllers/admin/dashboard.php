<?php

    class Dashboard extends CI_Controller{
        public function index()
        {
            $this->load->view('tamplate_admin/header');
            $this->load->view('tamplate_admin/sidebar');
            $this->load->view('admin/dashboard');
            $this->load->view('tamplate_admin/footer');
        }
    }

?>