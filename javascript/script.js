window.addEventListener("scroll", function() {
    var header = document.querySelector(".navbar");
    var logo = document.querySelector(".logo");
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;
    
    header.classList.toggle("scrolled", scrollPosition > 0);
    logo.classList.toggle("small", scrollPosition > 0);
  });
  

  /* Function for active checker on toolbar menu */

  jQuery(function($) {
    var path = window.location.href; 
    $('#navbar-toolbar a').each(function() {
      if (this.href === path) {
        $(this).addClass('active');
      }
    });
  });