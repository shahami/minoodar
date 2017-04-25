/****************************************************
*
* @File:    background.js
* @Package: GetSimple
* @Action:  CityLights theme for GetSimple CMS
*
*****************************************************/
$(function() {
  // workaround for android/iOS URL bars hiding and changing size, causing a visible jerk
  if(typeof window.orientation !== 'undefined') {
    // we are on a mobile device
    var html = $('html');
    var bg = $('#background');
    // make current height a fixed value
    html.css('height', html.height());
    bg.css('height', bg.height());
    // add listener for portrait/landscape changes
    window.matchMedia("(orientation:landscape)").addListener(function(query) {
      var h = $(window).height();
      html.css('height', h);
      bg.css('height', h*1.2);
    });
  }
});
