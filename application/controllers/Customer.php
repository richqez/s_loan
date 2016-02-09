<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Example Controller
 */
class Customer extends SheepCode_Controller {

	function __construct()
  	{
	    parent::__construct();
	    $this->load->model('Customer_model');
  	}
	public function create_form()
	{


		$this->render('customer/create_form',['title_page'=>"Register Coustomer"]);

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
