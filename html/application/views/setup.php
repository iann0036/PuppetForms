<br />
<br />
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <br />
        <form action="/setup/step2/" role="form" method="post">
            <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title"><i class="icon-server"></i> Setup</h6></div>
                <div class="panel-body">

                    <div class="block-inner text-danger">
                        <h6 class="heading-hr">Setup Application Properties<small class="display-block">Please enter your application properties. You can change these at a later time.</small></h6>
                    </div>

                    <div class="form-group">
                        <label>Title:</label>
                        <input id="title" name="title" type="text" class="form-control" value="BARK" />
                    </div>
                    <div class="form-group">
                        <label>Base URL:</label>
                        <input id="base_url" name="base_url" type="text" class="form-control" value="<?php echo $base_url; ?>" />
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