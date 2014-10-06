<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Puppet_functions {
    public function forge_install($module) {
        if (preg_match('/^[a-z][a-z0-9_]*-[a-z][a-z0-9_]*$/',$module)) {
            $output = null;
            exec('export HOME=/tmp; puppet module install ' . $module . ' 2>&1; unset HOME; mv /tmp/.puppet/modules/* /etc/puppet/modules/ 2>&1; rm -rf /tmp/.puppet/;',$output);
            if (strpos(implode('',$output),'Error:')!==FALSE) {
                error_log(implode('',$output));
                return false;
            }

            return true;
        }
        return false;
    }
}