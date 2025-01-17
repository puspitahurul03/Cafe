<?php
class Model_invoice extends CI_Model{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama =$this->input->post('nama');
        $email =$this->input->post('email');

        $invoice = array(
            'nama_pemesan' =>  $nama,
            'email' => $email,
            'tgl_pesan'=> date('Y-m-d H:i:s'),
            'tgl_bayar' =>date('Y-m-d H:i:s', mktime(date('H'),
        date('i'),date('s'), date('m'), date('d'),date('Y'))),

        );
           $this->db->insert('invoice',$invoice);
           $id_invoice =$this->db->insert_id();

           foreach($this->cart->contents() as $item){
            $data = array(
                'id_in' => $id_invoice,
                'id' => $item['id'],
                'nama' => $item['name'],
                'jumlah'=> $item['qty'],
                'harga'=>$item['price']

            );
            $this->db->insert('pesanan',$data);
        }
           return TRUE;

    }
    public function tampil_data()
    {
        $result = $this->db->get('invoice');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id_in',$id_invoice)->limit(1)->get('invoice');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return false;
        }
    }
    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_in',$id_invoice)->get('pesanan');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }
}
?>  