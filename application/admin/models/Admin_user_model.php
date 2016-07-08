<?php
class Admin_user_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }
	
	public function get_admin($username, $password){
    	if ($username === '' | $password === ''){
    	    return null;
    	}
		
    	$query = $this->db->get_where('usegear_admin', array('username' => $username, 'password' => $password));
    	return $query->row_array();
	}
}

?>