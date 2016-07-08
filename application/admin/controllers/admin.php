<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model ( 'kv_model' );
		
		if(!isset($_SESSION['username']) && !isset($_SESSION['login_in'])){
			//重定向浏览器 
			header("Location: ". base_url('login'));
			//确保重定向后，后续代码不会被执行 
			exit;
		}
	}
	
	/*后台首页*/
	public function index()
	{
		$data['title'] = '众诚软件USEGEAR后台管理系统';
		$data['username'] = $_SESSION['username'];
		//控制菜单显示
		$data ['active_class'] = 'admin';
		
		$data ['email'] = $this->kv_model->getValueByKey ('email');
		$data ['phone'] = $this->kv_model->getValueByKey ('phone');
		$data ['weibo'] = $this->kv_model->getValueByKey ('weibo');
		$data ['qq'] = $this->kv_model->getValueByKey ('qq');
		$data ['wechat'] = $this->kv_model->getValueByKey ('wechat');
		$data ['address'] = $this->kv_model->getValueByKey ('address');
		
		$this->load->view('header', $data);		
		$this->load->view('nav', $data);
		$this->load->view('index', $data);
		$this->load->view('footer', $data);
	}
	
	/*页面加载*/
	public function view($page='index')
	{
		$data['title'] = '众诚软件USEGEAR后台管理系统';
		$data['username'] = $_SESSION['username'];
		//控制菜单显示
		$data ['active_class'] = 'admin';
		
		$data ['email'] = $this->kv_model->getValueByKey ('email');
		$data ['phone'] = $this->kv_model->getValueByKey ('phone');
		$data ['weibo'] = $this->kv_model->getValueByKey ('weibo');
		$data ['qq'] = $this->kv_model->getValueByKey ('qq');
		$data ['wechat'] = $this->kv_model->getValueByKey ('wechat');
		$data ['address'] = $this->kv_model->getValueByKey ('address');
		
		$this->load->view('header', $data);
		$this->load->view('nav', $data);
		$this->load->view($page, $data);
		$this->load->view('footer', $data);
	}
	
	public function update() {
		$email = $_POST ['email'];
		$phone = $_POST ['phone'];
		$weibo = $_POST ['weibo'];
		$qq = $_POST ['qq'];
		$wechat = $_POST ['wechat'];
		$address = $_POST ['address'];
	
		$this->kv_model->updateValueByKey ( 'email', $email);
		$this->kv_model->updateValueByKey ( 'phone', $phone);
		$this->kv_model->updateValueByKey ( 'weibo', $weibo);
		$this->kv_model->updateValueByKey ( 'qq', $qq);
		$this->kv_model->updateValueByKey ( 'wechat', $wechat);
		$this->kv_model->updateValueByKey ( 'address', $address);
	
		// 重定向浏览器
		header ( "Location: " . base_url () );
	}
}
?>