<br />
<br />
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <br />
        <form action="/setup/commit/" role="form" method="post">
            <input type="hidden" name="base_url" value="<?php echo $base_url; ?>" />
            <input type="hidden" name="database_hostname" value="<?php echo $database_hostname; ?>" />
            <input type="hidden" name="database_username" value="<?php echo $database_username; ?>" />
            <input type="hidden" name="database_password" value="<?php echo $database_password; ?>" />
            <input type="hidden" name="database_name" value="<?php echo $database_name; ?>" />
            <input type="hidden" name="database_name" value="<?php echo $admin_username; ?>" />
            <input type="hidden" name="database_name" value="<?php echo $admin_name; ?>" />
            <input type="hidden" name="database_name" value="<?php echo $admin_password; ?>" />


            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title"><i class="icon-enter3"></i> Setup</h6></div>
                <div class="panel-body">

                    <div class="block-inner text-danger">
                        <h6 class="heading-hr">Confirmation<small class="display-block">Confirm all details are correct before finalizing installation.</small></h6>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Base URL:</label>
                        <div class="col-sm-8">
                            <p class="form-control-static"><?php echo $base_url; ?></p>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <hr />
                    <p>&nbsp;</p>
                    <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Database Hostname:</label>
                        <div class="col-sm-8">
                            <p class="form-control-static"><?php echo $database_hostname; ?></p>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Database Username:</label>
                        <div class="col-sm-8">
                            <p class="form-control-static"><?php echo $database_username; ?></p>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Database Password:</label>
                        <div class="col-sm-8">
                            <p class="form-control-static"><?php echo str_repeat("*",strlen($database_password)); ?></p>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Database Name:</label>
                        <div class="col-sm-8">
                            <p class="form-control-static"><?php echo $database_name; ?></p>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <hr />
                    <p>&nbsp;</p>
                    <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Admin Username:</label>
                        <div class="col-sm-8">
                            <p class="form-control-static"><?php echo $admin_username; ?></p>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Admin Full Name:</label>
                        <div class="col-sm-8">
                            <p class="form-control-static"><?php echo $admin_name; ?></p>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="form-group">
                        <label class="col-sm-4 control-label text-right">Admin Password:</label>
                        <div class="col-sm-8">
                            <p class="form-control-static"><?php echo str_repeat("*",strlen($admin_password)); ?></p>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <div class="form-actions text-right">
                        <button type="submit" class="btn btn-success">Finish</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3">&nbsp;</div>
</div>