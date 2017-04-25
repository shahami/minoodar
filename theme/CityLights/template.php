<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
    /****************************************************
    *
    * @File:    template.php
    * @Package: GetSimple
    * @Action:  CityLights theme for GetSimple CMS
    *
    *****************************************************/
    
    # Get theme settings from plugin
    $cl_settings = cl_settings();
    
    # Include the header partial template
    include('header.inc.php');
?>
            <div class="row">
                <div class="col-sm-8">
                    <!-- primary page content -->
                    <article class="article">
                        
                        <h1><?php get_page_title(); ?></h1>
                        <?php get_page_content(); ?>
                        
                    </article>
                </div>
                
                <div class="col-sm-4">
                    <!-- sidebar -->
                    <div class="sidebar">
                        <?php cl_get_social_buttons(); ?>
                        <?php cl_get_calendar_widget(); ?>
                        <?php get_component('sidebar'); ?>
                    </div>
                </div>
            
            </div>
        
<?php
    # Include the footer partial template
    include('footer.inc.php');
?>