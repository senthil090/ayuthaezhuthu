<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"/>
<?php wp_enqueue_script("supermanquery"); ?>
<?php wp_enqueue_script("bootstrap"); ?>
<?php wp_enqueue_script("AeFScript"); ?>
<?php wp_enqueue_script("materialkit"); ?>
<?php wp_enqueue_style("bootstrap_style"); ?>
<?php wp_enqueue_style("fa_style"); ?>
<?php wp_enqueue_style("materialkit"); ?>
<?php wp_head(); ?>
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.om/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

<body>
    <div  class="header">
        <div class="upperHeader">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                
            </div>
        </div>
    </div>

    <div class="mainMenu">
    <nav class="navbar navbar-default redbackground" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="logoImage" src="http://localhost/wordpress/wp-content/themes/AyuthaEzhuthu/images/logo.jpg"/>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a>Home</a></li>
                    <li><a>About US</a></li>
                    <li><a>Timeline</a></li>
                    <li><a>Gallery</a></li>
                    <li><a>Blog</a></li>
                    <li><a>Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Join Us</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Donate</a></li>
                </ul>
            </div>
        </div>
    </nav>    
    </div>
