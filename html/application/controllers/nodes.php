<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nodes extends CI_Controller {
    public function index() {
        $this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Nodes","/nodes/")
            ),
            'description' => "Nodes..."
        ));
        $this->load->view('nodes');
        $this->load->view('footer');
    }
}
