<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index()
	{
        if ($this->config->item('setup')==false) {
            redirect('/setup/');
        }
		$this->load->view('header',array(
            'breadcrumbs' => array(
                array("Dashboard","/")
            ),
            'description' => "Overview of Puppet node operations"
        ));
        $this->load->view('dashboard');
        $this->load->view('footer');
    }
}
