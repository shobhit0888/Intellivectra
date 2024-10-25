(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($('#spinner').length > 0) {
        $('#spinner').removeClass('show');
      }
    }, 1);
  };
  spinner();


  // Initiate the wowjs
  new WOW().init();


  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $('.navbar').addClass('sticky-top shadow-sm');
    } else {
      $('.navbar').removeClass('sticky-top shadow-sm');
    }
  });

  // Dropdown on mouse hover
  const $dropdown = $(".dropdown");
  const $dropdownToggle = $(".dropdown-toggle");
  const $dropdownMenu = $(".dropdown-menu");
  const showClass = "show";

  // $(window).on("load resize", function() {
  //     if (this.matchMedia("(min-width: 992px)").matches) {
  //         $dropdown.hover(
  //         function() {
  //             const $this = $(this);
  //             $this.addClass(showClass);
  //             $this.find($dropdownToggle).attr("aria-expanded", "true");
  //             $this.find($dropdownMenu).addClass(showClass);
  //         },
  //         function() {
  //             const $this = $(this);
  //             $this.removeClass(showClass);
  //             $this.find($dropdownToggle).attr("aria-expanded", "false");
  //             $this.find($dropdownMenu).removeClass(showClass);
  //         }
  //         );
  //     } else {
  //         $dropdown.off("mouseenter mouseleave");
  //     }
  // });
  // $('.dropdown-toggle').navbarDropdown({trigger: 'mouseover'});

  // $('.dropdown-toggle').on('mouseover', function(){

  //     const $this = $(this);
  //     $this.addClass(showClass);
  //     $this.attr("aria-expanded", "true");
  //     $($dropdownMenu).addClass(showClass);

  // });

  // $('.dropdown-toggle').on('mouseleave', function(){

  //     const $this = $(this);
  //     $this.removeClass(showClass);
  //     $this.attr("aria-expanded", "false");
  //     $this.parent($dropdownMenu).removeClass(showClass);
  //     // $($dropdownMenu).removeClass(showClass);

  // });


  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000
  });


  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function () {
    $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
    return false;
  });


  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1500,
    dots: true,
    loop: true,
    center: true,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 1
      },
      992: {
        items: 1
      }
    }
  });

  const testimonial = $('.owl-stage');


  // Vendor carousel
  $('.blogs-carousel').owlCarousel({
    loop: true,
    margin: 0,
    dots: true,
    loop: true,
    autoplay: true,
    smartSpeed: 1000,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 1
      },
      992: {
        items: 2
      }
    }
  });

  //service features
  $('.service-feature-carousel').owlCarousel({
    loop: true,
    margin: 0,
    dots: true,
    loop: true,
    autoplay: true,
    smartSpeed: 1000,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 1
      },
      992: {
        items: 2
      }
    }
  });

  // Services solutions carousel
  $('.service-solution-carousel').owlCarousel({
    loop: true,
    margin: 0,
    dots: true,
    loop: true,
    autoplay: true,
    smartSpeed: 1000,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 3
      },
      768: {
        items: 4
      },
      992: {
        items: 4
      }
    }
  });


  // Services solutions carousel
  $('.hiring-carousel').owlCarousel({
    loop: true,
    margin: 0,
    dots: true,
    loop: true,
    autoplay: true,
    smartSpeed: 1000,
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 3
      },
      768: {
        items: 4
      },
      992: {
        items: 4
      }
    }
  });



})(jQuery);




// video

$("#carouselExampleIndicators").carousel({ interval: 5000 });

// let allVids = $("#myCarousel").find('.carousel-item');

// allVids.each(function(index, el) {
//   if (index !== 0) {
//     $(this).find('video')[0].pause();
//   }
// });

// $("#myCarousel").on('slide.bs.carousel', function(ev) {
//   let slides = $(this).find('.carousel-item');
//   let pvid = slides[ev.from].querySelectorAll('video')[0];
//   let vid = slides[ev.to].querySelectorAll('video')[0];
//   let isPlaying = vid.currentTime > 0 && vid.readyState > 2;

//   vid.play();

//   if (isPlaying) {
//     pvid.pause();
//   }
// });


//Pie Chart
var mouse_is_inside = false;
$('.slice1').click(function (param) {

  $('.ser-slice').css('z-index', '9');
  $(this).css('z-index', '999');


  $('#line').css('margin-top', '');
  $('#line').css('margin-right', '');
  $('#line').css('margin-left', '');
  $('#line').css('transform', '');
  $('#line').css('rotate', '');

  $('#line').css('display', 'block');


  // Media query to set different margin-left values based on screen size
  if ($(window).width() > 768) {
    $('#line').css('margin-top', '200px');
    $('#line').css('margin-right', '820px');
    $('.visibilityNone').css('visibility', 'visible');
  } else {
    $('#line').css('margin-top', '368px');
    $('#line').css('margin-right', '-48px');
  }

  $('#line').css('transform', 'rotateY(180deg)');

  var conte = $(this).children('.title').find('h5').text();
  $(this).siblings().children('img').css({ 'transform': '' });
  $(this).children('img').css({ 'transform': 'scale(1.09)' });

  $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">IT infrastructure platform offers scalable, reliable, and secure resources
     for hosting applications, data storage, and network services.</p>
                <a class="text-primary" href="/services/solutions?fragment=pills-home" >Know more </a>
            </div`);



  $('.line').children('#slice-item').css('transform', '');
  $('.line').children('#slice-item').css('rotate', '');
  $('.line').children('#slice-item').css('transform', 'scaleX(-1)');
});
$('.slice2').click(function (param) {

  $('.ser-slice').css('z-index', '9');
  $(this).css('z-index', '999');

  $('#line').css('margin-top', '');
  $('#line').css('margin-right', '');
  $('#line').css('margin-left', '');
  $('#line').css('transform', '');
  $('#line').css('rotate', '');

  $('#line').css('display', 'block');
  $('#line').css('margin-top', '26px');
  // $('#line').css('margin-left', '290px');
  // Media query to set different margin-left values based on screen size
  if ($(window).width() > 768) {
    $('#line').css('margin-left', '640px'); // For larger screens
    $('.visibilityNone').css('visibility', 'hidden');
  } else {
    $('#line').css('margin-left', '0px'); // For smaller screens
  }
  $('#line').css('rotate', '270deg');

  $(this).siblings().children('img').css({ 'transform': '' });
  $(this).children('img').css({ 'transform': 'scale(1.09)' });
  var dis = $(".line").css("display");

  $('.line').children('#slice-item').css('transform', '');
  $('.line').children('#slice-item').css('rotate', '');
  $('.line').children('#slice-item').css('rotate', '-270deg');


  $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">Robust IT security solutions ensure data protection, threat detection, and prevention against cyberattacks effectively.</p>
        <a class="text-primary" href="services/solutions?fragment=pills-profile" >Know more </a>
    </div`);
});

$('.slice3').click(function (param) {

  $('.ser-slice').css('z-index', '9');
  $(this).css('z-index', '999');

  $('#line').css('margin-top', '');
  $('#line').css('margin-right', '');
  $('#line').css('margin-left', '');
  $('#line').css('transform', '');
  $('#line').css('rotate', '');

  $('#line').css('display', 'block');

  // Media query to set different margin-left values based on screen size
  if ($(window).width() > 768) {
    $('#line').css('margin-left', '720px'); // For larger screens
    $('#line').css('margin-top', '150px');
    $('.visibilityNone').css('visibility', 'visible');
  } else {
    $('#line').css('margin-left', '-20px'); // For smaller screens
    $('#line').css('margin-top', '334px');

  }


  // $('#line').css('margin-left', '720px');
  $(this).siblings().children('img').css({ 'transform': '' });
  $(this).children('img').css({ 'transform': 'scale(1.09)' });

  $('.line').children('#slice-item').css('transform', '');
  $('.line').children('#slice-item').css('rotate', '');
  $('.line').children('#slice-item').css('transform', '');

  $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">Cloud solutions provide scalable, flexible, and cost-effective infrastructure for storage, computation, and application deployment.</p>
        <a class="text-primary" href="services/solutions?fragment=pills-contact" >Know more </a>
    </div`);
});

$('.slice4').click(function (param) {

  $('.ser-slice').css('z-index', '9');
  $(this).css('z-index', '999');

  $('#line').css('margin-top', '');
  $('#line').css('margin-right', '');
  $('#line').css('margin-left', '');
  $('#line').css('transform', '');
  $('#line').css('rotate', '');

  $('#line').css('display', 'block');


  // Media query to set different margin-left values based on screen size
  if ($(window).width() > 768) {
    $('#line').css('margin-top', '510px');
    $('#line').css('margin-right', '190px');
    $('.visibilityNone').css('visibility', 'visible');
  } else {
    $('#line').css('margin-top', '343px');
    $('#line').css('margin-right', '38px');
  }

  $('#line').css('rotate', '90deg');
  $(this).siblings().children('img').css({ 'transform': '' });
  $(this).children('img').css({ 'transform': 'scale(1.09)' });

  $('.line').children('#slice-item').css('transform', '');
  $('.line').children('#slice-item').css('rotate', '');
  $('.line').children('#slice-item').css('rotate', '270deg');

  $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">Digital workspaces enable seamless collaboration, offering tools for remote work, communication, and project management.</p>
        <a class="text-primary" href="/services/solutions?fragment=pills-contact2" >Know more </a>
    </div`);
});

$('.slice5').click(function (param) {

  $('.ser-slice').css('z-index', '9');
  $(this).css('z-index', '999');

  $('#line').css('margin-top', '');
  $('#line').css('margin-right', '');
  $('#line').css('margin-left', '');
  $('#line').css('transform', '');
  $('#line').css('rotate', '');

  $('#line').css('display', 'block');


  // Media query to set different margin-left values based on screen size
  if ($(window).width() > 768) {
    $('#line').css('margin-top', '360px');
    $('#line').css('margin-right', '900px');
    $('.visibilityNone').css('visibility', 'visible');
  } else {
    $('#line').css('margin-top', '400px');
    $('#line').css('margin-right', '-25px');
  }

  $('#line').css('transform', 'rotateY(180deg)');

  $(this).siblings().children('img').css({ 'transform': '' });
  $(this).children('img').css({ 'transform': 'scale(1.09)' });

  $('.line').children('#slice-item').css('transform', '');
  $('.line').children('#slice-item').css('rotate', '');
  $('.line').children('#slice-item').css('transform', 'scaleX(-1)');
  $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">Enterprise application modernization improves efficiency, scalability, and agility by updating legacy systems with modern technologies.</p>
        <a class="text-primary" href="/services/solutions?fragment=pills-profile2" >Know more </a>
    </div`);
});

$('.slice6').click(function (param) {

  $('.ser-slice').css('z-index', '9');
  $(this).css('z-index', '999');

  $('#line').css('margin-top', '');
  $('#line').css('margin-right', '');
  $('#line').css('margin-left', '');
  $('#line').css('transform', '');
  $('#line').css('rotate', '');

  $('#line').css('display', 'block');
  $('#line').css('margin-top', '350px');
  // $('#line').css('margin-left', '650px');

  // Media query to set different margin-left values based on screen size
  if ($(window).width() > 768) {
    $('#line').css('margin-left', '650px'); // For larger screens
    $('.visibilityNone').css('visibility', 'visible');
  } else {
    $('#line').css('margin-left', '0px'); // For smaller screens
  }

  $(this).siblings().children('img').css({ 'transform': '' });
  $(this).children('img').css({ 'transform': 'scale(1.09)' });

  $('.line').children('#slice-item').css('transform', '');
  $('.line').children('#slice-item').css('rotate', '');
  $('#line').children('div').find('h6').html(`<div class="pie-slice-hover">
    <p class="">Consulting guides digital transformation through process optimization, innovative technology implementation, and organizational change facilitation.
    </p>
        <a class="text-primary" href="/services/solutions?fragment=pills-home2" >Know more </a>
    </div`);

});

var mouse_is_inside = false;

$(document).ready(function () {
  $('.ser-slice').hover(function () {
    mouse_is_inside = true;
  }, function () {
    mouse_is_inside = false;
  });

  // $("body").mouseup(function(){
  //     if(! mouse_is_inside) $('.form_wrapper').hide();
  // });
  $('body').click(function () {
    if (!mouse_is_inside) {
      $('.ser-slice').siblings().children('img').css({ 'transform': '' });
      $('#line').css('display', 'none');
    }
  });

});



//data animation
// Txt Rotate
$(document).ready(function () {
  var TxtRotate = function (el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 1500;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
  };

  TxtRotate.prototype.tick = function () {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

    var that = this;
    var delta = 300 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 300;
    }

    setTimeout(function () {
      that.tick();
    }, delta);
  };

  window.onload = function () {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i = 0; i < elements.length; i++) {
      var toRotate = elements[i].getAttribute('data-rotate');
      var period = elements[i].getAttribute('data-period');
      if (toRotate) {
        new TxtRotate(elements[i], JSON.parse(toRotate), period);
      }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 1px solid transparent }";
    document.body.appendChild(css);

  };
});




//Career Apply
$('#career-apply').on('submit', function (e) {

  e.preventDefault();
  // $('#spinner-border').text('Please Wait......');
  $('.spinner-border').css('display', 'block');
  $('.btn-submit').css('display', 'none');
  $('.text-danger').text('');
  var formData = new FormData(this);
  // btn-submit
  $.ajax({
    type: 'post',
    url: $(this).attr('action'),
    data: formData,
    dataType: 'JSON',
    contentType: false,
    processData: false,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
    },
    success: function () {
      $('.spinner-border').css('display', 'none');
      $('.btn-submit').css('display', 'block');
      $('#gettouchmodal').modal('toggle');
      $('#career-apply').trigger("reset");
      $('.btn-refresh').trigger("click");

    },
    error: function (jqXHR, textStatus, errorThrown) {
      $('.btn-refresh').trigger("click");
      $.each(jqXHR.responseJSON.errors, function (index, value) {
        $('.spinner-border').css('display', 'none');
        $('.btn-submit').css('display', 'block');

        $('#' + index + '_error').empty();
        $('#' + index + '_error').append(value);
      });
    }
  });

});

$(".btn-refresh").click(function(){
  $.ajax({
      type:'GET',
      url:"{{ url('/refresh_captcha')}}",
      success:function(data){
          $(".captcha span").html(data.captcha);
      }
  });
});


function shareOnFacebook(url, title, desc) {
  window.open('https://www.facebook.com/sharer/sharer.php?u=' + url + '&display=popup&ref=plugin&src=sdkpreparse&quote=' + desc, 'share-dialog', 'width=626,height=436');
}

function shareOnTwitter(url, title, desc) {
  window.open('https://twitter.com/share?url=' + url + '&text=' + title + '%0A' + desc + '&via=IntelliVectra', 'share-dialog', 'width=626,height=436');
}

function emailBlog(url, title, desc) {
  window.location.href = 'mailto:?subject=' + title + '&body=' + url + '%0A%0A' + desc;
}


function shareOnLinkedin(url, title, desc) {
  window.open('https://www.linkedin.com/shareArticle?mini=true&url=' + url + '&title=' + title + '&summary=' + desc + '&source=IntelliVectra', 'share-dialog', 'width=626,height=436');
}

function copyToClipboard(elementId) {
  var aux = document.createElement("input");
  aux.setAttribute("value", document.getElementById(elementId).innerText);
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);

  var msg = $('#copy-message');
  msg.text('Copied to Clipboard');

  setTimeout(function () {
    msg.text('');
  }, 5000) //  5 seconds
}




let  $temp = $("<input>");
let $url = $(location).attr('href');

$('.share__links').on('click', function() {
  $("body").append($temp);
  $temp.val($url).select();
  document.execCommand("copy");
  $temp.remove();

    $(this).addClass('button__url').text("URL copied!");

    setTimeout(() => {
        $('.share__links').removeClass('button__url').text("Share");
    }, 1000);
})





