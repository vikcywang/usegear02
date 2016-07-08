<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Search extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->helper ( 'url' );
		$this->load->model ( 'category_model' );
		$this->load->model ( 'search_model' );
	}
	
	public function doSearch() {
		$search_key = $_REQUEST['key'];
		$search_result = $this->search_model->search ( $search_key );
		foreach ($search_result as $item){
			$item->product_name = str_replace($search_key,'<span style="color:#94ab3e;">'.$search_key.'</span>',$item->product_name);
			$item->product_description = str_replace($search_key,'<span style="color:#94ab3e;">'.$search_key.'</span>',$item->product_description);
			$item->product_att = str_replace($search_key,'<span style="color:#94ab3e;">'.$search_key.'</span>',$item->product_att);
			$item->product_content = str_replace($search_key,'<span style="color:#94ab3e;">'.$search_key.'</span>',$item->product_content);
		}
	
		//产品列表
		$data ['product_all'] = $search_result;
		$data ['category_all'] = $this->category_model->getCategory ();
		$this->load->view ( 'search_result', $data );
	}
}

?>