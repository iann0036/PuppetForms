<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nodes extends CI_Controller {
    public function index() {
        $nodes = array_diff(scandir('/var/lib/puppet/reports'), array('..', '.'));

        $this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Nodes","/nodes/")
            ),
            'description' => "Nodes..."
        ));
        $this->load->view('nodes',array(
            'nodes' => $nodes
        ));
        $this->load->view('footer');
    }

    public function view($node) {
        $file = file_get_contents('/var/lib/puppet/yaml/facts/'.$node.".yaml");
        $ypar = yaml_parse($file);
        $facts = $ypar['values'];

        $this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Nodes","/nodes/"),
                array($node,"/nodes/view/".$node."/")
            ),
            'description' => "Node..."
        ));
        $this->load->view('nodes_view',array(
            'node' => $node,
            'facts' => $facts
        ));
        $this->load->view('footer');
    }
}
