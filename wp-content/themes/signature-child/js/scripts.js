jQuery(document).ready(function($) {

  let heroHt = $('img.hero-img').height();
  console.log(heroHt);
  $('#hero-filter').height(heroHt);

  const updateContainer = () => {
    
  }

  $(window).resize(function() {
    updateContainer();
  });

});