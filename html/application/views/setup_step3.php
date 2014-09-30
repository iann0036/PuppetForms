<br />
<br />
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <br />
        <form action="/setup/finish/" role="form" method="post">
            <input type="hidden" name="title" value="<?php echo $title; ?>" />
            <input type="hidden" name="base_url" value="<?php echo $base_url; ?>" />
            <input type="hidden" name="database_hostname" value="<?php echo $database_hostname; ?>" />
            <input type="hidden" name="database_username" value="<?php echo $database_username; ?>" />
            <input type="hidden" name="database_password" value="<?php echo $database_password; ?>" />
            <input type="hidden" name="database_name" value="<?php echo $database_name; ?>" />

            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title"><i class="icon-server"></i> Setup</h6></div>
                <div class="panel-body">

                    <div class="block-inner text-danger">
                        <h6 class="heading-hr">Setup Administrator Account<small class="display-block">Enter details for the administrator account. You can add more users after setup completion.</small></h6>
                    </div>

                    <div class="form-group">
                        <label>Admin Username:</label>
                        <input id="database_username" name="admin_username" type="text" class="form-control" value="" />
                    </div>
                    <div class="form-group">
                        <label>Admin Full Name:</label>
                        <input id="database_name" name="admin_name" type="text" class="form-control" value="" />
                    </div>
                    <div class="form-group">
                        <label>Admin Password:</label>
                        <input id="database_password" name="admin_password" type="password" class="form-control" value="" />
                    </div>

                    <div class="form-actions text-right">
                        <button type="submit" class="btn btn-success">Next</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3">&nbsp;</div>
</div>