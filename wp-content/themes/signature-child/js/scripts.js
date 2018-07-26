jQuery(document).ready(function($) {

  $('body').css('overflow-y', 'hidden');
  const w = $(window).width();    
  $('body').css('overflow-y', 'visible');

  let heroHt = $('img.hero-img').height()
  let headerHt = $('header').height()
  let headerImgHt = $('#header-img').height()
  $('#hero-filter').height(heroHt)
  if (w <= 768) {
    $('#hero-fill').height(heroHt)
    $('#header-img-filter, #header-img-fill, #header-img').css('top', headerHt)
    $('#header-img-fill').css('position', 'static')
  } else {
    $('#hero-fill').height(heroHt - headerHt)
  }
  $('#header-img-filter').height(headerImgHt)
  $('#header-img-fill').height(headerImgHt - headerHt)
  if (w <= 420) {
    $('#header-img-fill').height(headerImgHt)
  }
  window.onload = () => {
    let heroHt = $('img.hero-img').height()
    let headerHt = $('header').height()
    let headerImgHt = $('#header-img').height()
    $('#hero-filter').height(heroHt)
    if (w <= 768) {
      $('#hero-fill').height(heroHt)
      $('#header-img-filter, #header-img-fill, #header-img').css('top', headerHt)
      $('#header-img-fill').css('position', 'static')
    } else {
      $('#hero-fill').height(heroHt - headerHt)
    }
    $('#header-img-filter').height(headerImgHt)
    $('#header-img-fill').height(headerImgHt - headerHt)
    if (w <= 420) {
      $('#header-img-fill').height(headerImgHt)
    }
  }

  $('#navicon').click(function() {
    $('#mobile-nav').fadeIn(200)
  })
  $('#close').click(function() {
    $('#mobile-nav').fadeOut(200)
  })

  const navResize = () => {
    if (w > 992) {
      $(window).scroll(function() {
        if ($(this).scrollTop() > 110) {
          const headerGreater_992 = 70
          $('header').height(headerGreater_992)
          $('.header-wrapper').height(headerGreater_992)
          $('header .logo').height(headerGreater_992)
          $('header .logo img').css('max-width', 200)
          $('header nav').height(headerGreater_992)
        } else {
          const headerLess_992 = 90
          $('header').height(headerLess_992)
          $('.header-wrapper').height(headerLess_992)
          $('header .logo').height(headerLess_992)
          $('header .logo img').css('max-width', 250)
          $('header nav').height(headerLess_992)
        }
      })
    }
  }
  navResize()

  const updateContainer = () => {
    $('body').css('overflow-y', 'hidden');
    const w = $(window).width();    
    $('body').css('overflow-y', 'visible');

    let heroHt = $('img.hero-img').height()
    let headerHt = $('header').height()
    let headerImgHt = $('#header-img').height()
    $('#hero-filter').height(heroHt)
    if (w <= 768) {
      $('#hero-fill').height(heroHt)
      $('#header-img-filter, #header-img-fill, #header-img').css('top', headerHt)
      $('#header-img-fill').css('position', 'static')
    } else {
      $('#hero-fill').height(heroHt - headerHt)
    }
    $('#header-img-filter').height(headerImgHt)
    $('#header-img-fill').height(headerImgHt - headerHt)
    if (w <= 420) {
      $('#header-img-fill').height(headerImgHt)
    }
  }

  $(window).resize(function() {
    updateContainer()
  })

})