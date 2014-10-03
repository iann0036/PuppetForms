<h3>Nodes</h3>
<?php
foreach($nodes as $node) {
    echo '<h6><i class="icon-stack"></i><a href="/nodes/view/'.$node.'/"> '.$node.' </a><span class="label label-success">CHANGED</span> <small class="display-block">Last Report: 10 minutes ago</small></h6>';
}
?>