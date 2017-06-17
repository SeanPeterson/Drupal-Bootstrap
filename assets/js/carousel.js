$(document).ready(function() {

  //active logos
  $logoOne = '<div class="col-md-4 col-sm-12"><a href="#x"><img class="client-logo" src="sites/all/themes/Drupal-Bootstrap/assets/images/client-1.png" alt="clients logo" /></a></div>';
  $logoTwo = '<div class="col-md-4 col-sm-12"><a href="#x"><img class="client-logo" src="sites/all/themes/Drupal-Bootstrap/assets/images/client-2.png" alt="clients logo" /></a></div>';
  $logoThree = '<div class="col-md-4 col-sm-12"><a href="#x"><img class="client-logo" src="sites/all/themes/Drupal-Bootstrap/assets/images/client-3.png" alt="clients logo" /></a></div>';

  //inactive logos
  $logoInactiveOne = '<div class="item" "><div class="row"></div><div class="col-md-4 col-sm-12"><a class="thumbnail" href="#x"><img class="client-logo" src="sites/all/themes/Drupal-Bootstrap/assets/images/client-1.png" alt="clients logo" /></a></div></div>';
  $logoInactiveTwo = '<div class="item" "><div class="row"><div class="col-md-4 col-sm-12"><a class="thumbnail" href="#x"><img class="client-logo" src="sites/all/themes/Drupal-Bootstrap/assets/images/client-2.png" alt="clients logo" /></a></div></div>';
  $logoInactiveThree = '<div class="item" "><div class="row"><div class="col-md-4 col-sm-12"><a class="thumbnail" href="#x"><img class="client-logo" src="sites/all/themes/Drupal-Bootstrap/assets/images/client-3.png" alt="clients logo" /></a></div></div>';

  //show 3 logos on slider for full tablet and up, only show one logo for mobile
  //NOTE: This should be expanded to include the case of screen resizing, however, I'm not covering it for this example site.
  if (screen.width >= 768) {
    //add active items
    $('#active-carousel > .row').append($logoOne);
    $('#active-carousel > .row').append($logoTwo);
    $('#active-carousel > .row').append($logoThree);

    //add inactive items
    $('#inactive-carousel > .row').append($logoOne);
    $('#inactive-carousel > .row').append($logoOne);
    $('#inactive-carousel > .row').append($logoOne);
  }
  else{
    //add active items
    $('#active-carousel > .row').append($logoOne);

    //add inactive items
    $('#inactive-carousel > .row').append($logoTwo);
    $('#itemList').append($logoInactiveThree);
    $('#itemList').append($logoInactiveOne);
    $('#itemList').append($logoInactiveOne);
    $('#itemList').append($logoInactiveOne);
  }

  $('#myCarousel').carousel({
  interval: 10000
  })
    
    $('#myCarousel').on('slid.bs.carousel', function() {
      //alert("slid");
  });
    
    
});

