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

    private function _getClasses($module) {
        $GLOBALS['module'] = $module;
        $module_path = $this->puppet_config->getModulePath();
        $GLOBALS['manifests_path'] = $module_path.DIRECTORY_SEPARATOR.$module.DIRECTORY_SEPARATOR."manifests";
        $GLOBAL['classes'] = array();
        function scanTopDir($dir) {
            if (substr($dir,-1)!=DIRECTORY_SEPARATOR)
                $dir.=DIRECTORY_SEPARATOR;
            $manifest_files = array_diff(scandir($GLOBALS['manifests_path'].$dir), array('.', '..'));
            foreach ($manifest_files as $file) {
                if (is_dir($file)) {
                    scanTopDir($dir.$file);
                } else {
                    $filepinfo = pathinfo($file);
                    if ($filepinfo['extension'] == "pp") {
                        $subdirpath = str_replace(DIRECTORY_SEPARATOR,"::",$dir);
                        if ($filepinfo['filename'] == "init" && $dir==DIRECTORY_SEPARATOR)
                            $GLOBAL['classes'][] = $GLOBALS['module'];
                        elseif ($filepinfo['filename'] == "init") {
                            $GLOBAL['classes'][] = $GLOBALS['module'] . "::" . substr($subdirpath,0,strlen($subdirpath)-2);
                        } else
                            $GLOBAL['classes'][] = $GLOBALS['module'] . "::" . $subdirpath . $filepinfo['filename'];
                    }
                }
            }
        }
        scanTopDir('');

        return $GLOBAL['classes'];
    }

    public function detail($module) {
        $classes = $this->_getClasses($module);

        $this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Modules","/modules/"),
                array($module,"/modules/".$module."/")
            ),
            'description' => "Details on the ".$module." module"
        ));
        $this->load->view('modules_detail',array(
            'module' => $module,
            'classes' => $classes
        ));
        $this->load->view('footer');
    }

    public function search() {
        $local_modules = $this->_getLocalModules();

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
            'local_modules' => $local_modules
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
