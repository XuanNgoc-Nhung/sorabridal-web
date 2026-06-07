(function () {
  'use strict';

  var btn = document.getElementById('backToTop');
  if (!btn) return;

  var THRESHOLD = 400;
  var ticking = false;

  function updateVisibility() {
    var visible = window.scrollY > THRESHOLD;
    btn.classList.toggle('is-visible', visible);
    btn.setAttribute('aria-hidden', visible ? 'false' : 'true');
    ticking = false;
  }

  window.addEventListener('scroll', function () {
    if (!ticking) {
      window.requestAnimationFrame(updateVisibility);
      ticking = true;
    }
  }, { passive: true });

  btn.addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  updateVisibility();
})();
