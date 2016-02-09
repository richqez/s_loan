<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Auth Controller
 */

class Auth extends SheepCode_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('User_model');


  }


  /**
   * Load view login page
   */
  public function index($data=NULL){

    $this->render_one('login',$data);
  }


  /**
   * vertify user infomation
   */
   public function login(){

    $result = $this->User_model->verify_user();


    if (!$result['user_username']) {
      $this->session->set_flashdata("login_error","ไม่พบข้อมูลชื่อผู้ใช้");
    }elseif ($result['user_username'] && !$result['user_password']) {
      $this->session->set_flashdata("login_error","ชื่อผู้ใช้กับรหัสผ่านไม่ตรงกัน");
    }elseif ($result['user_username'] && $result['user_password']) {
      $this->session->set_flashdata("login_error","ผ่านละ");
    }

    redirect('/auth','refresh');

   }


   public function create_user(){

     $this->User_model->create();
     echo "create user success";
   }



}





 ?>
