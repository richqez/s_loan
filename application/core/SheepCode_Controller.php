<?php
/**
 *
 */
class SheepCode_Controller extends CI_Controller
{



  // new method for render_view_template
  public function render($view_name,$data=NULL){
    $this->load->view('_master/_head',$data);
		$this->load->view($view_name,$data);
		$this->load->view('_master/_footer',$data);
  }

  public function render_one($view_name,$data=NULL){
    $this->load->view($view_name,$data);
  }

  public function render_json($data){
    header('Content-type: application/json;charset=utf-8');
    echo json_encode($data,JSON_UNESCAPED_UNICODE);
  }






}


 ?>
