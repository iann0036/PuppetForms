<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    Created by Ian Mckay (http://ian.mn) - released under the MIT license
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>BARK</title>

    <link href="<?php echo $this->config->base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->config->base_url(); ?>css/londinium-theme.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->config->base_url(); ?>css/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->config->base_url(); ?>css/icons.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/charts/sparkline.min.js"></script>

    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/uniform.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/inputmask.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/autosize.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/inputlimit.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/listbox.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/multiselect.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/validate.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/tags.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/switch.min.js"></script>

    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/uploader/plupload.full.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/uploader/plupload.queue.min.js"></script>

    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/forms/wysihtml5/toolbar.js"></script>

    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/globalize/globalize.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/globalize/globalize.culture.de-DE.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/globalize/globalize.culture.ja-JP.js"></script>

    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/interface/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/interface/fancybox.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/interface/moment.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/interface/mousewheel.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/interface/jgrowl.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/interface/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/interface/colorpicker.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/interface/fullcalendar.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/plugins/interface/timepicker.min.js"></script>

    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->config->base_url(); ?>js/application_blank.js"></script>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $this->config->base_url(); ?>images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->config->base_url(); ?>images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->config->base_url(); ?>images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $this->config->base_url(); ?>images/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $this->config->base_url(); ?>images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $this->config->base_url(); ?>images/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" href="<?php echo $this->config->base_url(); ?>images/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php echo $this->config->base_url(); ?>images/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo $this->config->base_url(); ?>images/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">

</head>

<body class="full-width page-condensed">

<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="<?php echo $this->config->base_url(); ?>images/logo.png" alt="BARK"></a>
    </div>
</div>

<div class="login-wrapper">
    <form action="#" role="form">
        <div class="popup-header">
            <a href="#" class="pull-left"><i class="icon-user-plus"></i></a>
            <span class="text-semibold">User Login</span>
            <div class="btn-group pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                <ul class="dropdown-menu icons-right dropdown-menu-right">
                    <li><a href="#"><i class="icon-people"></i> Change user</a></li>
                    <li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
                    <li><a href="#"><i class="icon-support"></i> Contact admin</a></li>
                    <li><a href="#"><i class="icon-wrench"></i> Settings</a></li>
                </ul>
            </div>
        </div>
        <div class="well">
            <div class="form-group has-feedback">
                <label>Username</label>
                <input type="text" class="form-control" placeholder="Username">
                <i class="icon-users form-control-feedback"></i>
            </div>

            <div class="form-group has-feedback">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Password">
                <i class="icon-lock form-control-feedback"></i>
            </div>

            <div class="row form-actions">
                <div class="col-xs-6">
                    <div class="checkbox checkbox-success">
                        <label>
                            <input type="checkbox" class="styled">
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="col-xs-6">
                    <button type="submit" class="btn btn-warning pull-right"><i class="icon-menu2"></i> Sign in</button>
                </div>
            </div>
        </div>
    </form>
</div>
