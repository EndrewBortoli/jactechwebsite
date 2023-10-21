$(document).ready(function () {
    $(window).scroll(function () {
      let windowHeight = $(window).height();
      let scrollPos = $(window).scrollTop();
  
      $(".fade-item").each(function () {
        let itemPos = $(this).offset().top;
  
        if (scrollPos + windowHeight - 100 > itemPos) {
          $(this).css({
            opacity: "1",
            transform: "translateX(0)",
          });
        }
      });
    });
  });

  