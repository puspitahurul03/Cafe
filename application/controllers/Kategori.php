<?php

class kategori extends CI_Controller{
    public function kopi_susu()
    {
        $data['kopi_susu']= $this->model_kategori->
        data_kopsu()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kopi_susu',$data);
        $this->load->view('templates/footer');
    }
    public function esbase()
    {
        $data['esbase']= $this->model_kategori->
        data_esbase()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('esbase',$data);
        $this->load->view('templates/footer');
    }
    public function mocktail()
    {
        $data['mocktail']= $this->model_kategori->
        data_mocktail()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mocktail',$data);
        $this->load->view('templates/footer');
    }
    public function manbrew()
    {
        $data['manbrew']= $this->model_kategori->
        data_manbrew()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('manbrew',$data);
        $this->load->view('templates/footer');
    }
    public function noncof()
    {
        $data['noncof']= $this->model_kategori->
        data_noncof()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('noncof',$data);
        $this->load->view('templates/footer');
    }
    public function lime()
    {
        $data['lime']= $this->model_kategori->
        data_lime()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('lime',$data);
        $this->load->view('templates/footer');
    }
    public function enrice()
    {
        $data['enrice']= $this->model_kategori->
        data_enrice()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('enrice',$data);
        $this->load->view('templates/footer');
    }
    public function tosan()
    {
        $data['tosan']= $this->model_kategori->
        data_tosan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tosan',$data);
        $this->load->view('templates/footer');
    }

}