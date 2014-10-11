<h3>Nodes</h3>
<?php
foreach($nodes as $node) {
    echo '<h6><i class="icon-stack"></i><a href="/nodes/view/'.$node['name'].'/"> '.$node['name'].' </a><span class="label label-success">'.$node['status'].'</span> <small class="display-block">Last Report: '.$node['time'].'</small></h6>';
}
?>