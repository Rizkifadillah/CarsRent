<?php

    class Register extends CI_Controller{

        public function index()
        {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $this->load->view('tamplate_customer/header');
                $this->load->view('tamplate_customer/sidebar');
                $this->load->view('register');
                $this->load->view('tamplate_customer/footer');
            }else{
                $nama           = $this->input->post('nama');
                $username       = $this->input->post('username');
                $alamat         = $this->input->post('alamat');
                $gender         = $this->input->post('gender');
                $no_telpon      = $this->input->post('no_telpon');
                $no_ktp         = $this->input->post('no_ktp');
                $password       = md5($this->input->post('password'));
                $role_id        ='2';
    
                $data = array(
                    'nama' => $nama,
                    'username' => $username,
                    'alamat' => $alamat,
                    'gender' => $gender,
                    'no_telpon' => $no_telpon,
                    'no_ktp' => $no_ktp,
                    'password' => $password,
                    'role_id'   => $role_id
                );

                $this->rental_model->insert_data($data,'customer');
                $this->session->set_flashdata('pesan', 'Berhasil Register. Silahkan login!');
    
                redirect('auth/login');
    
            }
            // $data['mobil'] = $this->rental_model->get_data('mobil')->result();
        }

        public function _rules(){
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required');
            $this->form_validation->set_rules('gender', 'Gender', 'required');
            $this->form_validation->set_rules('no_telpon', 'No. Telpon', 'required');
            $this->form_validation->set_rules('no_ktp', 'No. KTP', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
        }
    

    }
?>