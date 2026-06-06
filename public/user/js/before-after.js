/**
 * Before / After slider – vanilla JS, tối ưu GPU
 * clip-path (không đổi width) + translate3d + rAF batching
 */
(function () {
  'use strict';

  var MIN = 2;
  var MAX = 98;
  var DEFAULT = 50;

  function BeforeAfterSlider(wrap) {
    this.wrap = wrap;
    this.reveal = wrap.querySelector('.ba-reveal');
    this.handle = wrap.querySelector('.ba-handle');
    if (!this.reveal || !this.handle) return;

    this.dragging = false;
    this.rafId = 0;
    this.pointerX = 0;
    this.rect = null;
    this.position = DEFAULT;
    this.width = 0;

    var start = parseFloat(wrap.dataset.baStart, 10);
    if (Number.isFinite(start)) this.position = start;

    this._onDown = this._onDown.bind(this);
    this._onMove = this._onMove.bind(this);
    this._onUp = this._onUp.bind(this);
    this._onResize = this._onResize.bind(this);
    this._flush = this._flush.bind(this);

    wrap.addEventListener('pointerdown', this._onDown);
    wrap.addEventListener('pointermove', this._onMove);
    wrap.addEventListener('pointerup', this._onUp);
    wrap.addEventListener('pointercancel', this._onUp);
    wrap.addEventListener('lostpointercapture', this._onUp);

    if (typeof ResizeObserver !== 'undefined') {
      this._ro = new ResizeObserver(this._onResize);
      this._ro.observe(wrap);
    } else {
      window.addEventListener('resize', this._onResize);
    }

    var self = this;
    wrap.querySelectorAll('img').forEach(function (img) {
      if (img.complete) return;
      img.addEventListener('load', function () {
        self._measure();
        self._apply(self.position);
      }, { once: true });
    });

    this._measure();
    this._apply(this.position);
    this._syncAria();
  }

  BeforeAfterSlider.prototype._measure = function () {
    this.rect = this.wrap.getBoundingClientRect();
    this.width = this.rect.width || this.wrap.offsetWidth || 0;
  };

  BeforeAfterSlider.prototype._onResize = function () {
    if (this.dragging) return;
    this._measure();
    this._apply(this.position);
  };

  BeforeAfterSlider.prototype._pctFromX = function (x) {
    if (!this.width) return this.position;
    var pct = ((x - this.rect.left) / this.width) * 100;
    return Math.max(MIN, Math.min(MAX, pct));
  };

  /** Chỉ ghi 2 biến CSS – không đụng DOM attribute khi đang kéo */
  BeforeAfterSlider.prototype._apply = function (pct) {
    this.position = pct;
    var px = this.width * pct / 100;
    var style = this.wrap.style;
    style.setProperty('--ba-pos', pct + '%');
    style.setProperty('--ba-x', px + 'px');
  };

  BeforeAfterSlider.prototype._syncAria = function () {
    if (this.handle.getAttribute('role') === 'slider') {
      this.handle.setAttribute('aria-valuenow', String(Math.round(this.position)));
    }
  };

  BeforeAfterSlider.prototype._scheduleFlush = function () {
    if (this.rafId) return;
    this.rafId = requestAnimationFrame(this._flush);
  };

  BeforeAfterSlider.prototype._flush = function () {
    this.rafId = 0;
    if (!this.dragging) return;
    this._apply(this._pctFromX(this.pointerX));
  };

  BeforeAfterSlider.prototype._onDown = function (e) {
    if (e.button !== undefined && e.button !== 0) return;

    e.preventDefault();
    this.dragging = true;
    this._measure();
    this.wrap.classList.add('is-dragging');
    this.wrap.setPointerCapture(e.pointerId);

    this.pointerX = e.clientX;
    this._apply(this._pctFromX(this.pointerX));
  };

  BeforeAfterSlider.prototype._onMove = function (e) {
    if (!this.dragging) return;
    e.preventDefault();
    this.pointerX = e.clientX;
    this._scheduleFlush();
  };

  BeforeAfterSlider.prototype._onUp = function () {
    if (!this.dragging) return;

    this.dragging = false;
    this.wrap.classList.remove('is-dragging');

    if (this.rafId) {
      cancelAnimationFrame(this.rafId);
      this.rafId = 0;
    }

    this._measure();
    this._apply(this._pctFromX(this.pointerX));
    this._syncAria();
  };

  function init() {
    document.querySelectorAll('.ba-slider-wrap').forEach(function (el) {
      if (!el.__baSlider) el.__baSlider = new BeforeAfterSlider(el);
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
