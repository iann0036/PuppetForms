<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    Created by Ian Mckay (http://ian.mn) - released under the MIT license
    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>PuppetForms</title>

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

<body<?php if(isset($setup)) echo " class=\"full-width\""; ?>>

<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="<?php echo $this->config->base_url(); ?>images/logo.png" alt="BARK"></a>
    </div>

    <?php if(!isset($setup)) { ?>
    <ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
        <li class="user dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">
                <!--<img src="http://placehold.it/300" alt="">-->
                <span>Ian Mckay</span>
                <i class="caret"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-right icons-right">
                <li><a href="/profile/"><i class="icon-user"></i> Profile</a></li>
                <li><a href="/logout/"><i class="icon-exit"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
    <?php } ?>
</div>

<div class="page-container">

    <?php if(!isset($setup)) { ?>
<div class="sidebar">
    <div class="sidebar-content">
        <ul class="navigation">
            <?php $last_crumb = end($breadcrumbs); reset($breadcrumbs); ?>
            <li<?php if ($last_crumb[0]=="Dashboard") echo " class=\"active\""; ?>><a href="/""><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
            <li<?php if ($last_crumb[0]=="Nodes") echo " class=\"active\""; ?>><a href="/nodes/"><span>Nodes</span> <i class="icon-grid"></i></a></li>
            <li<?php if ($last_crumb[0]=="Reports") echo " class=\"active\""; ?>><a href="/reports/"><span>Reports</span> <i class="icon-insert-template"></i></a></li>
            <li<?php if ($last_crumb[0]=="Facts") echo " class=\"active\""; ?>><a href="/facts/"><span>Facts</span> <i class="icon-question"></i></a></li>
            <li<?php if ($last_crumb[0]=="Modules") echo " class=\"active\""; ?>><a href="/modules/"><span>Modules</span> <i class="icon-puzzle"></i></a></li>
            <li<?php if ($last_crumb[0]=="Settings") echo " class=\"active\""; ?>><a href="/settings/"><span>Settings</span> <i class="icon-cogs"></i></a></li>
        </ul>

    </div>
</div>
    <?php } ?>

<div class="page-content">
    <?php if(!isset($setup)) { ?>
    <div class="page-header">
        <div class="page-title">
            <h3><?php echo $last_crumb[0]; ?> <small><?php echo $description; ?></small></h3>
        </div>
    </div>

    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <?php
                for ($i=0; $i<count($breadcrumbs)-1; $i++) {
                    echo "<li><a href=\"".$breadcrumbs[$i][1]."\">".$breadcrumbs[$i][0]."</a></li>";
                }
                echo "<li><a href=\"".$last_crumb[1]."\">".$last_crumb[0]."</a></li>";
            ?>
        </ul>
    </div>
    <?php } ?>