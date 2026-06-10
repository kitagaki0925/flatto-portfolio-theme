/* Portfolio Pro — main.js */
(function () {
  'use strict';

  // ── Header scroll effect ──────────────────────────────
  const header = document.getElementById('site-header');
  if (header) {
    const onScroll = () => {
      header.classList.toggle('scrolled', window.scrollY > 20);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  // ── Hamburger / Mobile menu ───────────────────────────
  const hamburger  = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobile-menu');
  const overlay    = document.getElementById('mobile-overlay');

  function openMenu() {
    mobileMenu.classList.add('open');
    overlay.classList.add('show');
    hamburger.classList.add('active');
    hamburger.setAttribute('aria-expanded', 'true');
    mobileMenu.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeMenu() {
    mobileMenu.classList.remove('open');
    overlay.classList.remove('show');
    hamburger.classList.remove('active');
    hamburger.setAttribute('aria-expanded', 'false');
    mobileMenu.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  if (hamburger) hamburger.addEventListener('click', () => mobileMenu.classList.contains('open') ? closeMenu() : openMenu());
  if (overlay)   overlay.addEventListener('click', closeMenu);

  document.querySelectorAll('.mobile-nav-link').forEach(link => link.addEventListener('click', closeMenu));

  // ── Scroll reveal ─────────────────────────────────────
  const reveals = document.querySelectorAll('.reveal');
  if (reveals.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const delay = el.style.getPropertyValue('--delay') || '0s';
          setTimeout(() => el.classList.add('visible'), parseFloat(delay) * 1000);
          observer.unobserve(el);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    reveals.forEach(el => observer.observe(el));
  }

  // ── Skill bar animation ───────────────────────────────
  const skillFills = document.querySelectorAll('.skill-fill');
  if (skillFills.length) {
    const skillObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          el.style.width = el.dataset.width + '%';
          skillObserver.unobserve(el);
        }
      });
    }, { threshold: 0.5 });
    skillFills.forEach(el => skillObserver.observe(el));
  }

  // ── Counter animation ─────────────────────────────────
  const counters = document.querySelectorAll('.stat-number[data-count]');
  if (counters.length) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el    = entry.target;
          const target = parseInt(el.dataset.count, 10);
          const duration = 1500;
          const start = performance.now();

          function update(now) {
            const progress = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            el.textContent = Math.round(eased * target);
            if (progress < 1) requestAnimationFrame(update);
          }
          requestAnimationFrame(update);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(el => counterObserver.observe(el));
  }

  // ── Portfolio filter ──────────────────────────────────
  const filterBtns = document.querySelectorAll('.filter-btn');
  const workCards  = document.querySelectorAll('.work-card');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;
      workCards.forEach(card => {
        const match = filter === '*' || card.dataset.category === filter;
        card.style.transition = 'opacity 0.3s, transform 0.3s';
        if (match) {
          card.style.opacity = '1';
          card.style.transform = '';
          card.style.display = '';
        } else {
          card.style.opacity = '0';
          card.style.transform = 'scale(0.95)';
          setTimeout(() => { if (!match) card.style.display = 'none'; }, 300);
        }
      });
    });
  });

  // ── Contact form AJAX ─────────────────────────────────
  const form    = document.getElementById('contact-form');
  const result  = document.getElementById('form-result');
  const submit  = document.getElementById('contact-submit');

  if (form && typeof portfolioPro !== 'undefined') {
    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      const btnText    = submit.querySelector('.btn-text');
      const btnLoading = submit.querySelector('.btn-loading');

      btnText.hidden    = true;
      btnLoading.hidden = false;
      submit.disabled   = true;
      result.className  = 'form-result';
      result.style.display = 'none';

      const data = new FormData(form);
      data.append('action', 'portfolio_contact');
      data.append('nonce',  portfolioPro.nonce);

      try {
        const res  = await fetch(portfolioPro.ajaxUrl, { method: 'POST', body: data });
        const json = await res.json();

        result.textContent = json.data?.message || (json.success ? '送信しました！' : 'エラーが発生しました。');
        result.className   = 'form-result ' + (json.success ? 'success' : 'error');

        if (json.success) form.reset();
      } catch (err) {
        result.textContent = 'ネットワークエラーが発生しました。';
        result.className   = 'form-result error';
      } finally {
        btnText.hidden    = false;
        btnLoading.hidden = true;
        submit.disabled   = false;
      }
    });
  }

  // ── Smooth scroll for anchor links ───────────────────
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const id = anchor.getAttribute('href').slice(1);
      const target = document.getElementById(id);
      if (!target) return;
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  // ── Lightbox ──────────────────────────────────────────
  const lightbox = document.getElementById('lightbox');
  if (lightbox) {
    const lightboxImg     = lightbox.querySelector('.lightbox-img');
    const lightboxCaption = lightbox.querySelector('.lightbox-caption');
    const lightboxClose   = lightbox.querySelector('.lightbox-close');
    const lightboxInner   = lightbox.querySelector('.lightbox-inner');

    function openLightbox(src, alt) {
      lightboxImg.src = src;
      lightboxImg.alt = alt || '';
      lightboxCaption.textContent = alt || '';
      lightboxImg.classList.remove('is-zoomed'); // 開くたびにズームリセット
      lightbox.classList.add('is-open');
      document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
      lightboxImg.classList.remove('is-zoomed'); // 閉じるときもリセット
      lightbox.classList.remove('is-open');
      document.body.style.overflow = '';
    }

    // サムネイルクリックで開く
    document.querySelectorAll('.lightbox-trigger').forEach(trigger => {
      trigger.addEventListener('click', (e) => {
        e.preventDefault();
        openLightbox(
          trigger.getAttribute('href'),
          trigger.dataset.caption || trigger.querySelector('img')?.alt || ''
        );
      });
    });

    // 本文内の画像クリックでも開く
    document.querySelectorAll('.portfolio-content img').forEach(img => {
      img.addEventListener('click', () => openLightbox(img.src, img.alt));
    });

    // 画像クリックでズームトグル（クリック位置を中心に拡大）
    lightboxImg.addEventListener('click', (e) => {
      e.stopPropagation();
      if (!lightboxImg.classList.contains('is-zoomed')) {
        const rect = lightboxImg.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width)  * 100;
        const y = ((e.clientY - rect.top)  / rect.height) * 100;
        lightboxImg.style.transformOrigin = `${x}% ${y}%`;
        lightboxImg.classList.add('is-zoomed');
      } else {
        lightboxImg.classList.remove('is-zoomed');
        lightboxImg.style.transformOrigin = 'center center';
      }
    });

    // 暗い背景（lightbox自体）クリックで閉じる
    lightbox.addEventListener('click', closeLightbox);

    // 画像以外のエリア（キャプション等）クリックは閉じない
    lightboxInner.addEventListener('click', (e) => e.stopPropagation());

    // ×ボタンで閉じる
    lightboxClose.addEventListener('click', (e) => {
      e.stopPropagation();
      closeLightbox();
    });

    // Escキーで閉じる
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeLightbox();
    });
  }

  // ── Parallax glow on hero ─────────────────────────────
  const glow1 = document.querySelector('.hero-glow-1');
  const glow2 = document.querySelector('.hero-glow-2');
  if (glow1 && glow2) {
    document.addEventListener('mousemove', (e) => {
      const x = (e.clientX / window.innerWidth  - 0.5) * 30;
      const y = (e.clientY / window.innerHeight - 0.5) * 30;
      glow1.style.transform = `translate(${x}px, ${y}px)`;
      glow2.style.transform = `translate(${-x * 0.5}px, ${-y * 0.5}px)`;
    }, { passive: true });
  }
})();
