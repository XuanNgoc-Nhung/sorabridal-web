(function () {
  const slider = document.getElementById('feedbackSlider');
  const track = document.getElementById('feedbackTrack');
  const dotsWrap = document.getElementById('feedbackDots');
  const prevBtn = document.getElementById('feedbackPrev');
  const nextBtn = document.getElementById('feedbackNext');

  if (!slider || !track || !dotsWrap || !prevBtn || !nextBtn) return;

  const slides = track.querySelectorAll('.feedback-slide');
  const total = slides.length;
  if (total < 1) return;

  const lightbox = document.getElementById('feedbackLightbox');
  const lightboxImg = document.getElementById('feedbackLightboxImg');
  const lightboxClose = document.getElementById('feedbackLightboxClose');
  const lightboxPrev = document.getElementById('feedbackLightboxPrev');
  const lightboxNext = document.getElementById('feedbackLightboxNext');
  const lightboxCounter = document.getElementById('feedbackLightboxCounter');

  const images = Array.from(slides).map((slide) => {
    const img = slide.querySelector('img');
    return {
      src: img.getAttribute('src'),
      alt: img.getAttribute('alt') || '',
    };
  });

  let current = 0;
  let visible = 1;
  let maxIndex = 0;
  let autoTimer = null;
  let lightboxIndex = 0;
  const AUTO_MS = 5000;

  function getVisibleCount() {
    return window.innerWidth >= 992 ? 4 : 2;
  }

  function getGap() {
    return window.innerWidth >= 992 ? 20 : 16;
  }

  function getSlideWidth() {
    const viewport = slider.querySelector('.feedback-viewport');
    const gap = getGap();
    return (viewport.offsetWidth - (visible - 1) * gap) / visible;
  }

  function buildDots() {
    dotsWrap.innerHTML = '';
    for (let i = 0; i <= maxIndex; i += 1) {
      const dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'feedback-dot' + (i === current ? ' active' : '');
      dot.setAttribute('aria-label', 'Phản hồi ' + (i + 1));
      dot.addEventListener('click', () => goTo(i, true));
      dotsWrap.appendChild(dot);
    }
  }

  function updateDots() {
    dotsWrap.querySelectorAll('.feedback-dot').forEach((dot, i) => {
      dot.classList.toggle('active', i === current);
    });
  }

  function updateTrack() {
    const gap = getGap();
    const slideW = getSlideWidth();
    track.style.transform = 'translateX(-' + (current * (slideW + gap)) + 'px)';
  }

  function recalc() {
    visible = Math.min(getVisibleCount(), total);
    maxIndex = Math.max(0, total - visible);
    current = Math.min(current, maxIndex);
    buildDots();
    updateTrack();
  }

  function goTo(index, userTriggered) {
    current = Math.max(0, Math.min(index, maxIndex));
    updateTrack();
    updateDots();
    if (userTriggered) restartAuto();
  }

  function startAuto() {
    if (total <= visible) return;
    autoTimer = setInterval(() => {
      goTo(current >= maxIndex ? 0 : current + 1, false);
    }, AUTO_MS);
  }

  function stopAuto() {
    clearInterval(autoTimer);
  }

  function restartAuto() {
    stopAuto();
    startAuto();
  }

  function updateLightboxImage() {
    const item = images[lightboxIndex];
    lightboxImg.src = item.src;
    lightboxImg.alt = item.alt;
    lightboxCounter.textContent = (lightboxIndex + 1) + ' / ' + total;
  }

  function openLightbox(index) {
    if (!lightbox) return;
    lightboxIndex = index;
    updateLightboxImage();
    lightbox.hidden = false;
    document.body.style.overflow = 'hidden';
    stopAuto();
    lightboxClose.focus();
  }

  function closeLightbox() {
    if (!lightbox) return;
    lightbox.hidden = true;
    lightboxImg.removeAttribute('src');
    document.body.style.overflow = '';
    startAuto();
  }

  function lightboxGoTo(index) {
    lightboxIndex = ((index % total) + total) % total;
    updateLightboxImage();
  }

  prevBtn.addEventListener('click', () => goTo(current - 1, true));
  nextBtn.addEventListener('click', () => goTo(current + 1, true));

  slider.addEventListener('mouseenter', stopAuto);
  slider.addEventListener('mouseleave', () => {
    if (!lightbox || lightbox.hidden) startAuto();
  });

  track.querySelectorAll('.feedback-card__open').forEach((btn) => {
    btn.addEventListener('click', () => {
      openLightbox(parseInt(btn.dataset.index, 10));
    });
  });

  if (lightbox && lightboxClose && lightboxPrev && lightboxNext) {
    lightboxClose.addEventListener('click', closeLightbox);
    lightboxPrev.addEventListener('click', () => lightboxGoTo(lightboxIndex - 1));
    lightboxNext.addEventListener('click', () => lightboxGoTo(lightboxIndex + 1));

    lightbox.addEventListener('click', (e) => {
      if (e.target === lightbox) closeLightbox();
    });

    document.addEventListener('keydown', (e) => {
      if (lightbox.hidden) return;
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowLeft') lightboxGoTo(lightboxIndex - 1);
      if (e.key === 'ArrowRight') lightboxGoTo(lightboxIndex + 1);
    });
  }

  let touchX = 0;
  track.addEventListener('touchstart', (e) => {
    touchX = e.touches[0].clientX;
  }, { passive: true });

  track.addEventListener('touchend', (e) => {
    const dx = e.changedTouches[0].clientX - touchX;
    if (Math.abs(dx) > 50) {
      goTo(current + (dx < 0 ? 1 : -1), true);
    }
  }, { passive: true });

  if (lightbox) {
    let lightboxTouchX = 0;
    lightbox.addEventListener('touchstart', (e) => {
      if (e.target.closest('.feedback-lightbox__nav, .feedback-lightbox__close')) return;
      lightboxTouchX = e.touches[0].clientX;
    }, { passive: true });

    lightbox.addEventListener('touchend', (e) => {
      if (e.target.closest('.feedback-lightbox__nav, .feedback-lightbox__close')) return;
      const dx = e.changedTouches[0].clientX - lightboxTouchX;
      if (Math.abs(dx) > 50) {
        lightboxGoTo(lightboxIndex + (dx < 0 ? 1 : -1));
      }
    }, { passive: true });
  }

  window.addEventListener('resize', recalc);

  recalc();
  startAuto();
})();
