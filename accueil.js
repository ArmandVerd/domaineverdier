window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});



  window.addEventListener('DOMContentLoaded', function() {
    const img = document.querySelector('.fade-in-img');
    if (img.complete) {
      img.classList.add('visible');
    } else {
      img.addEventListener('load', function() {
        img.classList.add('visible');
      });
    }
  });
