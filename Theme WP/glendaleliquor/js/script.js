jQuery(document).ready(function ($) {

  //fix header
  /*$(".top-line").sticky({
    topSpacing:0
  });*/

	var hash = $(location).attr('hash');
  if(hash =="#tab-2"){
    $('.cabinet .cabinet-menu li').removeClass('is-active');
    $('.cabinet .cabinet-menu li:nth-child(2)').addClass('is-active');
    $('.cabinet .cabinet-item').hide();
    $('.cabinet .cabinet-item:nth-child(2)').show();

  }

  $('.products').each(function(index) {
    $(this).addClass('products-' + (index + 1));
  });

  //slider
  var swiperHome = new Swiper(".home-banner-slider", {
    spaceBetween: 10,
    pagination: {
      el: ".home-pagination",
      clickable: true,
    },
  });

  //slider
  var swiperProductCategory1 = new Swiper(".product-category-slider-1", {
    slidesPerView: 2,
    slidesPerGroup: 2,
    spaceBetween: 10,
    pagination: {
      el: ".product-category-pagination-1",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        slidesPerGroup: 2,
      },
      576: {
        slidesPerView: 3,
        slidesPerGroup: 2,
      },
      768: {
        slidesPerView: 4,
        slidesPerGroup: 4,
      },
      991: {
        slidesPerView: 5,
        slidesPerGroup: 5,
      },
      1280: {
        slidesPerView: 6,
        slidesPerGroup: 6,
      },
      1400: {
        slidesPerView: 7,
        slidesPerGroup: 7,
      }
    }
  });
  var swiperProductCategory2 = new Swiper(".product-category-slider-2", {
    slidesPerView: 1,
    slidesPerGroup: 1,
    spaceBetween: 10,
    pagination: {
      el: ".product-category-pagination-2",
      clickable: true,
    },

  });

  //slider
  var swiperProduct1 = new Swiper(".products-1 .product-slider-1", {
    slidesPerView: "auto",
    spaceBetween: 40,
    navigation: {
      nextEl: ".products-1 .product-next-1",
      prevEl: ".products-1 .product-prev-1",
    },
    breakpoints: {
      320: {
        spaceBetween: 20,
      },
      576: {
        spaceBetween: 40,
      },
    }
  });

  //slider
  var swiperProduct2 = new Swiper(".products-2 .product-slider-1", {
    slidesPerView: "auto",
    spaceBetween: 40,
    navigation: {
      nextEl: ".products-2 .product-next-1",
      prevEl: ".products-2 .product-prev-1",
    },
    breakpoints: {
      320: {
        spaceBetween: 20,
      },
      576: {
        spaceBetween: 40,
      },
    }
  });

  //slider
  var swiperProduct3 = new Swiper(".products-3 .product-slider-1", {
    slidesPerView: "auto",
    spaceBetween: 40,
    navigation: {
      nextEl: ".products-3 .product-next-1",
      prevEl: ".products-3 .product-prev-1",
    },
    breakpoints: {
      320: {
        spaceBetween: 20,
      },
      576: {
        spaceBetween: 40,
      },
    }
  });

  //slider
  var swiperTestimonials = new Swiper(".testimonials-slider", {
    slidesPerView: 3,
    spaceBetween: 40,
    navigation: {
      nextEl: ".testimonials-next",
      prevEl: ".testimonials-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1.12,
        spaceBetween: 20,
      },
      576: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      991: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1280: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1400: {
        slidesPerView: 3,
        spaceBetween: 40,
      }
    }
  });

  //slider
  var swiperProductP = new Swiper(".products .product-slider-2", {
    slidesPerView: "auto",
    spaceBetween: 40,
    navigation: {
      nextEl: ".products .product-next-2",
      prevEl: ".products .product-prev-2",
    },
    breakpoints: {
      320: {
        spaceBetween: 20,
      },
      576: {
        spaceBetween: 40,
      },
    }
  });

  //hover
  $(".item-3x .item").hover(function() {
    $(this).find('.hide').slideDown();
  }, function() {
    $(this).find('.hide').slideUp();
  });



  //sub-menu open/close - mob-menu
  $(document).on('click', '.mob-menu li:first-child>a', function (e){
    e.preventDefault();
    let item = $(this).closest('li').find('.sub-menu');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });



  $(document).on('click', '.add-coupon', function (e){
    e.preventDefault();

    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      $('.coupon').slideDown().addClass('is-open');
    }else{
      $('.coupon').slideUp().removeClass('is-open');
    }
  });

  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('html').addClass('is-menu');
    }, 100);

  });
	
	
	  /* open order*/
  $(document).on('click', '.cabinet .order-row-head .data-1', function (e){
    e.preventDefault();
	let item = $(this).closest('.order');
	  
	  item.toggleClass('is-open');
	  if(item.hasClass('is-open')){
		  item.find('.wrap-order').slideDown();
	  }else{
		  item.find('.wrap-order').slideUp();
	  }
  

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $.fancybox.close();
    $('html').removeClass('is-menu');
  });

  //hide cookies
  $(document).on('click', '.close-fix', function (e){
    e.preventDefault();
    $('.fix-block').hide();
  });

  //range slider
  $(".range-slider").ionRangeSlider({
    min: 0,
    max: 5000,
    from: 2499,
    prefix: "$",
    step: 1,
    skin: "round"
  });

  //select
  $('.select-block select').niceSelect();

  //like
  $(document).on('click', '.like', function (e){
    e.preventDefault();
    $(this).toggleClass('is-active');

    if($(this).hasClass('is-active')){
      $(this).find('i').addClass('fa-solid').removeClass('fa-light')
    }else{
      $(this).find('i').removeClass('fa-solid').addClass('fa-light')
    }
  });

  //show to scroll
  $(window).scroll(function () {
    if($(this).scrollTop() > $(this).height()) {
      $('.scroll-up').addClass('is-active')
    } else {
      $('.scroll-up').removeClass('is-active')
    }
  });

  //scroll up
  $(document).on('click', '.scroll-up a', function (e) {
    $('html, body').stop().animate({scrollTop:0},'slow', 'swing');
  });

  //fix block
  if(window.innerWidth < 576){
    $(".mob-cart").sticky({
      topSpacing:20
    });
  }

  //slider
  var swiperImg1 = new Swiper(".slider-img-1", {});
  var swiperImg2 = new Swiper(".slider-img-2", {});

  //tabs
  $(document).on('click', '.tabs-menu li', function (e){
    e.preventDefault();
    let item = $(this),
      itemIndex = item.index() + 1;
    $(this).closest('.tabs').find('.is-active').removeClass('is-active');
    $(item).addClass('is-active')
    $(this).closest('.tabs').find('.tab-content').find('.tab-item').hide();
    $(this).closest('.tabs').find('.tab-content').find(".tab-item:nth-child(" + itemIndex +")").show()

  })



  if($('#billing_phone').length > 0){
    let input = document.querySelector("#billing_phone");
    const iti = window.intlTelInput(input, {
      initialCountry: "us",
      strictMode: true,
      loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/utils.js",
      separateDialCode: true,
    });

    const countryCode = $("#country_code").val();
    if (countryCode) {
      iti.setCountry(countryCode);
    }
    input.addEventListener("countrychange", function() {
      const selectedCountryData = iti.getSelectedCountryData();
      $("#country_code").val(selectedCountryData.iso2);
    });
  }
  if($('.tel').length > 0){
    let input = document.querySelector(".tel");
    const iti = window.intlTelInput(input, {
      initialCountry: "us",
      strictMode: true,
      loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/utils.js",
      separateDialCode: true,
    });

    const countryCode = $("#country_code").val();
    if (countryCode) {
      iti.setCountry(countryCode);
    }
    input.addEventListener("countrychange", function() {
      const selectedCountryData = iti.getSelectedCountryData();
      $("#country_code").val(selectedCountryData.iso2);
    });
  }
  if($('#account_phone').length > 0){
    let input = document.querySelector("#account_phone");
    const iti = window.intlTelInput(input, {
      initialCountry: "us",
      strictMode: true,
      loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/utils.js",
      separateDialCode: true,
    });
    const countryCode = $("#country_code").val();
    if (countryCode) {
      iti.setCountry(countryCode);
    }
    input.addEventListener("countrychange", function() {
      const selectedCountryData = iti.getSelectedCountryData();
      $("#country_code").val(selectedCountryData.iso2);
    });
  }
  if($('.tel-shipp').length > 0){
    let input = document.querySelector(".tel-shipp");
    const iti = window.intlTelInput(input, {
      initialCountry: "us",
      strictMode: true,
      loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/js/utils.js",
      separateDialCode: true,
    });

    const countryCode = $("#shipp_country_code").val();
    if (countryCode) {
      iti.setCountry(countryCode);
    }
    input.addEventListener("countrychange", function() {
      const selectedCountryData = iti.getSelectedCountryData();
      $("#shipp_country_code").val(selectedCountryData.iso2);
    });
  }
  //show/hide password
  $(document).on('click', '.password-checkbox a', function(e){
    let item = $(this).closest('.input-wrap');
    e.preventDefault();
    item.toggleClass('is-show');
    if(item.hasClass('is-show')){
      item.find('input').attr('type', 'text');
    }else{
      item.find('input').attr('type', 'password');
    }
  });

	$('.cabinet-menu li:last-child').addClass('logout');
  //tabs cabinet
  $(document).on('click', '.cabinet-menu li', function (e){
    let item = $(this).closest('li');

    if(!item.hasClass('logout')){
      e.preventDefault();
      let itemIndex = item.index() + 1;
      $(this).closest('.cabinet-menu').find('.is-active').removeClass('is-active');
      $(this).closest('li').addClass('is-active')
      $(this).closest('.tabs-cabinet').find('.cabinet-content').find('.cabinet-item').hide();
      $(this).closest('.tabs-cabinet').find('.cabinet-content').find(".cabinet-item:nth-child(" + itemIndex +")").show();

      if(window.innerWidth < 768){
        $('.cabinet').addClass('is-open');
      }
    }
  });

  //fancybox
  $(".fancybox").fancybox({
    touch:false,
    autoFocus:false,
    afterShow : function(e){
      if($('.tel-1').length > 0){
        var input = document.querySelector(".tel-1");
        window.intlTelInput(input, {
          localizedCountries: { 'ua': 'Ukraine' },
          preferredCountries: ['us'],
          InitialCountry: "",
          separateDialCode: true,

        });
      }
      if($('.tel-2').length > 0){
        var input = document.querySelector(".tel-2");
        window.intlTelInput(input, {
          localizedCountries: { 'ua': 'Ukraine' },
          preferredCountries: ['us'],
          InitialCountry: "",
          separateDialCode: true,

        });
      }
    },
  });

  //stars review
  $(document).on('click', '.input-wrap-stars input', function (e){
    let item = ($(this).index() + 2 ) / 2;
    $(this).closest('div').removeClass();
    $(this).closest('div').addClass("item-"+ item + "")
  });

  /*  $.fancybox.open( $('#confirm-popup'), {
      touch:false,
      autoFocus:false,
      clickSlide : 'false',
      clickOutside : 'false',
    });*/

  //mob cabinet
  $(document).on('click', '.cabinet .breadcrumb a', function (e){
    e.preventDefault();
    $('.cabinet').removeClass('is-open');
  });

  //slider
  var swiperImg = new Swiper(".img-slider", {
    spaceBetween: 10,
    pagination: {
      el: ".img-pagination",
      clickable: true,
    },
  });

  const localeEn = {
    days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
    daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
    months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    today: 'Today',
    clear: 'Clear',
    dateFormat: 'MM/dd/yyyy',
    timeFormat: 'hh:mm aa',
    firstDay: 0
  };

  new AirDatepicker('.date-1', {
    locale: localeEn,
    autoClose: true,
  });


  //cabinet
  $(document).on('click', '.del', function (e){
    e.preventDefault();
    $(this).closest('.address-item').hide();
  });
});
