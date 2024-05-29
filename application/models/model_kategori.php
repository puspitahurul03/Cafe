<?php
class Model_kategori extends CI_Model{
    public function data_kopsu(){
       return $this->db->get_where("menu",array('kategori'=>'Kopi Susu'));
    }
    public function data_esbase(){
        return $this->db->get_where("menu",array('kategori'=>'Espresso Base'));
     }
     public function data_mocktail(){
        return $this->db->get_where("menu",array('kategori'=>'Mocktail'));
     }
     public function data_manbrew(){
        return $this->db->get_where("menu",array('kategori'=>'Manual Brew'));
     }
     public function data_noncof(){
      return $this->db->get_where("menu",array('kategori'=>'Non Coffee'));
   }
     public function data_lime(){
        return $this->db->get_where("menu",array('kategori'=>'Light Meal'));
     }
     public function data_enrice(){
        return $this->db->get_where("menu",array('kategori'=>'Eat and Rice'));
     }
     public function data_tosan(){
        return $this->db->get_where("menu",array('kategori'=>'Toast Sandwich'));
     }
}
?>