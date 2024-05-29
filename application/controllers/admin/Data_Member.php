<?php
    class Data_member extends CI_Controller{

         public function __construct()
    {
       parent::__construct();
       if($this->session->userdata('role_id') !='1'){
           $this->session->set_flashdata('pesan','<div 
           class="alert alert-danger alert-dismissible fade show" role="alert">
          Anda Belum Login!
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
         redirect('auth/login');
       }
    }
    public function index()
    {
 $data['user'] = $this->model_member->tampil_data()->result();
 $this->load->view('templates_admin/header');
 $this->load->view('templates_admin/sidebar');
 $this->load->view('admin/data_member',$data);
 $this->load->view('templates_admin/footer');
    }
    public function tambah_aksi()
        {
            $nama_user = $this->input->post('nama'); 
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $role_id = $this->input->post('keterangan');
            $alamat= $this->input->post('alamat');
            $email = $this->input->post('email');
            $NoHP = $this->input->post('nowa');
            $data = array(
                'nama_user' => $nama_user,
                'username' => $username,
                'password' => $password,
                'role_id' => $role_id,
                'alamat' => $alamat,
                'email' => $email,
                'NoHP'  => $NoHP
            );
            $this->model_member->tambah_member($data,'user');
            redirect('admin/data_member/index');
        }      
        public function hapus ($id_user)
        {
            $where = array('id_user' => $id_user);
            $this->model_member->hapus_data($where,'user');
            redirect('admin/data_member/index');

        } 

public function detail($id_user)
{
    $data['user']= $this->model_member->detail_us($id_user);
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/detail_member',$data);
    $this->load->view('templates_admin/footer'); 
}
    }