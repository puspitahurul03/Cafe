<?php

class Model_menu extends CI_Model{
    public function tampil_data(){
        return $this->db->get('menu'); 
    }
    public function tambah_menu($data,$table){
         $this->db->insert($table,$data); 
    }
    public function edit_menu($where,$table){
        return $this->db->get_where($table,$where); 
}
    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
        
    }
    public function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function find($id)
    {
        $result = $this->db->where('id',$id)
                           ->limit(1)
                           ->get('menu');
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return array();
        }
    }
    public function detail_mn($id)
    {
        $result = $this->db->where('id',$id)->get('menu');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}