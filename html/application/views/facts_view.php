<h3>Fact Values</h3>
<?php
    foreach ($fact_values as $host => $value) {
        echo '<b><a href="/nodes/view/'.$host.'/">'.$host.'</a></b> - '.$value.'<br />';
    }