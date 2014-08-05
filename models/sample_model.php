<?php
class Sample_model extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	
	function getRequestNumByH($hname) {
		$sql = "select * FROM TEST WHERE hname = '".$hname."'";
		$query = $this->db->query($sql);
		
		return $query->num_rows();
	}
	
	function getImage($id) {
		//column number of fname on table 'TEST'
		$fcode = 4;
		
		//return fcode of a row
		return $this->db->get_where('TEST',array('id'=>$id))->row($fcode);	
	}
	
	function updateComment($id, $comment) {
		//column number of comment on table 'TEST'
		$sql = "UPDATE PHP_test3.dbo.TEST SET comment = ".$comment." WHERE id = ".$id;
		$this->db->query($sql);	
	}
	
	function getComment($id) {
		//column number of comment on table 'TEST'
		$comment = 7;
		
		//return fcode of a row
		return $this->db->get_where('TEST',array('id'=>$id))->row($comment);	
	}
	
}
