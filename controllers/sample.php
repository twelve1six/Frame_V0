<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sample extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->loac->model('sample_model');
	}
	
	function index() {
		$this->load->view('head');
		$samples = $this->sample_model->gets();
		$this->load->view('sample_list', array('samples'=>$samples));
		$this->load->view('main');
		$this->load->view('footer');
	}
	
}
?>