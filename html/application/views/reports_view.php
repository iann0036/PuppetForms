<h3>Summary <span class="label label-default"><?php echo $status; ?></span></h3>
<dl style="margin: 0;">
    <dt class="text-info">Host</dt>
    <dd><?php echo $server; ?></dd>

    <dt class="text-info">Transaction Reference</dt>
    <dd><?php echo $transaction; ?></dd>

    <dt class="text-info">Configuration Version</dt>
    <dd><?php echo $config_version; ?></dd>

    <dt class="text-info">Environment</dt>
    <dd><?php echo $environment; ?></dd>

    <dt class="text-info">Start Time</dt>
    <dd><?php echo $starttime; ?></dd>
</dl>
<br />

<h3>Events</h3>
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th>Resource</th>
            <th>Message</th>
            <th>Time</th>
            <th>Content</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($logs as $log) {
            echo '<tr class="'.$log['class'].'">';
            echo '<td style="white-space: nowrap"><span class="text-'.$log['class'].'">'.$log['resource'].'</span></td>';
            echo '<td><span class="text-'.$log['class'].'">'.$log['message'].'</span></td>';
            echo '<td style="white-space: nowrap"><span class="text-'.$log['class'].'">'.date("g:i:s A",strtotime($log['time'])).'</span></td>';
            echo '<td style="white-space: nowrap"><span class="text-'.$log['class'].'">'.$log['content'].'</span></td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>