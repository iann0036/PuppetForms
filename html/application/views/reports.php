<h3>Nodes</h3>
<?php
foreach($reports_hosts as $reports_host) {
    echo '<h6><i class="icon-stack"></i><a href="/reports/nodes/'.$reports_host.'/"> '.$reports_host.' </a><span class="label label-success">CHANGED</span> <small class="display-block">Last Report: 10 minutes ago</small></h6>';
}
?>