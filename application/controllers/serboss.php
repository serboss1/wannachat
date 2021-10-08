<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class serboss extends CI_Controller {

	
	public function index()
	{
		$this->load->view('serboss_view');
	}
}
