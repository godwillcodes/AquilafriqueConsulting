document.addEventListener('DOMContentLoaded', function () {
  try {
    var candidates = document.querySelectorAll('section');
    candidates.forEach(function (el) {
      if (!el.hasAttribute('data-aos')) {
        el.setAttribute('data-aos', 'fade-up');
      }
    });
  } catch (e) {
    // no-op
  }

  if (window.AOS && typeof window.AOS.init === 'function') {
    window.AOS.init({
      duration: 500,
      easing: 'ease-out',
      once: true
    });
  }
});


