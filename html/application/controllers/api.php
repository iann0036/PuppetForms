<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('puppet_functions');
    }

	public function install_forge() {
        $module = $this->input->get_post('module');

        if ($this->puppet_functions->forge_install($module))
            echo "true";
        else
            echo "false";
    }
}
