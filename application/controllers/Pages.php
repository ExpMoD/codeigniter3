<?php 

defined('BASEPATH' OR exit('No direct script access allowed'));

class Pages extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
        $this->load->database();
        $this->load->library("loadlibs");
	}

	public function index($page = 'home')
	{
	    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	    {
	            // Whoops, we don't have a page for that!
	            show_404();
	    }

	    $data['title'] = ucfirst($page); // Capitalize the first letter

        $data['libs'] = $this->loadlibs;

		$this->load->view('templates/header', $data);
        /*$this->load->database();
        $this->db->select('*')->from('statements');
        $data['table'] = $this->db->get();*/
        $this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
	
	/*public function view()
	{
	    if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
	    {
	            // Whoops, we don't have a page for that!
	            show_404();
	    }

	    $data['title'] = ucfirst($page); // Capitalize the first letter


		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}*/
}

?>