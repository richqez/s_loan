<?php

/**
 *
 */
class CustomerGroup extends SheepCode_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('CustomerGroup_model');
  }

  public function create_form(){
    $this->render('customer_group/create_form');
  }

  public function read_form(){
    $this->render('customer_group/read_form');
  }


  public function create(){
    if (!$this->CustomerGroup_model->is_dup($this->input->post('customer_group_name'))) {
      $this->CustomerGroup_model->create();
      $this->session->set_flashdata("result_message","ทำการบันทึกข้อมูลสำเร็จ");
    }
    else{
      $this->session->set_flashdata("result_message-error","ไม่สามารถบันทึกข้อมูล เนื่องจาก ข้อมูลมีอยู่แล้ว");
    }

    redirect('/cus-group/create_form','refresh');
  }

  public function datatable(){
    $result_set = $this->CustomerGroup_model->find_all();
    foreach ($result_set as $key => $value) {
      $dt = new DateTime($value->created_at);
      $dt = $dt->format('Y-m-d');
      $result_set[$key]->created_at = formatDateToShow($dt);
    }
    $this->render_json(['data'=>$result_set]);
  }









}




 ?>
