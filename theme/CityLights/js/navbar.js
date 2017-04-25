/****************************************************
*
* @File:    navbar.js
* @Package: GetSimple
* @Action:  CityLights theme for GetSimple CMS
*
*****************************************************/
$(function() {
  
  function setTransparency() {
    if ($(document).scrollTop() > 0) {
      $('.navbar-fade').removeClass('navbar-transparent');
    }
    else {
      $('.navbar-fade').addClass('navbar-transparent');
    }
  }
  
  setTransparency();
  
  $(document).on('scroll', setTransparency);
  
});