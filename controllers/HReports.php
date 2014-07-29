<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
		
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('HP_model');		
	}
	
	function index() {
		$this->load->view('head');
		$topics = $this->HP_model->gets();
		$this->load->view('HP_list', array('HReports' => $HReports));
		$this->load->view('main');
		$this->load->view('footer');
	}
	
	function get($id) {
		$this->load->view('head');
		$toipcs = $this->topic_model->gets();
	}
}

?>