/* ===================== SHARED JS — Sentinel Pest Technologies ===================== */

// ===== NAVBAR SCROLL EFFECT =====
const navbar = document.getElementById('navbar');
if (navbar) {
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
  });
}

// ===== MOBILE NAV TOGGLE =====
function toggleNav() {
  document.getElementById('navLinks').classList.toggle('open');
}

// ===== ACTIVE NAV LINK (highlight current page) =====
(function() {
  const page = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-links a').forEach(a => {
    const href = a.getAttribute('href');
    if (href === page || (page === '' && href === 'index.html')) {
      a.classList.add('active');
    }
  });
})();

// ===== FADE-IN INTERSECTION OBSERVER =====
const fadeObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      fadeObserver.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });
document.querySelectorAll('.fade-in').forEach(el => fadeObserver.observe(el));

// ===== MODAL =====
function openModal(service) {
  const modal = document.getElementById('leadModal');
  if (!modal) return;
  const pkgName = document.getElementById('modalPkgName');
  const hiddenSvc = document.getElementById('hiddenService');
  const select = document.getElementById('mService');
  const serviceStr = service || 'General Inquiry';

  if (pkgName) pkgName.textContent = serviceStr;
  if (hiddenSvc) hiddenSvc.value = serviceStr;

  if (select) {
    for (let opt of select.options) {
      if (opt.value === serviceStr || opt.value.startsWith(serviceStr) || serviceStr.startsWith(opt.value.split(' —')[0])) {
        opt.selected = true;
        break;
      }
    }
  }

  const formContent = document.getElementById('modalFormContent');
  const success = document.getElementById('modalSuccess');
  if (formContent) formContent.style.display = 'block';
  if (success) success.style.display = 'none';

  modal.classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeModal() {
  const modal = document.getElementById('leadModal');
  if (modal) modal.classList.remove('active');
  document.body.style.overflow = '';
}

function closeModalOutside(e) {
  if (e.target === document.getElementById('leadModal')) closeModal();
}

function handleModalSubmit(e) {
  e.preventDefault();
  document.getElementById('modalFormContent').style.display = 'none';
  document.getElementById('modalSuccess').style.display = 'block';
}

// ===== CONTACT FORM =====
function handleContactForm(e) {
  e.preventDefault();
  const btn = e.target.querySelector('.form-submit');
  if (!btn) return;
  btn.textContent = '✅ Message Sent! We\'ll be in touch shortly.';
  btn.style.background = 'rgba(0,245,160,0.15)';
  btn.style.color = 'var(--electric-green)';
  btn.style.border = '1px solid var(--electric-green)';
  btn.style.boxShadow = 'none';
  btn.disabled = true;
}

// ===== COOKIE BANNER =====
setTimeout(() => {
  const banner = document.getElementById('cookie-banner');
  if (banner && !localStorage.getItem('spt_cookie_consent')) {
    banner.classList.add('visible');
  }
}, 2000);

function dismissCookie(accepted) {
  localStorage.setItem('spt_cookie_consent', accepted ? 'accepted' : 'declined');
  const banner = document.getElementById('cookie-banner');
  if (banner) {
    banner.style.transform = 'translateY(120%)';
    setTimeout(() => banner.style.display = 'none', 500);
  }
}

// ===== ESC KEY CLOSE MODAL =====
document.addEventListener('keydown', e => {
  if (e.key === 'Escape') closeModal();
});

// ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});
