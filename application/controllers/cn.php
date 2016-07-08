<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Cn extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model ( 'kv_model' );
	}
	public function index() {
		//前台显示数据
		$data ['email'] = $this->kv_model->getValueByKey ('email');
		$data ['phone'] = $this->kv_model->getValueByKey ('phone');
		$data ['weibo'] = $this->kv_model->getValueByKey ('weibo');
		$data ['qq'] = $this->kv_model->getValueByKey ('qq');
		$data ['wechat'] = $this->kv_model->getValueByKey ('wechat');
		$data ['address'] = $this->kv_model->getValueByKey ('address');
		
		$data ['title'] = '众诚软件USEGEAR';
		$this->load->view ( 'header', $data );
		$this->load->view ( 'home', $data );
		$this->load->view ( 'footer', $data );
	}
	public function view($page = 'home') {
		//前台显示数据
		$data ['email'] = $this->kv_model->getValueByKey ('email');
		$data ['phone'] = $this->kv_model->getValueByKey ('phone');
		$data ['weibo'] = $this->kv_model->getValueByKey ('weibo');
		$data ['qq'] = $this->kv_model->getValueByKey ('qq');
		$data ['wechat'] = $this->kv_model->getValueByKey ('wechat');
		$data ['address'] = $this->kv_model->getValueByKey ('address');
		
		$data ['title'] = '众诚软件USEGEAR';
		$this->load->view ( 'header', $data );
		$this->load->view ( $page, $data );
		$this->load->view ( 'footer', $data );
	}
	public function error() {
		//前台显示数据
		$data ['email'] = $this->kv_model->getValueByKey ('email');
		$data ['phone'] = $this->kv_model->getValueByKey ('phone');
		$data ['weibo'] = $this->kv_model->getValueByKey ('weibo');
		$data ['qq'] = $this->kv_model->getValueByKey ('qq');
		$data ['wechat'] = $this->kv_model->getValueByKey ('wechat');
		$data ['address'] = $this->kv_model->getValueByKey ('address');
		
		$data ['title'] = '众诚软件USEGEAR';
		$this->load->view ( 'header', $data );
		$this->load->view ( '404', $data );
		$this->load->view ( 'footer', $data );
	}
}
