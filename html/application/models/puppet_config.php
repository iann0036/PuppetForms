<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Puppet_config extends CI_Model {
    private $config_filepath = '/etc/puppet/puppet.conf';
    private $config = array();
    private $changed = false;

    public function __construct() {
        parent::__construct();

        $this->get_config();
    }

    public function getModulePath() {
        if (isset($this->config['agent']['modulepath'])) {
            return $this->config['agent']['modulepath'];
        } else if (isset($this->config['main']['modulepath'])) {
            return $this->config['main']['modulepath'];
        } else
            return '/etc/puppet/modules/';
    }

    public function __destruct() {
        if ($this->changed)
            $this->write_php_ini($this->config, $this->config_filepath);
    }

    private function get_config() {
        $this->config = @parse_ini_file($this->config_filepath,true);
    }

    private function write_php_ini($array, $file) {
        $res = array();
        foreach($array as $key => $val) {
            if(is_array($val)) {
                $res[] = "[$key]";
                foreach($val as $skey => $sval) $res[] = "$skey = ".(is_numeric($sval) ? $sval : '"'.$sval.'"');
            }
            else $res[] = "$key = ".(is_numeric($val) ? $val : '"'.$val.'"');
        }
        file_put_contents($file, implode("\r\n", $res));
    }
}