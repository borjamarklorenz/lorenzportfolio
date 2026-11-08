<script>
(function () {
  var d = document;

  /* Year */
  var y = d.getElementById('year'); if (y) y.textContent = new Date().getFullYear();

  /* Theme toggle */
  var t = d.getElementById('themeToggle');
  if (t) t.addEventListener('click', function () {
    var next = d.documentElement.dataset.theme === 'light' ? 'dark' : 'light';
    d.documentElement.dataset.theme = next;
    try { localStorage.setItem('lorenz-theme', next); } catch (e) {}
  });

  /* Mobile sidebar */
  var burger = d.getElementById('burger'),
      sidebar = d.getElementById('sidebar'),
      backdrop = d.getElementById('backdrop');
  function closeNav(){ sidebar.classList.remove('open'); backdrop.classList.remove('show'); }
  if (burger) burger.addEventListener('click', function () {
    sidebar.classList.toggle('open'); backdrop.classList.toggle('show');
  });
  if (backdrop) backdrop.addEventListener('click', closeNav);
  d.querySelectorAll('.nav a').forEach(function (a) { a.addEventListener('click', closeNav); });

  /* Scroll progress */
  var bar = d.getElementById('scrollProgress');
  function onScroll(){
    var h = d.documentElement,
        max = h.scrollHeight - h.clientHeight;
    if (bar) bar.style.width = (max > 0 ? (h.scrollTop / max) * 100 : 0) + '%';
  }
  d.addEventListener('scroll', onScroll, { passive: true }); onScroll();

  /* Reveal on scroll */
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (en) {
      if (en.isIntersecting) {
        en.target.classList.add('visible');
        if (en.target.classList.contains('stat-card')) countUp(en.target);
        if (en.target.querySelectorAll('.skill-fill').length) fillBars(en.target);
        io.unobserve(en.target);
      }
    });
  }, { threshold: 0.15 });
  d.querySelectorAll('.reveal').forEach(function (el) { io.observe(el); });

  /* Counters */
  function countUp(card) {
    var num = card.querySelector('.stat-num');
    if (!num) return;
    var target = parseInt(num.dataset.target || '0', 10), cur = 0,
        step = Math.max(1, Math.ceil(target / 24));
    var tick = setInterval(function () {
      cur = Math.min(target, cur + step);
      num.textContent = cur;
      if (cur >= target) clearInterval(tick);
    }, 34);
  }

  /* Skill bars */
  function fillBars(scope) {
    scope.querySelectorAll('.skill-fill').forEach(function (f) {
      f.style.width = f.dataset.level + '%';
    });
  }

  /* Typing effect (dashboard hero) */
  var typed = d.getElementById('typed');
  if (typed) {
    var words = ['BSIT Student', 'Laravel Learner', 'Blade Templating', 'Git & GitHub Workflow', 'From Bangued, Abra'],
        wi = 0, ci = 0, deleting = false;
    (function loop() {
      var word = words[wi];
      typed.textContent = word.slice(0, ci);
      if (!deleting && ci < word.length) { ci++; setTimeout(loop, 65); }
      else if (!deleting) { deleting = true; setTimeout(loop, 1400); }
      else if (ci > 0) { ci--; setTimeout(loop, 32); }
      else { deleting = false; wi = (wi + 1) % words.length; setTimeout(loop, 220); }
    })();
  }

  /* Contact form -> mailto */
  var form = d.getElementById('contactForm');
  if (form) form.addEventListener('submit', function (e) {
    e.preventDefault();
    var name = form.querySelector('[name=name]').value.trim(),
        email = form.querySelector('[name=email]').value.trim(),
        msg = form.querySelector('[name=message]').value.trim(),
        to = form.dataset.to, subject = encodeURIComponent('Portfolio message from ' + name),
        body = encodeURIComponent(msg + '\n\n— ' + name + ' (' + email + ')');
    window.location.href = 'mailto:' + to + '?subject=' + subject + '&body=' + body;
  });
})();
</script>
