<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Project extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		$this->load->model ( 'product_model' );
		$this->load->model ( 'category_model' );
		$this->load->model ( 'kv_model' );
	}
	public function index() {
		$category1 = $this->category_model->getCategoryByCategoryName ( '解决方案' );
		$categorys = $this->category_model->getCategoryByParentId($category1[0]->category_id);
		$category_id = array();
		foreach ($categorys as $category){
			$category_id[] = $category->category_id;
		}
		
		//产品列表
		$data ['product_all'] = $this->product_model->getProductByCatrgoryIdAndParentId ( $category1[0]->category_id, $category_id );
		
		$data ['category_all'] = $this->category_model->getCategory ();
		$data ['categorys'] = $categorys;
		$data ['title'] = '解决方案--众诚软件USEGEAR';
		//前台显示数据
		$data ['email'] = $this->kv_model->getValueByKey ('email');
		$data ['phone'] = $this->kv_model->getValueByKey ('phone');
		$data ['weibo'] = $this->kv_model->getValueByKey ('weibo');
		$data ['qq'] = $this->kv_model->getValueByKey ('qq');
		$data ['wechat'] = $this->kv_model->getValueByKey ('wechat');
		$data ['address'] = $this->kv_model->getValueByKey ('address');
		
		$this->load->view ( 'header', $data );
		$this->load->view ( 'projects', $data );
		$this->load->view ( 'footer', $data );
	}
	public function getProject($project_id) {
		$category1 = $this->category_model->getCategoryByCategoryName ( '解决方案' );
		$categorys = $this->category_model->getCategoryByParentId($category1[0]->category_id);
		$category_id = array();
		foreach ($categorys as $category){
			$category_id[] = $category->category_id;
		}
		
		//产品列表
		$data ['product_all'] = $this->product_model->getProductByCatrgoryIdAndParentId ( $category1[0]->category_id, $category_id );
		$data ['product'] = $this->product_model->getProductByProductId ( $project_id );
		$data ['category'] = $this->category_model->getCategoryById ($data ['product'][0]->category_id);
		$data ['category_all'] = $this->category_model->getCategory ();
		$data ['categorys'] = $categorys;
		$data ['title'] = '智能解决方案--众诚软件USEGEAR';
		//前台显示数据
		$data ['email'] = $this->kv_model->getValueByKey ('email');
		$data ['phone'] = $this->kv_model->getValueByKey ('phone');
		$data ['weibo'] = $this->kv_model->getValueByKey ('weibo');
		$data ['qq'] = $this->kv_model->getValueByKey ('qq');
		$data ['wechat'] = $this->kv_model->getValueByKey ('wechat');
		$data ['address'] = $this->kv_model->getValueByKey ('address');
		
		$this->load->view ( 'header', $data );
		$this->load->view ( 'project', $data );
		$this->load->view ( 'footer', $data );
	}
}

?>