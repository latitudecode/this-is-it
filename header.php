<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>

<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="illustration, animation, RISD, Portsmouth, New Hampshire, Artist, Young, Illustrator, animator" />
<meta name="description" content="I am a 2012 graduate from Rhode Island School of Design with a BFA in animation. I currently reside in my home state of New Hampshire, where every day I am overwhelmed with beautiful scenery and funny people." />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animation.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/demo.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style_common.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/media.css" />

<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100|Pathway+Gothic+One|Raleway:400,300,500|Raleway+Dots' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/shadowbox.css" />

<!-- scripts -->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/shadowbox.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/shadowbox-firefox.js"></script>

<!-- foundation script -->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.offcanvas.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/foundation/foundation.js"></script>

<?php wp_head(); ?>

wp_head();
?>  
</head>


<body>

<div class="wrapper">

<nav class="mobile-nav"> <!-- start navigation -->
        <a href="index.html"><h1 class="its-lily">My Portfolio</h1></a>
<div class="mobilenav">
<i class="fa fa-bars"></i>
<span>
<form name="menuform">
<select onchange="top.location.href = this.form.menu2.options[this.form.menu2.selectedIndex].value;
return false;" name="menu2">
<option selected="selected" value=""> </option>
<option value="<?php get_site_url(); ?>">home</option>
<option value="index.php?page_id=66">my work</option>
<option value="index.php?page_id=64">illustrations</option>
<option value="http://lilyfeatherston.com/wordpress/wp-content/uploads/2014/04/lily-featherston-resume-2013-1.zip">resume</option>
<option value="index.php?page_id=90">contact</option>
</select>
</form>
</span>
</nav>
</div>


<nav class="main-nav">
    <ul class="my-nav">
        <li><a href="index.php?page_id=66">my work</a></li>
        <li><a href="index.php?page_id=64">illustrations</a></li>
        <li class="logo"><a href="index.php">Lily Featherston</a></li>
        <li><a href="http://lilyfeatherston.com/wordpress/wp-content/uploads/2014/04/lily-featherston-resume-2013-1.zip">resume</a></li>
        <li><a href="index.php?page_id=90">contact</a></li>
    </ul>
</nav>


