<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function myFunction() {
		// $student = array(

		// 				 'sid' => 1 ,
		// 				 'sname' => 'nisu',
		// 				 'qualification' => 'MCA(int)'	
		//  			);

		 // $data['student_data'] = $student;
		$this->load->model('Model_name');		
		$data['data'] = $this->Model_name->get_post();
		// print_r($data);
		$this->load->view('hello',$data);

	}
}
