<?php

class Search_model extends CI_Model {
    
     public function __construct(){
        $this->load->database();
    }

    public function search($term){
    	$query = $this->db->query ( "select * from usegear_product where product_name like '%".$term."%' or product_description like '%".$term."%' or product_att like '%".$term."%' or product_content like '%".$term."%' order by pub_time desc" );
    	return $query->result ();
    }

}