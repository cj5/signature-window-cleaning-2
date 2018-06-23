jQuery(document).ready(function($) {

  let heroHt = $('img.hero-img').height();
  console.log(heroHt);
  $('#hero-filter').height(heroHt);

  $(window).scroll(function() {
    if ($(this).scrollTop() > 110) {
      $('header').height(70);
      $('header .logo').height(70);
      $('header .logo img').css('max-width', 200);
      $('header nav').height(70);
    } else {
      $('header').height(110);
      $('header .logo').height(110);
      $('header .logo img').css('max-width', 250);
      $('header nav').height(110);
    }
  });

  const updateContainer = () => {
    
  }

  $(window).resize(function() {
    updateContainer();
  });

});