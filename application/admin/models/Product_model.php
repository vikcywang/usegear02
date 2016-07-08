<?php
class Product_model extends CI_Model {
	public function __construct() {
		$this->load->database ();
	}
	
	// 添加产品
	public function addProduct($data) {
		$this->db->insert ( 'usegear_product', $data );
	}
	
	// 获取全部产品 （按发布时间倒序）
	public function getProduct() {
		$query = $this->db->query ( "select * from usegear_product order by pub_time desc" );
		return $query->result ();
	}
	
	// 更新产品
	public function updateProduct($data) {
		$this->db->replace ( 'usegear_product', $data );
	}
	
	// 根据产品id获取产品
	public function getProductByProductId($product_id) {
		$query = $this->db->get_where ( 'usegear_product', array (
				'product_id' => $product_id 
		) );
		return $query->result ();
	}
	
	// 根据产品name获取产品
	public function getProductByProductName($product_name) {
		$query = $this->db->get_where ( 'usegear_product', array (
				'product_name' => $product_name 
		) );
		return $query->result ();
	}
	
	// 根据分类id获取产品
	public function getProductByCatrgoryId($category_id) {
		$query = $this->db->get_where ( 'usegear_product', array (
				'category_id' => $category_id 
		) );
		return $query->result ();
	}
	
	// 根据分类id获取产品,及其子类产品
	public function getProductByCatrgoryIdAndParentId($category_id, $category) {
		$q1 = $category_id;
		if (! empty ( $category )) {
			foreach ( $category as $c ) {
				$q1 = $q1 . ',' . $c;
			}
		}
		
		$q = 'select * from usegear_product where category_id in(' . $q1 . ') order by pub_time desc';
		$query = $this->db->query ( $q );
		return $query->result ();
	}
	
	// 根据产品id删除产品
	public function deleteProductById($product_id) {
		$this->db->delete ( 'usegear_product', array (
				'product_id' => $product_id 
		) );
	}
}

?>