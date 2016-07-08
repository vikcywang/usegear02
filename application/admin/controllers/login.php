<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_user_model');
        $this->load->helper('url');
		$this->load->library('session');
	}
	
	public function index(){
		if(isset($_SESSION['username']) && $_SESSION['logged_in'] === TRUE){
			//重定向浏览器 
			header("Location: ". base_url('index'));
			//确保重定向后，后续代码不会被执行 
			exit;
		}
		$data['title'] = '登陆--众诚软件USEGEAR';
		$this->load->view('login', $data);
    }
	
	public function checklogin(){
		$username = $_POST['username'];
		$password = $_POST['password'];
        $data['user'] = $this->admin_user_model->get_admin($username, $password);
		
		if (empty($data['user'])){
        	show_404();
	    }else{
			$_SESSION['username'] = $username;
			$_SESSION['logged_in'] = TRUE;
			
			//重定向浏览器 
			header("Location: ". base_url('index'));
			//确保重定向后，后续代码不会被执行 
			exit;
		}
    }
	
	public function logout(){
		unset(
			$_SESSION['username'],
			$_SESSION['login_in']
		);
		//重定向浏览器 
		header("Location: ". base_url('login'));
		//确保重定向后，后续代码不会被执行 
		exit;
    }
}
?>