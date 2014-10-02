<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {
	public function index() {
        $reports_hosts = array_diff(scandir('/var/lib/puppet/reports'), array('..', '.'));

		$this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Reports","/reports/")
            ),
            'description' => "Reports..."
        ));
        $this->load->view('reports',array(
            'reports_hosts' => $reports_hosts
        ));
        $this->load->view('footer');
    }

    public function nodes($server) {
        $reports = array();

        $reports_dir = array_diff(scandir('/var/lib/puppet/reports/'.$server), array('..', '.'));
        foreach($reports_dir as $report_dir) {
            $reports[] = basename($report_dir,".yaml");
        }
        $reports = array_reverse($reports);

        $this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Reports","/reports/"),
                array("Reports from ".$server,"/reports/nodes/".$server."/")
            ),
            'description' => "View Reports for ".$server."..."
        ));
        $this->load->view('reports_nodes',array(
            'server' => $server,
            'reports' => $reports
        ));
        $this->load->view('footer');
    }

    public function view($server,$timestamp) {
        $yaml = file_get_contents('/var/lib/puppet/reports/'.$server.'/'.$timestamp.'.yaml');
        $ypar = yaml_parse($yaml);

        $logs_raw = array_reverse($ypar['logs']);
        $logs = array();
        foreach ($logs_raw as $log) {
            $split_resource = explode("/", $log['source']);
            if (strpos($log['source'], "/") !== false && $split_resource[count($split_resource) - 1] == "returns") {
                $log['resource'] = $split_resource[count($split_resource) - 2];
            } else {
                $log['resource'] = $log['source'];
            }

            if (isset($log['file'])) {
                if (strlen($log['file']) > 1 && strlen($log['line']) > 0) {
                    $log['content'] = $log['file'] . ":" . $log['line'];
                } else {
                    $log['content'] = '';
                }
            } else
                $log['content'] = '';

            switch ($log['level']) {
                case 'info':
                    $log['class'] = "info";
                    break;
                case 'notice':
                    $log['class'] = "success";
                    break;
                case 'warn':
                case 'warning':
                    $log['class'] = "warning";
                    break;
                case 'err':
                case 'error':
                    $log['class'] = "danger";
                    break;
                default:
                    $log['class'] = "";
            }

            $logs[] = $log;
        }

        if ($ypar['transaction_uuid']==null)
            $transaction = "Unknown";
        else
            $transaction = $ypar['transaction_uuid'];
        if ($ypar['configuration_version']==null)
            $config_version = "Unknown";
        else
            $config_version = date("l j F Y h:i:s A",$ypar['configuration_version']);
        if ($ypar['environment']==null)
            $environment = "Unknown";
        else
            $environment = $ypar['environment'];


        $this->load->view('header',array(
            'breadcrumbs' => array(
                array("Home","/"),
                array("Reports","/reports/"),
                array("Reports from ".$server,"/reports/nodes/".$server."/"),
                array("View Report","/reports/view/".$server."/".$timestamp."/")
            ),
            'description' => "View Report"
        ));
        $this->load->view('reports_view',array(
            'server' => $server,
            'timestamp' => $timestamp,
            'status' => strtoupper($ypar['status']),
            'transaction' => $transaction,
            'config_version' => $config_version,
            'environment' => $environment,
            'starttime' => date("l j F Y h:i:s A",strtotime($ypar['time'])),
            'logs' => $logs
        ));
        $this->load->view('footer',array(
            'debug' => var_export($ypar,true)
        ));
    }
}
