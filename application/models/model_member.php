<?php

class Model_member extends CI_Model{
    public function tampil_data(){
        return $this->db->get('user'); 
    }
    public function tambah_member($data,$table){
        $this->db->insert($table,$data); 
   }
   public function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
}
   public function detail_us($id_user)
   {
       $result = $this->db->where('id_user',$id_user)->get('user');
       if($result->num_rows() > 0){
           return $result->result();
       }else{
           return false;
       }
       
}
}