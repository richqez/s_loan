<?php
/**
 * Author : ต่าย
 */
class Customer_model extends CI_Model
{

  public $customer_firstname ;
  public $customer_lastname ;
  public $customer_nickname ;
  public $customer_address ;
  public $customer_tel ;
  public $customer_group_id ;
  //public $created_at ;

  private $table_name = "customers";
 
  function __construct()
  {
    parent::__construct();
  }
  public function find_all(){
    return $this->db->get($this->table_name)->result();
  }
  /**
   * create customer_groups method
   * สร้าง
   */
  public function create(){

    $this->customer_firstname = $this->input->post('customer_firstname');
    $this->customer_lastname = $this->input->post('customer_lastname');
    $this->customer_nickname = $this->input->post('customer_nickname');
    $this->customer_address = $this->input->post('customer_address');
    $this->customer_tel = $this->input->post('customer_tel');
    $this->customer_group_id = $this->input->post('customer_group_id');
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
