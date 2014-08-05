<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sample extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('sample_model');		
	}
	
	public function index() {
		// $this->load->view('test');
		$this->load->view('head');		
		$this->load->view('Requested_Reports');

		$Rnum  = $this->sample_model->getRequestNumByH('A');
		$Hname = 'A';
		$br    = '</br>';
		
		$data = array(
			'Rnum'=>$Rnum,
			'Hname'=>$Hname,
			'br'=>$br
		);
		
		$this->load->view('Hospital_Num', $data);
		
		$Rnum  = $this->sample_model->getRequestNumByH('B');
		$Hname = 'B';
		$br    = null;
		
		$data = array(
			'Rnum'=>$Rnum,
			'Hname'=>$Hname,
			'br'=>$br
		);
		
		$this->load->view('Hospital_Num', $data);
		
		$Rnum  = $this->sample_model->getRequestNumByH('C');
		$Hname = 'C';
		
		$data = array(
			'Rnum'=>$Rnum,
			'Hname'=>$Hname,
			'br'=>$br
		);
		$this->load->view('Hospital_Num', $data);
		
		$Rnum  = $this->sample_model->getRequestNumByH('D');
		$Hname = 'D';
		
		$data = array(
			'Rnum'=>$Rnum,
			'Hname'=>$Hname,
			'br'=>$br
		);$data = array(
			'Rnum'=>$Rnum,
			'Hname'=>$Hname,
			'br'=>$br
		);
		
		$this->load->view('Hospital_Num', $data);
		
		$this->load->view('Report');
		
		//number of fcode id in table 'TEST'
		$id=14;
		$fcode  = $this->sample_model->getImage($id);
		$this->load->view('Image',$fcode);
		
		if($_POST) {
			$comment = $this->input->post('comment', TRUE);
			$this->sample_model->updateComment($id, $comment);
			
			// redirect('http://192.168.0.20:8087/index.php/sample');
			// exit;
		}
		
		$comment = $this->sample_model->getComment($id);		
		$this->load->view('Comment',$comment);
		
		$this->load->view('footer');
	}
	
}