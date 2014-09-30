<br />
<br />
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <br />
        <form action="/setup/step3/" role="form" method="post">
            <input type="hidden" name="title" value="<?php echo $title; ?>" />
            <input type="hidden" name="base_url" value="<?php echo $base_url; ?>" />

            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title"><i class="icon-server"></i> Setup</h6></div>
                <div class="panel-body">

                    <div class="block-inner text-danger">
                        <h6 class="heading-hr">Setup Database Connection<small class="display-block">The database will be created using the credentials provided.</small></h6>
                    </div>

                    <div class="form-group">
                        <label>Hostname</label>:</label>
                        <input id="database_hostname" name="database_hostname" type="text" class="form-control" value="" />
                    </div>
                    <div class="form-group">
                        <label>Username:</label>
                        <input id="database_username" name="database_username" type="text" class="form-control" value="" />
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input id="database_password" name="database_password" type="password" class="form-control" value="" />
                    </div>
                    <div class="form-group">
                        <label>Database Name:</label>
                        <input id="database_name" name="database_name" type="text" class="form-control" value="" />
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