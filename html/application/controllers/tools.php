<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tools extends CI_Controller {
    public function enc($server) {
        if ($this->input->is_cli_request()) {
            $modules = array();
            $modules_dir = array_diff(scandir('/etc/puppet/modules'), array('..', '.'));
            foreach($modules_dir as $module) {
                if (file_exists('/etc/puppet/modules/'.$module.'/metadata.json')) {
                    $data = json_decode(file_get_contents('/etc/puppet/modules/'.$module.'/metadata.json'));
                    $modules[] = $data->name;
                } else
                    $modules[] = $module;
            }

            echo yaml_emit(
                array(
                    'classes' => array() //$modules
                )
            );
        }
    }
}
