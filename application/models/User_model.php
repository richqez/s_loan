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

  function __construct(argument)
  {
    parent::__construct();
  }


  public function verify_user(){

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
