(function () {
  const slider = document.getElementById('priceStackSlider');
  if (!slider) return;

  const holder = slider.querySelector('.price-css-slider__holder');
  const radios = slider.querySelectorAll('.price-css-slider__radio');
  if (!holder || radios.length < 2) return;

  const MOBILE_MQ = window.matchMedia('(max-width: 991.98px)');
  const SWIPE_THRESHOLD = 50;

  let touchStartX = 0;
  let touchStartY = 0;
  let didSwipe = false;

  function getCurrentIndex() {
    for (let i = 0; i < radios.length; i++) {
      if (radios[i].checked) return i;
    }
    return 0;
  }

  function goToSlide(index) {
    const total = radios.length;
    const idx = ((index % total) + total) % total;
    radios[idx].checked = true;
  }

  holder.addEventListener('touchstart', function (e) {
    if (!MOBILE_MQ.matches) return;
    touchStartX = e.touches[0].clientX;
    touchStartY = e.touches[0].clientY;
    didSwipe = false;
  }, { passive: true });

  holder.addEventListener('touchend', function (e) {
    if (!MOBILE_MQ.matches) return;

    const dx = e.changedTouches[0].clientX - touchStartX;
    const dy = e.changedTouches[0].clientY - touchStartY;

    if (Math.abs(dx) < SWIPE_THRESHOLD || Math.abs(dx) <= Math.abs(dy)) return;

    didSwipe = true;
    const cur = getCurrentIndex();
    goToSlide(dx < 0 ? cur + 1 : cur - 1);
  }, { passive: true });

  holder.addEventListener('click', function (e) {
    if (!didSwipe) return;
    e.preventDefault();
    e.stopPropagation();
    didSwipe = false;
  }, true);
})();
