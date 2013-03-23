/* Custom styles */

jQuery(document).ready(function($) {
  $('.main-navigation ul.nav-menu,.main-navigation div.nav-menu > ul').superfish({
    animation: { height: 'show' }
  });
});

$(document).ready(function() {
  $('ul.sf-menu').superfish();
});