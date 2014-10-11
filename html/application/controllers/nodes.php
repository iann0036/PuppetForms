<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nodes extends CI_Controller {
    public function index() {
        $nodes = array();
        $node_names = array_diff(scandir('/var/lib/puppet/reports'), array('..', '.'));
        foreach ($node_names as $node_name) {
            $dir = scandir('/var/lib/puppet/reports/'.$node_name.'/');
            $last_report_filename = array_pop($dir);
            $timestamp = $this->_convert_datetime(basename($last_report_filename,".yaml"));
            $file = file_get_contents('/var/lib/puppet/reports/'.$node_name.'/'.$last_report_filename);
            $ypar = yaml_parse($file);
            $status = strtoupper($ypar['status']);

            $nodes[] = array(
                'name' => $node_name,
                'time' => $timestamp,
                'status' => $status
            );
        }

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

    private function _convert_datetime($datetime, $dateonly = false) {
        $newdate = strtotime($datetime);
        $newdate2 = $_SERVER['REQUEST_TIME']-$newdate;
        if ($newdate2>172799 || $dateonly)
            return date("F j, Y",$newdate);
        else if ($newdate2>86399)
            return "Yesterday";
        else if ($newdate2>7199)
            return intval($newdate2/3600)." hours ago";
        else if ($newdate2>3599)
            return "1 hour ago";
        else if ($newdate2>119)
            return intval($newdate2/60)." minutes ago";
        else if ($newdate2>59)
            return "1 minute ago";
        else if ($newdate2>=0)
            return "Just a moment ago";
        else
            return "In the future";
    }
}
