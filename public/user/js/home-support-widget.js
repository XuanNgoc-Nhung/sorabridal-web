(function () {
  'use strict';

  var widget = document.getElementById('supportWidget');
  if (!widget) return;

  var STORAGE_KEY = 'soraSupportWidgetSeen';
  var AUTO_OPEN_DELAY = 1400;
  var shouldSkipAutoOpen = widget.dataset.skipAutoOpen === 'true';

  function openWidget() {
    widget.classList.add('is-open');
    widget.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeWidget() {
    widget.classList.remove('is-open');
    widget.classList.add('has-seen');
    widget.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    try {
      sessionStorage.setItem(STORAGE_KEY, '1');
    } catch (e) {}
  }

  function toggleWidget() {
    if (widget.classList.contains('is-open')) {
      closeWidget();
    } else {
      openWidget();
    }
  }

  widget.querySelectorAll('[data-support-close]').forEach(function (el) {
    el.addEventListener('click', closeWidget);
  });

  var fab = document.getElementById('supportWidgetFab');
  if (fab) {
    fab.addEventListener('click', toggleWidget);
  }

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && widget.classList.contains('is-open')) {
      closeWidget();
    }
  });

  var hasSeen = false;
  try {
    hasSeen = sessionStorage.getItem(STORAGE_KEY) === '1';
  } catch (e) {}

  if (!hasSeen && !shouldSkipAutoOpen) {
    window.setTimeout(openWidget, AUTO_OPEN_DELAY);
  } else {
    widget.classList.add('has-seen');
  }
})();
