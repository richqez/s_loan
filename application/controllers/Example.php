<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Example extends SheepCode_Controller {

	public function index()
	{


		$this->render('welcome_message',['title_page'=>"test title page"]);

		
	}
}
