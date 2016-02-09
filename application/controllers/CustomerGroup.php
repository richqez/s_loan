<?php

/**
 *
 */
class CustomerGroup extends SheepCode_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('CustomerGroup_model');
  }

  function create_form(){
    $this->render('customer_group/create_form');
  }

  function read_form(){

  }


  function create(){
    if (!$this->CustomerGroup_model->is_dup($this->input->post('customer_group_name'))) {
      $this->CustomerGroup_model->create();
      $this->session->set_flashdata("result_message","ทำการบันทึกข้อมูลสำเร็จ");
    }
    else{
      $this->session->set_flashdata("result_message-error","ไม่สามารถบันทึกข้อมูล เนื่องจาก ข้อมูลมีอยู่แล้ว");
    }

    redirect('/cus-group/create_form','refresh');
  }







}




 ?>
