<?php

/**
 *
 */
class User_model extends CI_Model
{

  //public $user_id;

  public $user_username;
  public $user_password;
  public $user_role;

  private $table_name = 'users';

  function __construct()
  {
    parent::__construct();
  }


  public function verify_user(){

    $query = $this->db->get_where($this->table_name,['user_username'=> $this->input->post('user_username')]);

    $user = $query->row();

    if (sizeof($user) == 0) {
        return ["user_username"=>FALSE];
    }else{
      $password = md5($this->input->post('user_password'));
      if ($password == $user->user_password) {
        return ["user_username"=> TRUE,"user_password"=>TRUE];
      }
      else{
        return ["user_username"=>TRUE,"user_password"=>FALSE];
      }
    }
  }


  /**
   * create user
   */
   public function create(){

     $this->user_username = $this->input->post('user_username');
     $this->user_password = md5($this->input->post('user_password'));
     $this->user_role     = $this->input->post('user_role');

     $this->db->insert($this->table_name,$this);

   }

   /**
    * update user
    */
   public function update(){

     $this->user_username = $this->input->post('user_username');
     $this->user_password = md5($this->input->post('user_password'));
     $this->user_role     = $this->input->post('user_role');

     $this->db->update($this->$table_name,$this,['user_id'=>$this->input->post('id')]);

   }

   /**
    * delete user
    */
   public function delete(){

    $this->db->delete($table_name,["user_id"=>$this->input->get('id')]);

   }



}



 ?>
