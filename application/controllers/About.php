<?php 

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = ucfirst('About');

	    $this->load->view('templates/header', $data);
	    $this->load->view('pages/about', $data);
	    $this->load->view('templates/footer', $data);
	}
}

 ?>