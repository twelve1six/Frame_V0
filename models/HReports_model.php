<?php
class Topic_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function gets() {
		return $this->db->query("SELECT * FROM HReport")->result();
	}
	
	function get($topic_id) {
		return $this->db->get_where('HReport',array('id'=>$HReport_id))->row();		
	}
	
}
