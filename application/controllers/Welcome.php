<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	
	    public function __construct()
    {
        parent::__construct();
		
		$this->load->model('Auth_rule_model');

        /* Load :: Common */
       // $this->check_login();
    }
	
	public function index()
	{
		$where=[
		status=>'0'
		];
	$row= $this->Auth_rule_model->get_rules($where);
		var_dump($row);
		
		//$this->load->view('welcome_message');
	}
}
