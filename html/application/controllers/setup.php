<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setup extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index() {
        if ($this->config->item('setup')==true) {
            redirect('/');
        }

		$this->load->view('header',array(
            'setup' => true
        ));
        $this->load->view('setup',array(
            'base_url' => $this->config->item('base_url')
        ));
        $this->load->view('footer');
    }

    public function step2() {
        $this->load->view('header',array(
            'setup' => true
        ));
        $this->load->view('setup_step2',array(
            'title' => $this->input->get_post('title'),
            'base_url' => $this->input->get_post('base_url')
        ));
        $this->load->view('footer');
    }

    public function step3() {
        $this->load->view('header',array(
            'setup' => true
        ));
        $this->load->view('setup_step3',array(
            'title' => $this->input->get_post('title'),
            'base_url' => $this->input->get_post('base_url'),
            'database_hostname' => $this->input->get_post('database_hostname'),
            'database_username' => $this->input->get_post('database_username'),
            'database_password' => $this->input->get_post('database_password'),
            'database_name' => $this->input->get_post('database_name')
        ));
        $this->load->view('footer');
    }

    public function finish() {
        $this->load->view('header',array(
            'setup' => true
        ));
        $this->load->view('setup_finish',array(
            'title' => $this->input->get_post('title'),
            'base_url' => $this->input->get_post('base_url'),
            'database_hostname' => $this->input->get_post('database_hostname'),
            'database_username' => $this->input->get_post('database_username'),
            'database_password' => $this->input->get_post('database_password'),
            'database_name' => $this->input->get_post('database_name'),
            'admin_username' => $this->input->get_post('admin_username'),
            'admin_name' => $this->input->get_post('admin_name'),
            'admin_password' => $this->input->get_post('admin_password')
        ));
        $this->load->view('footer');
    }

    public function commit() {
        redirect('/login/');
    }
}
