<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Product extends CI_Controller {
	
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		$this->load->model ( 'product_model' );
		$this->load->model ( 'category_model' );
		
		if(!isset($_SESSION['username']) && !isset($_SESSION['login_in'])){
			//重定向浏览器
			header("Location: ". base_url('login'));
			//确保重定向后，后续代码不会被执行
			exit;
		}
	}
	public function index() {
		$category1 = $this->category_model->getCategoryByCategoryName ( '产品' );
		$categorys = $this->category_model->getCategoryByParentId($category1[0]->category_id);
		$category_id = array();
		foreach ($categorys as $category){
			$category_id[] = $category->category_id;
		}
		
		//产品列表
		$data ['product_all'] = $this->product_model->getProductByCatrgoryIdAndParentId ( $category1[0]->category_id, $category_id );
		
		$data ['category_all'] = $this->category_model->getCategory ();
		$data ['username'] = $_SESSION ['username'];
		$data ['title'] = '产品管理--众诚软件USEGEAR';
		//控制菜单显示
		$data ['active_class'] = 'product';
		$this->load->view ( 'header', $data );
		$this->load->view ( 'nav', $data );
		$this->load->view ( 'product', $data );
		$this->load->view ( 'footer', $data );
	}
	public function view($page = 'product_add') {
		$data ['category_all'] = $this->category_model->getCategory ();
		$data ['title'] = '众诚软件USEGEAR后台管理系统';
		$data ['username'] = $_SESSION ['username'];
		//控制菜单显示
		$data ['active_class'] = 'product';
		$this->load->view ( 'header', $data );
		$this->load->view ( 'nav', $data );
		$this->load->view ( $page, $data );
		$this->load->view ( 'footer', $data );
	}
	public function add() {
		$data = array (
				// 产品名称
				'product_name' => $_POST ['product_name'],
				// 分类id
				'category_id' => $_POST ['category_id'],
				// 产品描述
				'product_description' => $_POST ['product_description'],
				// 产品图片链接
				'product_img' => $_POST ['product_img'],
				// 发布时间
				'pub_time' => date ( 'y-m-d h:i:s', time () ),
				// 产品属性
				'product_att' => $_POST ['product_att'],
				// 产品下载链接
				'product_download_url' => $_POST ['product_download_url'],
				// 正文
				'product_content' => $_POST ['product_content'] 
		);
		
		$this->product_model->addProduct ( $data );
		
		// 重定向浏览器
		header ( "Location: " . base_url ( 'product' ) );
	}
	public function edit($product_id) {
		$data ['product'] = $this->product_model->getProductByProductId ( $product_id );
		$data ['category_all'] = $this->category_model->getCategory ();
		
		$data ['title'] = '产品管理--众诚软件USEGEAR';
		$data ['username'] = $_SESSION ['username'];
		//控制菜单显示
		$data ['active_class'] = 'product';
		$this->load->view ( 'header', $data );
		$this->load->view ( 'nav', $data );
		$this->load->view ( 'product_edit', $data );
		$this->load->view ( 'footer', $data );
	}
	public function update() {
		$data = array (
				// 产品id
				'product_id' => $_POST ['product_id'],
				// 产品名称
				'product_name' => $_POST ['product_name'],
				// 分类id
				'category_id' => $_POST ['category_id'],
				// 产品描述
				'product_description' => $_POST ['product_description'],
				// 产品图片链接
				'product_img' => $_POST ['product_img'],
				// 发布时间
				'pub_time' => date ( 'y-m-d h:i:s', time () ),
				// 产品属性
				'product_att' => $_POST ['product_att'],
				// 产品下载链接
				'product_download_url' => $_POST ['product_download_url'],
				// 正文
				'product_content' => $_POST ['product_content'] 
		);
		
		$this->product_model->updateProduct ( $data );
		
		// 重定向浏览器
		header ( "Location: " . base_url ( 'product' ) );
	}
	public function delete($product_id) {
		$this->product_model->deleteProductById ( $product_id );
		
		// 重定向浏览器
		header ( "Location: " . base_url ( 'product' ) );
	}
}

?>