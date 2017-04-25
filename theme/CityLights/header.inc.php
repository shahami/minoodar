<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:    header.inc.php
* @Package: GetSimple
* @Action:  CityLights theme for GetSimple CMS
*
*****************************************************/

    $is_home = (get_page_slug(FALSE) == 'index');

?><!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        
        <title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
        
        <link href="<?php get_theme_url(); ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php get_theme_url(); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="<?php get_theme_url(); ?>/style.css" rel="stylesheet">
        
        <?php get_header(); ?>
        
    </head>
    <body id="<?php get_page_slug(); ?>">
        
        <div id="background" style="<?php cl_get_bg_image_style(); ?>">
        </div>
        
        <!-- main navigation -->
        <nav class="navbar navbar-default navbar-fixed-top<?php if ($is_home) { echo ' navbar-fade navbar-transparent'; } ?>">
            <div class="container-fluid">
                <div class="navbar-header">
                    
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- logo -->
                    <a class="navbar-brand" href="<?php get_site_url(); ?>"><?php cl_get_logo(); ?></a>
                    
                </div>
                
                <!-- nav links -->
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <?php get_navigation(get_page_slug(FALSE)); ?>
                    </ul>
                </div>
                
            </div>
        </nav>
        
<?php
    if ($is_home) {
?>
        <!-- splash -->
        <div class="container splash">
            <div class="splash-spacer">
            </div>
            <div class="splash-logo">
                <?php cl_get_logo(); ?>
            </div>
            <div class="splash-blurb">
                <?php cl_get_blurb(); ?>
            </div>
        </div>
<?php
    } else {
?>
        <div class="container spacer">
        </div>
<?php
    }
?>
        
        <div class="container main">
