<h3>View Reports from <?php echo $server; ?></h3>
<ul>
<?php
foreach($reports as $report) {
    echo '<li><a href="/reports/view/'.$server.'/'.$report.'/">'.date('g:i A - j/m/Y',strtotime($report)).'</a></li>';
}
?>
</ul>