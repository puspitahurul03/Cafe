<?php
    class Data_barang extends CI_Controller{

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
     $data['Menu'] = $this->model_menu->tampil_data()->result();
     $this->load->view('templates_admin/header');
     $this->load->view('templates_admin/sidebar');
     $this->load->view('admin/data_barang',$data);
     $this->load->view('templates_admin/footer');
        }
        public function tambah_aksi()
        {
            $nama = $this->input->post('nama'); 
            $keterangan = $this->input->post('keterangan');
            $kategori = $this->input->post('kategori');
            $harga = $this->input->post('harga');
            $gambar = $_FILES['gambar']['name'];
            if($gambar=''){}else{
                $config['upload_path']='./uploads';
                $config['allowed_types']='jpg|jpeg|png|gif';

                $this->load->library('upload',$config);
                if(!$this->upload->do_upload ('gambar')){
                echo"Gambar gagal di upload!";

                }else {
                    $gambar =$this->upload->data('file_name');
                }
            }
            $data = array(
                'nama' => $nama,
                'keterangan' => $keterangan,
                'kategori' => $kategori,
                'harga' => $harga,
                'nama' => $nama,
                'gambar' => $gambar
            );
            $this->model_menu->tambah_menu($data,'menu');
            redirect('admin/data_barang/index');
        }
        public function edit($id){
            $where = array ('id' =>$id);
            $data['Menu'] =$this->model_menu->edit_menu($where,'menu')->result();
            $this->load->view('templates_admin/header');
            $this->load->view('templates_admin/sidebar');
            $this->load->view('admin/edit_menu',$data);
            $this->load->view('templates_admin/footer');
        }
        public function update(){
            $id         = $this->input->post('id');
            $nama       = $this->input->post('nama');
            $keterangan = $this->input->post('keterangan');
            $kategori   = $this->input->post('kategori');
            $harga      = $this->input->post('harga');

            $data=array(
                'nama'       => $nama,
                'keterangan' => $keterangan,
                'kategori'   => $kategori,
                'harga'      => $harga

            );
            $where = array(
                'id' => $id
            );
            $this->model_menu->update_data($where,$data,'menu');
            redirect('admin/data_barang/index');
        }
        public function hapus ($id)
        {
            $where = array('id' => $id);
            $this->model_menu->hapus_data($where,'menu');
            redirect('admin/data_barang/index');

        }
        public function detail($id)
    {
        $data['Menu']= $this->model_menu->detail_mn($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_menu',$data);
        $this->load->view('templates_admin/footer'); 
    }
    }
?>