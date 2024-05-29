<?php

class Registrasi extends CI_Controller{
    public function index()
    {
        $this->form_validation->set_rules('nama','Nama','required', ['required' => 'Nama Wajib Diisi!']);
        $this->form_validation->set_rules('username','Username','required', ['required' => 'Username Wajib Diisi!']);
        $this->form_validation->set_rules('password_1','Password','required|matches[password_2]', 
        ['required' => 'Password Wajib Diisi!',
        'matches' => 'Password tidak cocok!']);
        $this->form_validation->set_rules('password_2','Password','required|matches[password_1]');
        $this->form_validation->set_rules('alamat','Alamat','required', ['required' => 'Alamat Wajib Diisi!']);
        $this->form_validation->set_rules('email','Email','required', ['required' => 'Email Wajib Diisi!']);
        $this->form_validation->set_rules('nowa','Nowa','required', ['required' => 'No Wa  Wajib Diisi!']);

        if($this->form_validation->run() == FALSE){    
        $this->load->view('templates/header'); 
        $this->load->view('registrasi');
        $this->load->view('templates/footer');  
    }else{
        $data = array(
            'id_user' => '',
            'nama_user'=> $this->input->post('nama'),
            'username'=> $this->input->post('username'),
            'password'=> $this->input->post('password_1'),
            'role_id' => 2,
            'alamat'=> $this->input->post('alamat'),
            'email'=> $this->input->post('email'),
            'NoHP'=> $this->input->post('nowa'),
        );
        $this->db->insert('user',$data);
        redirect('auth/login');
    }
    }
}