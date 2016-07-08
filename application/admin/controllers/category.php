<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Category extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		$this->load->model ( 'category_model' );
		
		if(!isset($_SESSION['username']) && !isset($_SESSION['login_in'])){
			//重定向浏览器
			header("Location: ". base_url('login'));
			//确保重定向后，后续代码不会被执行
			exit;
		}
	}
	public function index() {
		$data ['category_all'] = $this->category_model->getCategory ();
		$data ['username'] = $_SESSION ['username'];
		$data ['title'] = '分类管理--众诚软件USEGEAR';
		
		//控制菜单显示
		$data ['active_class'] = 'category';
		$this->load->view ( 'header', $data );
		$this->load->view ( 'nav', $data );
		$this->load->view ( 'category', $data );
		$this->load->view ( 'footer', $data );
	}
	public function view($page = 'category_add') {
		$data ['title'] = '众诚软件USEGEAR后台管理系统';
		$data ['username'] = $_SESSION ['username'];
		//控制菜单显示
		$data ['active_class'] = 'category';
		$this->load->view ( 'header', $data );
		$this->load->view ( 'nav', $data );
		$this->load->view ( $page, $data );
		$this->load->view ( 'footer', $data );
	}
	public function add() {
		$category_name = $_POST ['category_name'];
		$category_description = $_POST ['category_description'];
		$parent_id = $_POST ['parent_id'];
		$sort = $_POST ['sort'];
		
		$this->category_model->addCategory ( $category_name, $category_description, $parent_id, $sort );
		
		// 重定向浏览器
		header ( "Location: " . base_url ( 'category' ) );
	}
	public function edit($id) {
		$data ['category'] = $this->category_model->getCategoryById ( $id );
		
		$data ['title'] = '分类管理--众诚软件USEGEAR';
		$data ['username'] = $_SESSION ['username'];
		
		//控制菜单显示
		$data ['active_class'] = 'category';
		$this->load->view ( 'header', $data );
		$this->load->view ( 'nav', $data );
		$this->load->view ( 'category_edit', $data );
		$this->load->view ( 'footer', $data );
	}
	public function update() {
		$category_id = $_POST ['category_id'];
		$category_name = $_POST ['category_name'];
		$category_description = $_POST ['category_description'];
		$parent_id = $_POST ['parent_id'];
		$sort = $_POST ['sort'];
		
		$this->category_model->updateCategory ( $category_id, $category_name, $category_description, $parent_id, $sort );
		
		// 重定向浏览器
		header ( "Location: " . base_url ( 'category' ) );
	}
	public function delete($id) {
		$this->category_model->deleteCategoryById ( $id );
		
		// 重定向浏览器
		header ( "Location: " . base_url ( 'category' ) );
	}
}
?>