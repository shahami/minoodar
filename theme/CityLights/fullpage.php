<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
    /****************************************************
    *
    * @File:    fullpage.php
    * @Package: GetSimple
    * @Action:  CityLights theme for GetSimple CMS
    *
    *****************************************************/
    
    # Get theme settings from plugin
    $cl_settings = cl_settings();
    
    # Include the header partial template
    include('header.inc.php');
?>
            <!-- primary page content -->
            <article class="article">
                
                <h1><?php get_page_title(); ?></h1>
                <?php get_page_content(); ?>
                
            </article>
        
<?php
    # Include the footer partial template
    include('footer.inc.php');
?>