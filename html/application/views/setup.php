<br />
<br />
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <br />
        <form action="/setup/step2/" role="form" method="post">
            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title"><i class="icon-enter3"></i> Setup</h6></div>
                <div class="panel-body">
                    <?php
                        if (count($failed_validations)==0) {
                            echo '<div class="alert alert-success fade in block"><i class="icon-checkmark-circle"></i> All required components are installed correctly.</div>';
                        } else {
                            echo '<div class="alert alert-danger fade in block"><i class="icon-warning"></i> The following components failed validation:<ul style="margin-left: 26px;">';
                            foreach ($failed_validations as $failed_validation) {
                                echo '<li>'.$failed_validation.'</li>';
                            }
                            echo '</ul></div>';
                        }
                    ?>
                    <div class="block-inner text-danger">
                        <h6 class="heading-hr">Setup Application Properties<small class="display-block">Please enter your application properties. You can change these at a later time.</small></h6>
                    </div>

                    <div class="form-group">
                        <label>Base URL:</label>
                        <input id="base_url" name="base_url" type="text" class="form-control" value="<?php echo $base_url; ?>" />
                    </div>

                    <div class="form-actions text-right">
                        <button<?php if (count($failed_validations)!=0) { echo ' disabled'; } ?> type="submit" class="btn btn-success">Next</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3">&nbsp;</div>
</div>