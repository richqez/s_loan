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
  public function index(){

    $this->render_one('login');
  }


  /**
   * vertify user infomation
   */
   public function login(){

    $result = $this->User_model->verify_user();


    if (!$result['user_username']) {
      $data['err_message'] = "ไม่พบข้อมูลชื่อผู้ใช้";
    }elseif ($result['user_username'] && !$result['user_password']) {
      $data['err_message'] = "ชื่อผู้ใช้กับรหัสผ่านไม่ตรงกัน";
    }elseif ($result['user_username'] && $result['user_password']) {
      $data['err_message'] = "ผ่านละ";
    }

      $this->render_one('login',$data);


   }



   public function create_user(){

     $this->User_model->create();
     echo "create user success";
   }



}





 ?>
