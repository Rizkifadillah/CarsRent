<?php

class Data_type extends CI_Controller
{
    public function index(){

        $data['type'] = $this->rental_model->get_data('type')->result();

        $this->load->view('tamplate_admin/header');
        $this->load->view('tamplate_admin/sidebar');
        $this->load->view('admin/data_type',$data);
        $this->load->view('tamplate_admin/footer');
    }

    public function tambah_type(){

        $this->load->view('tamplate_admin/header');
        $this->load->view('tamplate_admin/sidebar');
        $this->load->view('admin/form_tambah_type');
        $this->load->view('tamplate_admin/footer');
    }

    public function tambah_type_aksi(){
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->tambah_type();
        }else{
            $kode_type  = $this->input->post('kode_type');
            $nama_type       = $this->input->post('nama_type');

            $data = array(
                'kode_type'     => $kode_type,
                'nama_type'     => $nama_type
            );

            $this->rental_model->insert_data($data, 'type');
            $this->session->set_flashdata('pesan', 'Data Mobil Berhasil Ditambahkan.');
            redirect('admin/data_type');

        }
    }

    public function update_type($id){
        $where = array('id_type' => $id);
        $data['type'] = $this->db->query("SELECT * FROM type WHERE id_type= '$id'")->result();

        $this->load->view('tamplate_admin/header');
        $this->load->view('tamplate_admin/sidebar');
        $this->load->view('admin/form_update_type',$data);
        $this->load->view('tamplate_admin/footer');

    }

    public function update_type_aksi(){
        $this->_rules();

        if($this->form_validation->run() == FALSE){
            $this->update_type();
        }else{
            $id                 = $this->input->post('id_type');
            $kode_type          = $this->input->post('kode_type');
            $nama_type          = $this->input->post('nama_type');

            $data = array(
                'kode_type'     => $kode_type,
                'nama_type'     => $nama_type
            );

            $where = array(
                'id_type' => $id
            );

            $this->rental_model->update_data('type', $data, $where);
            $this->session->set_flashdata('pesan', 'Data Mobil Berhasil DiUpdate.');
            redirect('admin/data_type');
        }
    }

    public function _rules(){
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
        $this->form_validation->set_rules('nama_type', 'Nama Type', 'required');
    }

    public function delete_type($id){
        $where = array('id_type' => $id);
        $this->rental_model->delete_data($where,'type');
        $this->session->set_flashdata('pesan', 'Data Mobil Berhasil Dihapus.');
        redirect('admin/data_type');
    }
}

?>