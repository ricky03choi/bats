<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Dashboard extends Admin_Controller {

	    public function __construct()
    {
        parent::__construct();
        /* Load :: Common */
       // $this->check_login();
    }


	public function index()
	{
			//$this->load->view('welcome_message');
            $this->smarty->display('shop/dashboard/index.html');
        
	}
}