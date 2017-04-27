<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('ion_auth');	
		$this->load->model('ion_auth_model');
		$this->load->model('auth_rule_model');
		$this->get_nav();
	}
	/**
     * 获取侧边栏菜单
     */
	public function get_nav(){	
	if($this->ion_auth->logged_in()){
		$group=$this->ion_auth->get_users_groups($_SESSION['user_id'])->result();
		$rule_id=json_decode($group[0]->rules);
		$status=[
		'status'=>'1'
		];
		$where=[
		'id'=>$rule_id,
		'status'=>$status
		];
		$rows=$this->auth_rule_model->get_rules($where);
		$menu=array();  
		foreach($rows as $arr){  
		$menu[$arr->pid][]=$arr;//重新整理数据排序。  
		}
		error_reporting( E_ALL&~E_NOTICE );
		$this->smarty->assign('menu', $menu);
		//$this->smarty->display('admin/common/nav.html');	
		}
	}
	
	

}
	/**
	 *管理后台 判断用户是否已经登陆，是否有管理员权限
	 */


class Admin_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');	
		$this->check_login();
		
	}
	
	/**
	 * 判断用户是否已经登陆
	 */
	protected function check_login() {

		
	
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}
	}
	
	

}
	/**
	 * 判断商家是否有登陆
	 */


class Base_Controller extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');	
		$this->check_login();
		
	}
	
	/**
	 * 判断用户是否已经登陆
	 */
	protected function check_login() {

		
	
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
	}
	
	

}
