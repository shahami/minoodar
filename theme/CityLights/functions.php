<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:    functions.php
* @Package: GetSimple
* @Action:  CityLights theme for GetSimple CMS
*
*****************************************************/

/**
 * CityLights Settings
 *
 * This defines variables based on the theme plugin's settings
 *
 * @return bool
 */
function cl_settings() {
    $file = GSDATAOTHERPATH . 'CityLightsSettings.xml';
    if (file_exists($file)) {
        $settings = getXML($file);
        return $settings;
    } else {
        return false;
    }
}

/**
 * Get Background Style
 *
 * Echos theme background style from the theme's plugin settings.  If no image provided, use default theme image.
 */
function cl_get_bg_image_style($echo=true) {
    global $cl_settings;
    
    if ($cl_settings && isset($cl_settings->background)) {
        $img = $cl_settings->background;
    }
    else {
        $img = get_theme_url(false) . '/images/background.jpg';
    }
    
    $bg = "background-image:url('$img');";
    
    if ($echo) {
        echo $bg;
        return;
    }
    else {
        return $bg;
    }
}

/**
 * Get Logo
 *
 * Echos html for site logo.  If no logo is configured, uses site name.
 */
function cl_get_logo() {
    global $cl_settings;
    
    if ($cl_settings && isset($cl_settings->logo)) {
        echo '<img src="' . $cl_settings->logo . '">';
    }
    else {
        get_site_name();
    }
}

/**
 * Get Blurb
 *
 * Echos html for blurb (i.e. contents of article with slug "blurb", otherwise use tagline component.
 */
function cl_get_blurb() {
    
    $blurb = '';
    if (file_exists(GSDATAPAGESPATH . 'blurb.xml')) {
        $blurb = returnPageContent('blurb');
    }
    
    if ($blurb) {
        echo $blurb;
    }
    else {
        echo '<p class="splash-text">';
        get_component('tagline');
        echo '</p>';
    }
}

/**
 * Get Social Media Buttons
 *
 * Echos html for social media buttons.  If no buttons are configured, echos nothing.
 */
function cl_get_social_buttons() {
    global $cl_settings;
    
    if (!$cl_settings) return;
    
    $soc_services = array(
        'facebook',
        'googleplus',
        'twitter',
        'linkedin',
        'pinterest',
        'youtube',
        'vimeo'
    );
    
    $soc_used = false;
    
    foreach($soc_services as $soc) {
        if (isset($cl_settings->$soc)) {
            if (!$soc_used) {
                $soc_used = true;
                echo '<div class="social-icons">';
            }
            
            echo '<a href="' . $cl_settings->$soc . '"><img src="' . get_theme_url(false) . '/images/' . $soc . '.png"></a>';
        }
    }
    
    if ($soc_used) echo '</div><hr />';
}

/**
 * Get Calendar Widget
 *
 * Echos html for the calendar widget.  If no account provided, echos nothing.
 */
function cl_get_calendar_widget() {
    global $cl_settings;
    
    if (!$cl_settings || !isset($cl_settings->calendar)) return;
    
    $title = 'Calendar';
    if (isset($cl_settings->calendar_title)) $title = $cl_settings->calendar_title;
    
    ?>
    <div class="calendar-widget">
        <h3><?php echo $title; ?></h3>
        <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=250&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=<?php echo urlencode($cl_settings->calendar); ?>&amp;color=%23BE6D00" width="220" height="250" frameborder="0" scrolling="no"></iframe>
    </div>
    <hr />
    <?php
}
?>
