<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:    footer.inc.php
* @Package: GetSimple
* @Action:  CityLights theme for GetSimple CMS
*
*****************************************************/
?>
            <!-- site footer -->
            <footer class="footer">
                
                <!-- site credits -->
                <div class="credits">
                    <a href="<?php get_site_url(); ?>" style="font-size:14px;color:#4f4;"><?php get_site_name(); ?></a>
                </div>
                
                <?php get_footer(); ?>
                
            </footer>
            
        </div> <!-- main container -->
        
        <!-- include scripts -->
        <script src="<?php get_theme_url(); ?>/js/jquery.min.js"></script>
        <script src="<?php get_theme_url(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php get_theme_url(); ?>/js/navbar.js"></script>
        <script src="<?php get_theme_url(); ?>/js/background.js"></script>
        
    </body>
</html>