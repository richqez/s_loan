<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Example Controller
 */
class Customer extends SheepCode_Controller {

	public function create_form()
	{


		$this->render('customer/create_form',['title_page'=>"Register Coustomer"]);

	}
}
