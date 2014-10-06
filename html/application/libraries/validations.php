<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Validations {
    public function check() {
        $return  = array();
        if (!extension_loaded('yaml'))
            $return[] = 'The extension <b>yaml</b> is not installed';
        if (!is_writable('/tmp'))
            $return[] = 'The directory <b>/tmp/</b> is not writable';
        if (!is_writable(FCPATH.'application/config/config.php'))
            $return[] = 'The file <b>'.FCPATH.'application/config/config.php</b> is not writable';
        return $return;
    }
}