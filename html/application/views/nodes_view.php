<h3><?php echo $node; ?></h3>
<h5>Facts</h5>
<?php
    foreach ($facts as $fact => $value) {
        echo '<b><a href="/facts/view/'.$fact.'/">'.$fact.'</a></b> - '.$value.'<br />';
    }
?>