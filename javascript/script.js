window.addEventListener("scroll", function() {
    var header = document.querySelector(".navbar");
    var logo = document.querySelector(".logo");
    var scrollPosition = window.scrollY || document.documentElement.scrollTop;
    
    header.classList.toggle("scrolled", scrollPosition > 0);
    logo.classList.toggle("small", scrollPosition > 0);
  });
  