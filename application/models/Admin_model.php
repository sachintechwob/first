<?php 
class Admin_model extends CI_Model {
  public function __construct()
	{
		parent::__construct();
  }
   


   public function login($table,$where,$select)
   {
      $this->db->select($select);
      $this->db->where($where);
      $resp = $this->db->get($table)->row();
      if(isset($resp) && !empty($resp))
      {
         return $resp;
      }     
      else
      {
         return FALSE;
      }   
   }

   public function saveData($table,$data){
      $this->db->insert($table,$data);
      $id = $this->db->insert_id();
      if(isset($id) && !empty($id))
      {
         return $id;
      }   
      else
      {
         return FALSE;
      }   
   }

   public function get_all_records($table,$select)
   { 
      $this->db->select($select);
      $this->db->from($table);
      $query = $this->db->get();
      return $query->result_array();
   }

   public function get_all_records_where($table,$select,$where,$order)
   {
      $this->db->select($select);
      $this->db->from($table);
      $this->db->where($where);
      $this->db->order_by('id',$order);
      $query = $this->db->get();
      return $query->result_array();
   }

   public function get_where_records($table,$select,$where)
   {
      $this->db->select($select);
      $this->db->where($where);
      $this->db->from($table);
      $query = $this->db->get();
      return $query->row_array();
   }

   

   public function deleteData($table,$where){
      $this->db->where($where);
      $query = $this->db->delete($table);
      if ($query) {
         return true;
      }else{
         return false;
      }
   }

   public function updateData($table,$data,$id)
   {
      $this->db->where("id", $id);  
      $this->db->update($table, $data);  
      $result=$this->db->affected_rows();
      if ($result) {
      return true;
      }else{
         return false;
      }
         
   }

   public function totalCount($value="")
   {
      $this->db->select('id');
      $this->db->from('booking');
      if($value)
      {
        $this->db->where('added_by',$value);
      }  
      $query = $this->db->get();
      return $query->num_rows();
   }

   public function getOrderDetails($id)
   {
      $this->db->select('products.name,image,order_details.price,order_details.qty,order_details.details_id');
      $this->db->join('products','products.id = order_details.product_id'); 
      $this->db->from('order_details');
      $this->db->order_by('order_details.details_id','desc');
      $this->db->where('order_id', base64_decode($id));
      return $this->db->get()->result_array();
   }

   

}

?>