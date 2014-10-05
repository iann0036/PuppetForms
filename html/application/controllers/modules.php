<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modules extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('puppet_config');
    }

	public function index() {
        $local_modules = $this->_getLocalModules();

		$this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Modules","/modules/")
            ),
            'description' => "Modules..."
        ));
        $this->load->view('modules',array(
            'local_modules' => $local_modules
        ));
        $this->load->view('footer');
    }

    public function search() {
        $search = $this->input->get_post('search');

        $results = $this->_getModules($search);

        $this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Modules","/modules/"),
                array("Search the Forge", "/modules/search/".$search."/")
            ),
            'description' => "Search results from the Puppet Forge"
        ));
        $this->load->view('modules_search',array(
            'results' => $results,
            'installed_modules' => $installed_modules
        ));
        $this->load->view('footer',array(
            'debug' => $results
        ));
    }

    private function _getModules($search) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://forgeapi.puppetlabs.com/v3/modules?query='.urlencode($search));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch,CURLOPT_USERAGENT,'iann0036-PuppetForms/0.1');
        $data = curl_exec($ch);
        $json = json_decode($data,true);
        curl_close($ch);
        return $json;
    }

    private function _getLocalModules() {
        $module_path = $this->puppet_config->getModulePath();

        $modules = array_diff(scandir($module_path), array('..', '.'));

        return $modules;
    }
}
