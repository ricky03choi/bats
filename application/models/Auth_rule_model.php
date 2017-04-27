<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_rule_model extends MY_Model
{
	
	
	
	public function __construct()
	{
		parent::__construct();
		$this->_table='auth_rule';
	}

	
		public function get_rules($where){
	
	$rows=$this->get_many_by($where);
	return $rows;
			
	}
	
	
	
	
	
	
	
	
	
	
	
}
