<?php

    class Dashboard extends CI_Controller{

        public function index()
        {
            $data['mobil'] = $this->rental_model->get_data('mobil')->result();
            $this->load->view('tamplate_customer/header');
            $this->load->view('tamplate_customer/sidebar');
            $this->load->view('customer/dashboard',$data);
            $this->load->view('tamplate_customer/footer');
        }

        public function detail_mobil($id)
        {
            $data['detail'] = $this->rental_model->ambil_id_mobil($id);
            $this->load->view('tamplate_customer/header');
            $this->load->view('tamplate_customer/sidebar');
            $this->load->view('customer/detail_mobil',$data);
            $this->load->view('tamplate_customer/footer');

        }

    }
?>