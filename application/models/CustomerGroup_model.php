<?php
/**
 * Author : ต่าย
 */
class CustomerGroup_model extends CI_Model
{

  public $customer_group_name ;
  //public $created_at ;

  private $table_name = "customer_groups";

  function __construct()
  {
    parent::__construct();
  }

  /**
   * method is_dup
   * ตรวจสอบการซ้ำ โดย ชื่อของกลุ่ม
   * return boolean
   */
  public function is_dup($group_name){
    $query = $this->db->get_where($this->table_name,['customer_group_name' => $group_name]);
    $row = $query->row();
    if (sizeof($row) > 0) {
      return TRUE ;
    }
    else{
      return FALSE ;
    }
  }

  /**
   * method find_all
   * ดึงค่าทั้งหมดจาก ตาราง
   * return array(object)
   */
  public function find_all(){
    return $this->db->get($this->table_name)->result();
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
