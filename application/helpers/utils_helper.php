<?php


function img_url(){
  return base_url() . 'assert/images/';
}

function formatDateToShow($source){

	$splitSource = explode("-", $source);
  $dd = $splitSource[2];
  $mm = $splitSource[1];
  $yyyy = $splitSource[0] + 543;
  return  $dd. '/' . $mm . '/' . $yyyy ;

}

 ?>
