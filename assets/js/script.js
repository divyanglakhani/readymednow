$(document).ready(function () {
  $("#home-slider").slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplayspeed: 1500,
    pauseonhover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
  $("[data-trigger]").on("click", function (e) {
    e.preventDefault();
    e.stopPropagation();
    var offcanvas_id = $(this).attr("data-trigger");
    $(offcanvas_id).toggleClass("show");
    $("body").toggleClass("offcanvas-active");
    $(".screen-overlay").toggleClass("show");
  });
  $(document).on("keydown", function (event) {
    if (event.keyCode === 27) {
      $(".mobile-offcanvas").removeClass("show");
      $("body").removeClass("overlay-active");
    }
  });
  $(".btn-close, .screen-overlay").click(function (e) {
    $(".screen-overlay").removeClass("show");
    $(".mobile-offcanvas").removeClass("show");
    $("body").removeClass("offcanvas-active");
  });
});
document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth < 992) {
    document
      .querySelectorAll(".navbar .dropdown")
      .forEach(function (everydropdown) {
        everydropdown.addEventListener("hidden.bs.dropdown", function () {
          this.querySelectorAll(".submenu").forEach(function (everysubmenu) {
            everysubmenu.style.display = "none";
          });
        });
      });
    document.querySelectorAll(".sub-menu a").forEach(function (element) {
      element.addEventListener("click", function (e) {
        let nextEl = this.nextElementSibling;
        if (nextEl && nextEl.classList.contains("submenu")) {
          // e.preventDefault();
          if (nextEl.style.display == "block") {
            nextEl.style.display = "none";
          } else {
            nextEl.style.display = "block";
          }
        }
      });
    });
  }
});

function findOffset(element) {
  var top = 0,
    left = 0;
  do {
    top += element.offsetTop || 0;
    left += element.offsetLeft || 0;
    element = element.offsetParent;
  } while (element);

  return {
    top: top,
    left: left,
  };
}
window.onload = function () {
  var stickyDivHeader = document.getElementById("master_head");
  var headerOffset = findOffset(stickyDivHeader);
  var stickyBody = document.getElementById("mobile_nav");
  window.onscroll = function () {
    var bodyScrollTop =
      document.documentElement.scrollTop || document.body.scrollTop;
    if (bodyScrollTop > headerOffset.top) {
      stickyDivHeader.classList.add("sticky");
      stickyBody.classList.add("sticky");
    } else {
      stickyDivHeader.classList.remove("sticky");
      stickyBody.classList.remove("sticky");
    }
  };
};
const accordion = document.getElementsByClassName("container");
for (i = 0; i < accordion.length; i++) {
  accordion[i].addEventListener("click", function () {
    this.classList.toggle("active");
  });
}
$("[data-trigger]").on("click", function (e) {
  e.preventDefault();
  e.stopPropagation();
  var offcanvas_id = $(this).attr("data-trigger");
  $(offcanvas_id).toggleClass("show");
  $("body").toggleClass("offcanvas-active");
  $(".screen-overlay").toggleClass("show");
});
$(document).on("keydown", function (event) {
  if (event.keyCode === 27) {
    $(".mobile-offcanvas").removeClass("show");
    $("body").removeClass("overlay-active");
  }
});
$(".btn-close, .screen-overlay").click(function (e) {
  $(".screen-overlay").removeClass("show");
  $(".mobile-offcanvas").removeClass("show");
  $("body").removeClass("offcanvas-active");
});
// number count for stats, using jQuery animate

$('.counting').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  

});

// on document ready
$(document).ready(function() {

  // show/hide the mobile menu based on class added to container
  $('.menu-icon').click(function() {
      $(this).parent().toggleClass('is-tapped');
      $('#hamburger').toggleClass('open');
  });

  // handle touch device events on drop down, first tap adds class, second navigates
  $('.touch .sitenavigation li.nav-dropdown > a').on('touchend',
      function(e) {
          if ($('.menu-icon').is(':hidden')) {
              var parent = $(this).parent();
              $(this).find('.clicked').removeClass('clicked');
              if (parent.hasClass('clicked')) {
                  window.location.href = $(this).attr('href');
              } else {
                  $(this).addClass('linkclicked');

                  // close other open menus at this level
                  $(this).parent().parent().find('.clicked').removeClass('clicked');

                  parent.addClass('clicked');
                  e.preventDefault();
              }
          }
      });

  // handle the expansion of mobile menu drop down nesting
  $('.sitenavigation li.nav-dropdown').click(
      function(event) {
          if (event.stopPropagation) {
              event.stopPropagation();
          } else {
              event.cancelBubble = true;
          }

          if ($('.menu-icon').is(':visible')) {
              $(this).find('> ul').toggle();
              $(this).toggleClass('expanded');
          }
      }
  );

  // prevent links for propagating click/tap events that may trigger hiding/unhiding
  $('.sitenavigation a.nav-dropdown, .sitenavigation li.nav-dropdown a').click(
      function(event) {
          if (event.stopPropagation) {
              event.stopPropagation();
          } else {
              event.cancelBubble = true;
          }
      }
  );

  // javascript fade in and out of dropdown menu
  $('.no-touch .sitenavigation li').hover(
      function() {
          if (!$('.menu-icon').is(':visible')) {
              $(this).find('> ul').fadeIn(100);
          }
      },
      function() {
          if (!$('.menu-icon').is(':visible')) {
              $(this).find('> ul').fadeOut(100);
          }
      }
  );
});



/* Please ❤ this if you like it! */


(function($) { "use strict";

$(function() {
  var header = $(".start-style");
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
      header.removeClass('start-style').addClass("scroll-on");
    } else {
      header.removeClass("scroll-on").addClass('start-style');
    }
  });
});		

//Animation

$(document).ready(function() {
  $('body.hero-anime').removeClass('hero-anime');
});

//Menu On Hover

$('body').on('mouseenter mouseleave','li#menu-item-237',function(e){
    if ($(window).width() > 750) {
      var _d=$(e.target).closest('li#menu-item-237');_d.addClass('show');
      setTimeout(function(){
      _d[_d.is(':hover')?'addClass':'removeClass']('show');
      },1);
    }
});	
})(jQuery); 

$("[data-trigger]").on("click", function (e) {
  e.preventDefault();
  e.stopPropagation();
  var offcanvas_id = $(this).attr("data-trigger");
  $(offcanvas_id).toggleClass("show");
  $("body").toggleClass("offcanvas-active");
  $(".screen-overlay").toggleClass("show");
});
$(document).on("keydown", function (event) {
  if (event.keyCode === 27) {
    $(".mobile-offcanvas").removeClass("show");
    $("body").removeClass("overlay-active");
  }
});
$(".btn-close, .screen-overlay").click(function (e) {
  $(".screen-overlay").removeClass("show");
  $(".mobile-offcanvas").removeClass("show");
  $("body").removeClass("offcanvas-active");
});

document.addEventListener("DOMContentLoaded", function () {
if (window.innerWidth < 992) {
  document
    .querySelectorAll(".navbar .dropdown")
    .forEach(function (everydropdown) {
      everydropdown.addEventListener("hidden.bs.dropdown", function () {
        this.querySelectorAll(".submenu").forEach(function (everysubmenu) {
          everysubmenu.style.display = "none";
        });
      });
    });
  document.querySelectorAll(".sub-menu a").forEach(function (element) {
    element.addEventListener("click", function (e) {
      let nextEl = this.nextElementSibling;
      if (nextEl && nextEl.classList.contains("submenu")) {
        // e.preventDefault();
        if (nextEl.style.display == "block") {
          nextEl.style.display = "none";
        } else {
          nextEl.style.display = "block";
        }
      }
    });
  });
}
});
function findOffset(element) {
var top = 0,
  left = 0;
do {
  top += element.offsetTop || 0;
  left += element.offsetLeft || 0;
  element = element.offsetParent;
} while (element);

return {
  top: top,
  left: left,
};
}
window.onload = function () {
var stickyDivHeader = document.getElementById("master_head");
var headerOffset = findOffset(stickyDivHeader);
var stickyBody = document.getElementById("mobile_nav");
window.onscroll = function () {
  var bodyScrollTop =
    document.documentElement.scrollTop || document.body.scrollTop;
  if (bodyScrollTop > headerOffset.top) {
    stickyDivHeader.classList.add("sticky");
    stickyBody.classList.add("sticky");
  } else {
    stickyDivHeader.classList.remove("sticky");
    stickyBody.classList.remove("sticky");
  }
};
};
// 


// $(".menu-item-has-children").not($('#menu li sub-menu li a')).click(function (e) {
//   $('ul.sub-menu').not( $(this).children() ).slideUp();
//   $(this).children("ul.sub-menu").slideToggle();
//   e.stopPropagation()
// });

// function showSubMenu(menu) {
//   var subMenu = menu.querySelector('#menu li sub-menu li a');
//   subMenu.style.display = 'block';
// }

// function hideSubMenu(menu) {
//   var subMenu = menu.querySelector('ul.sub-menu');
//   subMenu.style.display = 'none';
// }

// var mainMenu = document.getElementById('#menu li sub-menu li a');
// var subMenu = mainMenu.querySelector('ul.sub-menu');

// mainMenu.addEventListener('mouseover', function() {
//     subMenu.style.display = 'block';
// });
// mainMenu.addEventListener('mouseout', function() {
//     subMenu.style.display = 'none';
// });


// const el = document.getElementById('#menu li sub-menu li a');

// const hiddenDiv = document.getElementById('ul.sub-menu');

// // ✅ Show hidden DIV on hover
// el.addEventListener('mouseover', function handleMouseOver() {
//   hiddenDiv.style.display = 'block';

//   // 👇️ if you used visibility property to hide the div
//   // hiddenDiv.style.visibility = 'visible';
// });

// // ✅ (optionally) Hide DIV on mouse out
// el.addEventListener('mouseout', function handleMouseOut() {
//   hiddenDiv.style.display = 'none';

//   // 👇️ if you used visibility property to hide the div
//   // hiddenDiv.style.visibility = 'hidden';
// });
