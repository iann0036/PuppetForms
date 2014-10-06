<?php
    $results_left = array();
    $results_right = array();

    for ($i=0; $i<count($results['results']); $i++) {
        if ($i%2==0)
            $results_left[] = $results['results'][$i];
        else
            $results_right[] = $results['results'][$i];
    }
?>

<div class="row">
<div class="col-md-6">

<?php
foreach ($results_left as $result) {
?>
    <div class="block task task-normal">
        <div class="row with-padding">
            <div class="col-sm-9">
                <div class="task-description">
                    <a href="#"><?php echo $result['name']; ?></a>
                    <i>by <?php echo $result['owner']['username']; ?></i>
                    <span style="height: 34px;"><?php if (isset($result['current_release']['metadata']['summary'])) {
                            if ($result['current_release']['metadata']['summary']!="UNKNOWN")
                                echo $result['current_release']['metadata']['summary'];
                        } ?></span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="task-info">
                    <span><span class="label label-info"><i class="icon-download4"></i> <span style="vertical-align: middle;"><?php echo number_format($result['downloads'],0,'.',','); ?></span></span></span>
                    <span>v<?php echo $result['current_release']['version']; ?> | <?php echo date('M j, Y',strtotime($result['current_release']['created_at'])); ?></span>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="pull-left">
                <span>Available to download</span>
            </div>
            <div class="pull-right">
                <ul class="footer-icons-group">
                    <li><a onclick="installForge('<?php echo $result['owner']['username'].'-'.$result['name']; ?>',this)"><i class="icon-download"></i>&nbsp;&nbsp;<span style="vertical-align: middle;">Install Module</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
</div>


<div class="col-md-6">

<?php
foreach ($results_right as $result) {
    ?>
    <div class="block task task-normal">
        <div class="row with-padding">
            <div class="col-sm-9">
                <div class="task-description">
                    <a href="#"><?php echo $result['name']; ?></a>
                    <i>by <?php echo $result['owner']['username']; ?></i>
                    <span style="height: 34px;"><?php if (isset($result['current_release']['metadata']['summary'])) {
                            if ($result['current_release']['metadata']['summary']!="UNKNOWN")
                                echo $result['current_release']['metadata']['summary'];
                        } ?></span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="task-info">
                    <span><span class="label label-info"><i class="icon-download4"></i> <span style="vertical-align: middle;"><?php echo number_format($result['downloads'],0,'.',','); ?></span></span></span>
                    <span>v<?php echo $result['current_release']['version']; ?> | <?php echo date('M j, Y',strtotime($result['current_release']['created_at'])); ?></span>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="pull-left">
                <span>Available to download</span>
            </div>
            <div class="pull-right">
                <ul class="footer-icons-group">
                    <li><a onclick="installForge('<?php echo $result['owner']['username'].'-'.$result['name']; ?>',this)"><i class="icon-download"></i>&nbsp;&nbsp;<span style="vertical-align: middle;">Install Module</span></a></li>
                </ul>
            </div>
        </div>
    </div>
<?php
}
    ?>

</div>
</div>
<script>
    function installForge(module,dom) {
        $.ajax({
            type: "POST",
            url: "/api/install_forge/",
            data: {
                module: module
            }
        }).done(function(msg) {
            if (msg=="true") {
                dom.removeAttribute('disabled');
                dom.innerHTML = '<i class="icon-checkmark"></i>&nbsp;&nbsp;<span style="vertical-align: middle;">Installed</span>';
            } else {
                dom.innerHTML = '<i class="icon-warning"></i>&nbsp;&nbsp;<span style="vertical-align: middle;">Error during install</span>';
            }
        });

        dom.removeAttribute('onclick');
        dom.setAttribute('disabled','disabled');
        dom.innerHTML = '<i class="icon-download"></i>&nbsp;&nbsp;<span style="vertical-align: middle;">Installing...</span>';
    }
</script>