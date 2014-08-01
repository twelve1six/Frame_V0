<?php
class Topic_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function getRequestNumByH($hname) {
		return $this->db->query("EXEC @retval = dbo.sp_test :hname")->execute()->nextRowset();
	}
	
	function get($topic_id) {
		return $this->db->get_where('topic',array('id'=>$topic_id))->row();		
	}
	
}
