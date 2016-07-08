<?php
class Kv_model extends CI_Model {
	public function __construct() {
		$this->load->database ();
	}
	public function getValueByKey($kvkey) {
		$query = $this->db->query ( 'select * from usegear_kv where kvkey=\'' . $kvkey . '\'' );
		return $query->result ();
	}
	public function updateValueByKey($kvkey, $kvvalue) {
		$this->db->query ( 'update usegear_kv set kvvalue=\'' . $kvvalue . '\' where kvkey=\'' . $kvkey . '\'' );
	}
}

?>