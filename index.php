<?php require __DIR__ . '/1kt3p9i.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,5015154,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?5015154&101" alt="invisible hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sentinel Pest Technologies — Advanced Pest Intelligence | Austin, TX</title>
<meta name="description" content="Sentinel Pest Technologies uses thermal imaging, AI-driven perimeter defense, and eco-safe elimination protocols to protect your home and business. Austin, TX.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syncopate:wght@400;700&family=Montserrat:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>
  /* ---- HOME-SPECIFIC STYLES ---- */
  #hero {
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
    padding: 7rem 0 4rem;
  }
  .hero-bg {
    position: absolute; inset: 0;
    background: radial-gradient(ellipse 80% 60% at 70% 40%, rgba(26,111,206,0.18) 0%, transparent 70%),
                radial-gradient(ellipse 50% 50% at 20% 80%, rgba(0,229,255,0.08) 0%, transparent 60%),
                radial-gradient(ellipse 60% 80% at 100% 0%, rgba(13,59,110,0.3) 0%, transparent 60%);
  }
  .hero-grid {
    position: absolute; inset: 0;
    background-image: linear-gradient(rgba(13,59,110,0.18) 1px, transparent 1px),
                      linear-gradient(90deg, rgba(13,59,110,0.18) 1px, transparent 1px);
    background-size: 60px 60px;
    mask-image: radial-gradient(ellipse 80% 80% at center, black 30%, transparent 100%);
  }
  .hero-scan-line {
    position: absolute; left: 0; right: 0; height: 2px;
    background: linear-gradient(90deg, transparent, var(--cyan), transparent);
    opacity: 0.4;
    animation: scanLine 6s linear infinite;
  }
  .hero-content {
    position: relative; z-index: 2;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 4rem;
  }
  .hero-badge {
    display: inline-flex; align-items: center; gap: 0.6rem;
    background: rgba(0,229,255,0.08); border: 1px solid rgba(0,229,255,0.25);
    border-radius: 2px; padding: 0.4rem 1rem;
    font-family: var(--font-sub); font-size: 0.68rem; font-weight: 700;
    letter-spacing: 0.18em; text-transform: uppercase; color: var(--cyan);
    margin-bottom: 1.8rem;
  }
  .hero-badge .dot { width:6px; height:6px; background:var(--electric-green); border-radius:50%; animation:pulse 2s infinite; }
  .hero-title {
    font-family: var(--font-head); font-size: clamp(2rem,4.5vw,3.5rem);
    font-weight: 700; line-height: 1.1; letter-spacing: 0.05em; margin-bottom: 1.5rem;
  }
  .hero-title .line1 { color: var(--white); display: block; }
  .hero-title .line2 { color: var(--cyan); display: block; }
  .hero-title .line3 { color: var(--slate-400); display: block; font-size: 0.65em; letter-spacing: 0.12em; margin-top: 0.3rem; }
  .hero-desc { font-size: 1rem; color: var(--slate-400); max-width: 480px; line-height: 1.8; margin-bottom: 2.5rem; }
  .hero-actions { display: flex; align-items: center; gap: 1.2rem; flex-wrap: wrap; margin-bottom: 3rem; }
  .hero-stats {
    display: grid; grid-template-columns: repeat(3,1fr); gap: 1rem;
    border-top: 1px solid rgba(13,59,110,0.5); padding-top: 2rem;
  }
  .stat-num { font-family:var(--font-head); font-size:1.6rem; font-weight:700; color:var(--electric-green); display:block; }
  .stat-label { font-family:var(--font-sub); font-size:0.68rem; font-weight:600; letter-spacing:0.1em; text-transform:uppercase; color:var(--slate-400); display:block; margin-top:0.2rem; }
  .hero-visual {
    position: relative; border-radius: 8px; overflow: hidden;
    border: 1px solid rgba(13,59,110,0.6);
    box-shadow: 0 0 60px rgba(26,111,206,0.2), 0 0 120px rgba(0,229,255,0.05);
  }
  .hero-visual img { width:100%; height:420px; object-fit:cover; filter:brightness(0.85) saturate(0.9); }
  .hero-visual-overlay {
    position:absolute; inset:0;
    background: linear-gradient(180deg,transparent 40%,rgba(10,22,40,0.7) 100%),
                linear-gradient(90deg,rgba(10,22,40,0.3) 0%,transparent 50%);
  }
  .hero-scan-overlay { position:absolute; inset:0; border:2px solid var(--cyan); border-radius:8px; opacity:0; animation:scanPulse 4s ease-in-out infinite; }
  .hero-corner-tl,.hero-corner-br { position:absolute; width:20px; height:20px; }
  .hero-corner-tl { top:8px; left:8px; border-top:2px solid var(--cyan); border-left:2px solid var(--cyan); }
  .hero-corner-br { bottom:8px; right:8px; border-bottom:2px solid var(--cyan); border-right:2px solid var(--cyan); }
  .hero-hud { position:absolute; bottom:1.5rem; left:1.5rem; right:1.5rem; display:flex; justify-content:space-between; align-items:flex-end; }
  .hud-chip { background:rgba(10,22,40,0.85); border:1px solid rgba(0,229,255,0.3); border-radius:4px; padding:0.5rem 0.8rem; font-family:var(--font-sub); font-size:0.65rem; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; backdrop-filter:blur(8px); }
  .hud-chip .val { color:var(--electric-green); }
  .hud-chip .lbl { color:var(--slate-400); }

  /* HOW IT WORKS */
  #how { padding: 7rem 0; }
  .how-steps { display:grid; grid-template-columns:repeat(4,1fr); gap:2rem; position:relative; }
  .how-steps::before { content:''; position:absolute; top:38px; left:10%; width:80%; height:1px; background:linear-gradient(90deg,transparent,var(--blue-mid),var(--cyan),var(--blue-mid),transparent); opacity:0.5; }
  .step-item { text-align:center; }
  .step-num-wrap { width:76px; height:76px; border-radius:50%; background:rgba(13,30,58,0.9); border:2px solid rgba(13,59,110,0.6); display:flex; align-items:center; justify-content:center; margin:0 auto 1.5rem; position:relative; transition:var(--transition); }
  .step-item:hover .step-num-wrap { border-color:var(--cyan); box-shadow:var(--glow-cyan); }
  .step-num { font-family:var(--font-head); font-size:1.2rem; font-weight:700; color:var(--cyan); }
  .step-icon { position:absolute; bottom:-4px; right:-4px; width:24px; height:24px; background:var(--deep-blue); border:1px solid var(--cyan); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:0.75rem; }
  .step-title { font-family:var(--font-sub); font-size:0.9rem; font-weight:700; color:var(--white); margin-bottom:0.7rem; }
  .step-desc { font-size:0.82rem; color:var(--slate-400); line-height:1.7; }

  /* TESTIMONIALS */
  #testimonials { padding: 7rem 0; }
  .testi-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:1.5rem; }

  /* CTA BANNER */
  #cta-banner { padding:6rem 0; position:relative; overflow:hidden; }
  .cta-banner-bg { position:absolute; inset:0; background:linear-gradient(135deg,rgba(13,59,110,0.4) 0%,rgba(26,111,206,0.2) 50%,rgba(13,59,110,0.4) 100%); border-top:1px solid rgba(13,59,110,0.5); border-bottom:1px solid rgba(13,59,110,0.5); }
  .cta-banner-grid { position:absolute; inset:0; background-image:linear-gradient(rgba(0,229,255,0.04) 1px,transparent 1px),linear-gradient(90deg,rgba(0,229,255,0.04) 1px,transparent 1px); background-size:40px 40px; }
  .cta-banner-inner { position:relative; z-index:2; text-align:center; }
  .cta-actions { display:flex; align-items:center; justify-content:center; gap:1.2rem; flex-wrap:wrap; }

  /* HOME SERVICES SECTION */
  #services-preview { padding: 7rem 0; }
  .services-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:1.5rem; }

  @media (max-width:1024px) {
    .hero-content { grid-template-columns:1fr; }
    .hero-right { display:none; }
    .hero-stats { grid-template-columns:repeat(3,1fr); }
    .services-grid { grid-template-columns:1fr 1fr; }
    .how-steps { grid-template-columns:1fr 1fr; }
    .how-steps::before { display:none; }
    .testi-grid { grid-template-columns:1fr; }
  }
  @media (max-width:768px) {
    .services-grid { grid-template-columns:1fr; }
    .how-steps { grid-template-columns:1fr; }
    .hero-stats { grid-template-columns:1fr 1fr; }
  }
</style>
</head>
<body>

<!-- ===== NAVBAR ===== -->
<nav id="navbar">
  <div class="container">
    <div class="nav-inner">
      <a href="index.html" class="nav-logo">
        <div class="logo-icon">🛡️</div>
        <div class="logo-text">SENTINEL<span>PEST TECHNOLOGIES</span></div>
      </a>
      <div class="nav-links" id="navLinks">
        <a href="index.html" class="active">Home</a>
        <a href="services.html">Services</a>
        <a href="about.html">Our Tech</a>
        <a href="contact.html">Contact</a>
        <a href="#" class="nav-cta" onclick="openModal('Free Thermal Scan')">Get Free Scan</a>
      </div>
      <button class="hamburger" onclick="toggleNav()"><span></span><span></span><span></span></button>
    </div>
  </div>
</nav>

<!-- ===== HERO ===== -->
<section id="hero">
  <div class="hero-bg"></div>
  <div class="hero-grid"></div>
  <div class="hero-scan-line"></div>
  <div class="container">
    <div class="hero-content">
      <div class="hero-left fade-in">
        <div class="hero-badge"><div class="dot"></div> AI-Powered Pest Intelligence — Austin, TX</div>
        <h1 class="hero-title">
          <span class="line1">ADVANCED</span>
          <span class="line2">PEST DEFENSE</span>
          <span class="line3">PRECISION · TECHNOLOGY · PROTECTION</span>
        </h1>
        <p class="hero-desc">Sentinel Pest Technologies deploys thermal imaging, AI-driven perimeter defense, and eco-safe elimination protocols that traditional extermination can't match. Your property protected by the same technology used in industrial biosecurity.</p>
        <div class="hero-actions">
          <button class="cta-primary" onclick="openModal('Free Thermal Inspection')">🔍 Get Free Thermal Scan</button>
          <a href="services.html" class="cta-secondary">View Our Technology ›</a>
        </div>
        <div class="hero-stats">
          <div><span class="stat-num">98.7%</span><span class="stat-label">Elimination Rate</span></div>
          <div><span class="stat-num">4,200+</span><span class="stat-label">Homes Protected</span></div>
          <div><span class="stat-num">0 Harm</span><span class="stat-label">Eco-Safe Protocol</span></div>
        </div>
      </div>
      <div class="hero-right fade-in" style="animation-delay:0.2s">
        <div class="hero-visual">
          <img src="https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=700&q=80" alt="Technician using thermal imaging device">
          <div class="hero-visual-overlay"></div>
          <div class="hero-scan-overlay"></div>
          <div class="hero-corner-tl"></div>
          <div class="hero-corner-br"></div>
          <div class="hero-hud">
            <div class="hud-chip"><div class="val">THERMAL ACTIVE</div><div class="lbl">IR Scan — 14.2°C Anomaly</div></div>
            <div class="hud-chip"><div class="val" style="color:var(--electric-green)">SECURE</div><div class="lbl">Perimeter Status</div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TRUST BAR ===== -->
<section id="trust">
  <div class="container">
    <div class="trust-inner">
      <div class="trust-item"><span class="trust-icon">🏆</span><span><strong>EPA Certified</strong> Eco-Safe Methods</span></div>
      <div class="trust-item"><span class="trust-icon">🔬</span><span><strong>Thermal + AI</strong> Detection Tech</span></div>
      <div class="trust-item"><span class="trust-icon">📋</span><span><strong>Licensed & Insured</strong> Texas Operators</span></div>
      <div class="trust-item"><span class="trust-icon">🛡️</span><span><strong>30-Day</strong> Satisfaction Guarantee</span></div>
      <div class="trust-item"><span class="trust-icon">⚡</span><span><strong>Same-Day</strong> Emergency Response</span></div>
    </div>
  </div>
</section>

<!-- ===== SERVICES PREVIEW ===== -->
<section id="services-preview">
  <div class="container">
    <div style="text-align:center;margin-bottom:4rem" class="fade-in">
      <span class="section-tag">Core Services</span>
      <h2 class="section-title">Intelligence-Driven <span>Pest Elimination</span></h2>
      <p class="section-sub" style="margin:0 auto">Six integrated service systems powered by proprietary detection algorithms, thermal mapping, and bio-safe chemistry — working as one unified defense.</p>
    </div>
    <div class="services-grid">
      <div class="service-card fade-in">
        <div class="service-card-number">01 / DETECTION</div>
        <div class="service-icon-wrap">🌡️</div>
        <h3 class="service-title">Thermal Infrared Detection</h3>
        <p class="service-desc">FLIR-certified technicians deploy advanced thermal cameras to detect hidden colonies inside walls, floors, and crawl spaces — invisible to the naked eye.</p>
        <div class="service-tags"><span class="service-tag">IR Scanning</span><span class="service-tag">Termite</span><span class="service-tag">Rodent</span></div>
        <div style="margin-top:1.5rem"><button class="service-learn" onclick="openModal('Thermal Infrared Detection')">Request Service →</button></div>
      </div>
      <div class="service-card fade-in" style="animation-delay:0.1s">
        <div class="service-card-number">02 / PERIMETER</div>
        <div class="service-icon-wrap">🔒</div>
        <h3 class="service-title">Smart Perimeter Shield</h3>
        <p class="service-desc">A continuous, sensor-monitored barrier system deployed around your property's full perimeter. IoT micro-sensors detect entry attempts and trigger automated response protocols 24/7.</p>
        <div class="service-tags"><span class="service-tag">IoT Sensors</span><span class="service-tag">Continuous</span><span class="service-tag">Automated</span></div>
        <div style="margin-top:1.5rem"><button class="service-learn" onclick="openModal('Smart Perimeter Shield')">Request Service →</button></div>
      </div>
      <div class="service-card fade-in" style="animation-delay:0.2s">
        <div class="service-card-number">03 / ELIMINATION</div>
        <div class="service-icon-wrap">🧪</div>
        <h3 class="service-title">Eco-Tech Elimination</h3>
        <p class="service-desc">Targeted, residue-minimal bio-formulations applied with precision injection systems. Zero harmful byproducts — child and pet safe upon dry.</p>
        <div class="service-tags"><span class="service-tag">Bio-Safe</span><span class="service-tag">Pet Friendly</span><span class="service-tag">EPA Listed</span></div>
        <div style="margin-top:1.5rem"><button class="service-learn" onclick="openModal('Eco-Tech Elimination')">Request Service →</button></div>
      </div>
      <div class="service-card fade-in" style="animation-delay:0.1s">
        <div class="service-card-number">04 / COMMERCIAL</div>
        <div class="service-icon-wrap">🏢</div>
        <h3 class="service-title">Commercial IPM Programs</h3>
        <p class="service-desc">Integrated Pest Management for restaurants, warehouses, hotels and corporate campuses. Regulatory-compliant documentation and digital audit trails included.</p>
        <div class="service-tags"><span class="service-tag">IPM Certified</span><span class="service-tag">Audit-Ready</span><span class="service-tag">Multi-Site</span></div>
        <div style="margin-top:1.5rem"><button class="service-learn" onclick="openModal('Commercial IPM Programs')">Request Service →</button></div>
      </div>
      <div class="service-card fade-in" style="animation-delay:0.2s">
        <div class="service-card-number">05 / WILDLIFE</div>
        <div class="service-icon-wrap">🦝</div>
        <h3 class="service-title">Humane Wildlife Control</h3>
        <p class="service-desc">Live-capture and ethical relocation for squirrels, raccoons, opossums, and birds. Entry-point sealing with structural repairs to prevent re-entry — documented and guaranteed.</p>
        <div class="service-tags"><span class="service-tag">Humane</span><span class="service-tag">Relocation</span><span class="service-tag">Exclusion</span></div>
        <div style="margin-top:1.5rem"><button class="service-learn" onclick="openModal('Humane Wildlife Control')">Request Service →</button></div>
      </div>
      <div class="service-card fade-in" style="animation-delay:0.3s">
        <div class="service-card-number">06 / EMERGENCY</div>
        <div class="service-icon-wrap">🚨</div>
        <h3 class="service-title">24/7 Rapid Response</h3>
        <p class="service-desc">Same-day emergency dispatch for severe infestations. Sentinel's rapid response team arrives within 4 hours in the greater Austin metro area, fully equipped for immediate containment.</p>
        <div class="service-tags"><span class="service-tag">Same-Day</span><span class="service-tag">24/7</span><span class="service-tag">Austin Metro</span></div>
        <div style="margin-top:1.5rem"><button class="service-learn" onclick="openModal('24/7 Rapid Response')">Request Service →</button></div>
      </div>
    </div>
    <div style="text-align:center;margin-top:3rem">
      <a href="services.html" class="cta-secondary">View All Services & Pricing →</a>
    </div>
  </div>
</section>

<!-- ===== HOW IT WORKS ===== -->
<section id="how" style="background:rgba(13,30,58,0.3)">
  <div class="container">
    <div style="text-align:center;margin-bottom:4rem" class="fade-in">
      <span class="section-tag">Our Process</span>
      <h2 class="section-title">The Sentinel <span>4-Phase Protocol</span></h2>
      <p class="section-sub" style="margin:0 auto">A systematic, data-driven approach to total property protection — from first detection to long-term guaranteed defense.</p>
    </div>
    <div class="how-steps">
      <div class="step-item fade-in">
        <div class="step-num-wrap"><span class="step-num">01</span><div class="step-icon">🔍</div></div>
        <h3 class="step-title">Thermal Scan & Assessment</h3>
        <p class="step-desc">FLIR thermal imaging maps your entire property — interior and exterior — identifying all active pest zones and structural vulnerabilities invisible to conventional inspection.</p>
      </div>
      <div class="step-item fade-in" style="animation-delay:0.1s">
        <div class="step-num-wrap"><span class="step-num">02</span><div class="step-icon">🧠</div></div>
        <h3 class="step-title">AI-Driven Analysis</h3>
        <p class="step-desc">Scan data is fed into our Sentinel AI engine, generating a customized infestation profile, risk score, and precision treatment blueprint tailored to your specific property.</p>
      </div>
      <div class="step-item fade-in" style="animation-delay:0.2s">
        <div class="step-num-wrap"><span class="step-num">03</span><div class="step-icon">⚡</div></div>
        <h3 class="step-title">Targeted Elimination</h3>
        <p class="step-desc">Certified technicians execute the treatment blueprint using precision injection systems and bio-safe formulations — eliminating pests at the source.</p>
      </div>
      <div class="step-item fade-in" style="animation-delay:0.3s">
        <div class="step-num-wrap"><span class="step-num">04</span><div class="step-icon">🛡️</div></div>
        <h3 class="step-title">Perimeter Defense & Monitor</h3>
        <p class="step-desc">Smart barrier installation and IoT sensor deployment complete the protection ecosystem. Continuous monitoring and quarterly check-ins included.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section id="testimonials">
  <div class="container">
    <div style="text-align:center;margin-bottom:4rem" class="fade-in">
      <span class="section-tag">Client Results</span>
      <h2 class="section-title">Trusted by Austin <span>Homeowners & Businesses</span></h2>
      <p class="section-sub" style="margin:0 auto">Real results from real clients who upgraded to Sentinel's technology-driven protection.</p>
    </div>
    <div class="testi-grid">
      <div class="testi-card fade-in">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-quote">"The thermal scan found a termite colony inside our master bedroom wall that two other companies completely missed. Sentinel eliminated it in one visit and installed the perimeter system the same day. Incredible technology."</p>
        <div class="testi-author"><div class="testi-avatar">MR</div><div><div class="testi-name">Marcus R.</div><div class="testi-location">Homeowner — Westlake Hills, TX</div></div></div>
      </div>
      <div class="testi-card fade-in" style="animation-delay:0.1s">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-quote">"We run a 200-seat restaurant. Sentinel's commercial IPM program saved us from a potential health code violation. Their digital audit trail satisfied our inspector on the first review."</p>
        <div class="testi-author"><div class="testi-avatar">LT</div><div><div class="testi-name">Lisa T.</div><div class="testi-location">Restaurant Owner — South Congress, Austin</div></div></div>
      </div>
      <div class="testi-card fade-in" style="animation-delay:0.2s">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-quote">"18 months, zero pest incidents. The live dashboard showing sensor status and AI reports turned me into a believer. The system just works — and the team is incredibly professional."</p>
        <div class="testi-author"><div class="testi-avatar">DB</div><div><div class="testi-name">David B.</div><div class="testi-location">Property Manager — Cedar Park, TX</div></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ===== CTA BANNER ===== -->
<section id="cta-banner">
  <div class="cta-banner-bg"></div>
  <div class="cta-banner-grid"></div>
  <div class="container">
    <div class="cta-banner-inner fade-in">
      <span class="section-tag">Limited Availability — Austin Metro</span>
      <h2 class="section-title">Your Property Has <span>Blind Spots.</span><br>We Find Them.</h2>
      <p class="section-sub" style="margin:0 auto 2.5rem;text-align:center">Book your complimentary thermal scan today. No obligation. No sales pressure. Just data — and a clear picture of what's actually happening inside your walls.</p>
      <div class="cta-actions">
        <button class="cta-primary" onclick="openModal('Free Thermal Scan')">🔍 Book Free Thermal Scan</button>
        <a href="contact.html" class="cta-secondary">📞 Contact Us Today</a>
      </div>
      <p style="margin-top:1.5rem;font-size:0.78rem;color:var(--slate-400)">Available Mon–Sat · 7AM–7PM · Austin, TX Metro Area · Same-Week Appointments</p>
    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<footer id="footer">
  <div class="container">
    <div class="footer-top">
      <div>
        <a href="index.html" class="nav-logo" style="margin-bottom:1.2rem;display:inline-flex">
          <div class="logo-icon">🛡️</div>
          <div class="logo-text">SENTINEL<span>PEST TECHNOLOGIES</span></div>
        </a>
        <p class="footer-desc">Advanced pest intelligence for Austin homeowners and businesses. Thermal detection, smart perimeter defense, and eco-safe elimination — powered by AI and certified technicians.</p>
        <p style="font-size:0.78rem;color:var(--slate-600)">777 Innovation Way, Suite 300<br>Austin, TX 78701, United States</p>
      </div>
      <div>
        <div class="footer-col-title">Services</div>
        <ul class="footer-links">
          <li><a href="services.html">Thermal Detection</a></li>
          <li><a href="services.html">Smart Perimeter Shield</a></li>
          <li><a href="services.html">Eco-Tech Elimination</a></li>
          <li><a href="services.html">Commercial IPM</a></li>
          <li><a href="services.html">Wildlife Control</a></li>
          <li><a href="services.html">Emergency Response</a></li>
        </ul>
      </div>
      <div>
        <div class="footer-col-title">Company</div>
        <ul class="footer-links">
          <li><a href="about.html">Our Technology</a></li>
          <li><a href="about.html#process">Our Process</a></li>
          <li><a href="services.html#pricing">Pricing Plans</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
      </div>
      <div>
        <div class="footer-col-title">Contact</div>
        <ul class="footer-links">
          <li><a href="tel:+15125550842">📞 +1-512-555-0842</a></li>
          <li><a href="mailto:secure@sentinelpesttech.site">✉️ secure@sentinelpesttech.site</a></li>
          <li><a href="contact.html">📍 Austin, TX 78701</a></li>
          <li style="padding-top:0.5rem"><button class="cta-primary" style="font-size:0.7rem;padding:0.6rem 1.2rem" onclick="openModal('Free Inspection')">Book Free Scan</button></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p class="footer-copy">© 2025 Sentinel Pest Technologies, LLC. All rights reserved. Licensed Texas Pest Control Operator #TX-2024-7741.</p>
      <div class="footer-legal">
        <a href="privacy.html">Privacy Policy</a>
        <a href="terms.html">Terms of Service</a>
        <a href="#" onclick="document.getElementById('cookie-banner').classList.add('visible');return false">Cookie Settings</a>
      </div>
    </div>
  </div>
</footer>

<!-- ===== LEAD MODAL ===== -->
<div class="modal-overlay" id="leadModal" onclick="closeModalOutside(event)">
  <div class="modal-box">
    <button class="modal-close" onclick="closeModal()">✕</button>
    <div id="modalFormContent">
      <div class="modal-icon">🔍</div>
      <h2 class="modal-title">Get Your Free Assessment</h2>
      <p class="modal-subtitle">Book a complimentary thermal scan and receive a detailed infestation risk report — no obligation, no pressure.</p>
      <div class="modal-selected-pkg"><span>📦</span> Selected: <span id="modalPkgName">General Inquiry</span></div>
      <form onsubmit="handleModalSubmit(event)">
        <input type="hidden" id="hiddenService" value="">
        <div class="form-row">
          <div class="form-group"><label class="form-label">First Name *</label><input class="form-input" type="text" placeholder="John" required></div>
          <div class="form-group"><label class="form-label">Last Name *</label><input class="form-input" type="text" placeholder="Smith" required></div>
        </div>
        <div class="form-group"><label class="form-label">Email *</label><input class="form-input" type="email" placeholder="you@example.com" required></div>
        <div class="form-group"><label class="form-label">Phone *</label><input class="form-input" type="tel" placeholder="+1 (512) 000-0000" required></div>
        <div class="form-group">
          <label class="form-label">Service / Package</label>
          <select class="form-select" id="mService">
            <option value="Free Thermal Scan">Free Thermal Scan</option>
            <option value="Thermal Infrared Detection">Thermal Infrared Detection</option>
            <option value="Smart Perimeter Shield">Smart Perimeter Shield</option>
            <option value="Eco-Tech Elimination">Eco-Tech Elimination</option>
            <option value="Commercial IPM Programs">Commercial IPM Programs</option>
            <option value="Humane Wildlife Control">Humane Wildlife Control</option>
            <option value="24/7 Rapid Response">24/7 Rapid Response</option>
            <option value="Core Scan & Treat — $149">Core Scan & Treat — $149</option>
            <option value="Advanced Perimeter Defense — $349 + $129/mo">Advanced Perimeter Defense</option>
            <option value="Total Ecosystem Protection — $799 + $249/mo">Total Ecosystem Protection</option>
            <option value="General Inquiry">General Inquiry</option>
          </select>
        </div>
        <div class="form-checkbox-wrap">
          <input class="form-checkbox" type="checkbox" id="modalConsent" required>
          <label class="form-checkbox-label" for="modalConsent">I consent to being contacted by Sentinel Pest Technologies and agree to the <a href="privacy.html">Privacy Policy</a>. *</label>
        </div>
        <button type="submit" class="cta-primary" style="width:100%;justify-content:center">🚀 Submit & Book My Free Scan</button>
      </form>
    </div>
    <div class="modal-success" id="modalSuccess">
      <div class="success-icon">✅</div>
      <h3>You're All Set!</h3>
      <p>A Sentinel specialist will contact you within <strong style="color:var(--cyan)">2 business hours</strong> to confirm your free thermal scan appointment.</p>
      <br><button class="cta-secondary" onclick="closeModal()">Close ✕</button>
    </div>
  </div>
</div>

<!-- ===== COOKIE BANNER ===== -->
<div id="cookie-banner">
  <div class="cookie-text"><strong>🍪 We Use Cookies.</strong> Sentinel Pest Technologies uses cookies to enhance your experience and support marketing. By clicking "Accept All," you consent to analytics and marketing cookies. See our <a href="privacy.html">Privacy Policy</a> to learn more.</div>
  <div class="cookie-actions">
    <button class="cookie-btn cookie-decline" onclick="dismissCookie(false)">Manage / Decline</button>
    <button class="cookie-btn cookie-accept" onclick="dismissCookie(true)">Accept All</button>
  </div>
</div>

<script src="js/main.js"></script>
</body>
</html>
