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
	
	#저장프로시저를 만들어 return 값을 받아와서 그 값을 return하는 것이 효율적
	#DB Table에 값이 insert 될 때, 기본 값으로 R값, comment완료되면 C로 변경되도록
	#Table에서 R count
	function countReq() {
		while(1) {	
		$this->db->get_where();
		}
	}
	
	#Table에서 C count
	function countCmt() {
		
	}
}
