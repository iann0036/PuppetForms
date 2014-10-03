<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facts extends CI_Controller {
    public function index() {
        $facts = array();
        $facts_files = array_diff(scandir('/var/lib/puppet/yaml/facts'), array('..', '.'));
        foreach ($facts_files as $facts_file) {
            $file = file_get_contents('/var/lib/puppet/yaml/facts/'.$facts_file);
            $ypar = yaml_parse($file);
            $facts = array_merge($facts,array_keys($ypar['values']));
        }

        $this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Facts","/facts/")
            ),
            'description' => "Facts..."
        ));
        $this->load->view('facts',array(
            'facts' => $facts
        ));
        $this->load->view('footer');
    }

    public function view($fact) {
        $fact_values = array();
        $facts_files = array_diff(scandir('/var/lib/puppet/yaml/facts'), array('..', '.'));
        foreach ($facts_files as $facts_file) {
            $file = file_get_contents('/var/lib/puppet/yaml/facts/'.$facts_file);
            $ypar = yaml_parse($file);
            $host = basename($facts_file,".yaml");
            $fact_values[$host] = $ypar['values'][$fact];
        }

        $this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Facts","/facts/"),
                array("Fact - ".$fact,"/facts/view/".$fact."/")
            ),
            'description' => "Facts..."
        ));
        $this->load->view('facts_view',array(
            'fact' => $fact,
            'fact_values' => $fact_values
        ));
        $this->load->view('footer');
    }
}
