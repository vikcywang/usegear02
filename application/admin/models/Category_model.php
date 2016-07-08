<?php
class Category_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }
	
	public function addCategory($name, $description, $parent_id, $sort){
    	$data = array(
			'category_name' => $name,
			'category_description' => $description,
			'parent_id' => $parent_id,
			'sort' => $sort
		);
		
		$this->db->insert('usegear_category', $data);
	}
	
	public function getCategory(){
		$query = $this->db->query("select * from usegear_category order by sort");
		return $query->result();
	}
	
	public function updateCategory($id, $name, $description, $parent_id, $sort){
    	$data = array(
			'category_id' => $id,
			'category_name' => $name,
			'category_description' => $description,
			'parent_id' => $parent_id,
			'sort' => $sort
		);
		
		$this->db->replace('usegear_category', $data);
	}
	
	public function getCategoryById($id){
		$query = $this->db->get_where('usegear_category', array('category_id' => $id));
		return $query->result();
	}
	
	// 根据分类name获取产品
	public function getCategoryByCategoryName($category_name) {
		$query = $this->db->get_where ( 'usegear_category', array (
				'category_name' => $category_name
		) );
		return $query->result ();
	}
	
	public function getCategoryByParentId($parent_id){
		$query = $this->db->get_where('usegear_category', array('parent_id' => $parent_id));
		return $query->result();
	}
	
	public function deleteCategoryById($id){
		$this->db->delete('usegear_category', array('category_id' => $id));
	}
}

?>