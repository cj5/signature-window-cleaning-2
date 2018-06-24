jQuery(document).ready(function($) {

  let heroHt = $('img.hero-img').height()
  let headerHt = $('header').height()
  let headerImgHt = $('#header-img').height();
  console.log(heroHt)
  $('#hero-filter').height(heroHt)
  $('#hero-fill').height(heroHt - headerHt)
  $('#header-img-filter').height(headerImgHt)
  $('#header-img-fill').height(headerImgHt - headerHt)

  const navResize = () => {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 110) {
        $('header').height(70)
        $('header .logo').height(70)
        $('header .logo img').css('max-width', 200)
        $('header nav').height(70)
      } else {
        $('header').height(110)
        $('header .logo').height(110)
        $('header .logo img').css('max-width', 250)
        $('header nav').height(110)
      }
    })
  }
  navResize()

  const updateContainer = () => {
    
  }

  $(window).resize(function() {
    updateContainer()
  })

})