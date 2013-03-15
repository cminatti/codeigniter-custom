<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

        protected $header = array(); 

        protected $data = array(); 

        protected $footer = array(); 
        
	public function index()
	{
		$this->load->view('header', $this->header);
                $this->load->view('home', $this->data);
                $this->load->view('footer',  $this->footer);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */