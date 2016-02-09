<?php
/**
 * Author : ต่าย
 */
class Customer_model extends CI_Model
{

  public $customer_name ;
  //public $created_at ;

  private $table_name = "customers";

  function __construct()
  {
    parent::__construct();
  }



  /**
   * create customer_groups method
   * สร้าง
   */
  public function create(){

    $this->customer_group_name = $this->input->post('customer_group_name');

    $this->db->insert($this->table_name,$this);

  }


  /**
   * update customer_groups method
   * อัพเดรต
   */
  public function update(){

    $this->customer_group_name = $this->input->post('customer_group_name');

    $this->db->update($this->table_name,$this,['customer_group_id' => $this->input->post('customer_group_id')]);

  }


  /**
   * delete customer_groups method
   * ลบ
   */
  public function delete(){

    $this->db->delete($this->table_name,['customer_group_id'=> $this->input->post('customer_group_id')]);

  }




}



 ?>
