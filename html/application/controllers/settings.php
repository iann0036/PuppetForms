<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {
	public function index() {
		$this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Settings","/settings/")
            ),
            'description' => "Settings..."
        ));
        $this->load->view('settings');
        $this->load->view('footer');
    }
}
