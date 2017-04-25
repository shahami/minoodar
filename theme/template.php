<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         template.php
* @Package:        JqueryMobile
* @Action:        JqueryMobile theme for GetSimple CMS
*
*****************************************************/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page ---------------------------------->
  
    <meta charset="utf-8">
    <title><?php get_page_clean_title(); ?> &mdash; <?php get_site_name(); ?></title>
    
    <!-- Mobile Specific Metas ------------------------>
  
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Jquery Mobile ---------------------------------->

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php get_theme_url(); ?>/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php get_theme_url(); ?>/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php get_theme_url(); ?>/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php get_theme_url(); ?>/images/apple-touch-icon-114x114.png">
    
    <?php get_header(); ?>
</head>

<body>

    <!-- Jquery Mobile Page Layout ---------------------->
    
<div data-role="page" data-theme="a">
    <div data-role="header">
    <!--    <div data-role="navbar">
            <ul><?php get_navigation(return_page_slug()); ?></ul>
        </div>-->
        <h1><font size="4"><?php get_site_name(); ?></font></h1>
        <p align="center"><?php get_component('tagline');    ?></p>
    <div>
        <div data-role="navbar">
            <ul><?php get_navigation(return_page_slug()); ?></ul>
        </div>
        
        <nav >
        <ul data-role="listview" data-inset="true" data-theme="b"><?php get_navigation(return_page_slug()); ?></ul>
            </nav>
        
        <div data-role="content" data-theme="b">
            <div data-role="header" data-theme="b">
                <h3><?php get_page_title(); ?></h3></div><br>
                <?php get_page_content(); ?>
            
        </div><!-- content-->
            
        
        <div class ="four columns offset-by-two" style="text-align:center;">
            <?php get_site_name(); ?> &copy <?php echo date('Y'); ?>
        </div>
        <div class ="four columns offset-by-four" style="text-align:center;">
            <?php get_site_credits(); ?>
        </div>
        <?php get_footer(); ?>
        
    </div>
    

    
    </div>
    </div><!--Page-->

<!-- End Document ----------------------------------->

</body>
</html>