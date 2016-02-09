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
      $this->load->model('CustomerGroup_model');
  	}
	public function create_form()
	{

    $data['group'] = $this->CustomerGroup_model->find_all();
    $this->render('customer/create_form',$data);
		// $this->render('customer/create_form',['title_page'=>"Register Coustomer"],$data);

	}
  public function read_form(){

    $this->render('customer/read_form');

  }
	function create(){
    // if (!$this->Customer_model->is_dup($this->input->post('customer_firstname')) // &&
    //     // !$this->Customer_model->is_dup($this->input->post('customer_lastname'))   &&
    //     // !$this->Customer_model->is_dup($this->input->post('customer_nickname'))   &&
    //     // !$this->Customer_model->is_dup($this->input->post('customer_address'))    &&
    //     // !$this->Customer_model->is_dup($this->input->post('customer_tel'))        &&
    //     // !$this->Customer_model->is_dup($this->input->post('customer_group_id'))   
    //     ) {
      $this->Customer_model->create();
    //   $this->session->set_flashdata("result_message","ทำการบันทึกข้อมูลสำเร็จ");
    // }
    // else{
    //   $this->session->set_flashdata("result_message-error","ไม่สามารถบันทึกข้อมูล เนื่องจาก ข้อมูลมีอยู่แล้ว");
    // }

    redirect('/cus/create_form','refresh');
  }

   public function datatable(){
    $result_set = $this->Customer_model->find_all();
    foreach ($result_set as $key => $value) {
     
    }
    $this->render_json(['data'=>$result_set]);
  }

}
