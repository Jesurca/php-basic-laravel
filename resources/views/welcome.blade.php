<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Jesús Urbiñez | Pasión por las MMA</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Barlow:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#0b0b0c;
    --ink-2:#141316;
    --ink-3:#1c1a1e;
    --bone:#ede6d6;
    --bone-dim:#b9b2a2;
    --crimson:#c81e3a;
    --crimson-dim:#7d1526;
    --gold:#c9a24b;
    --steel:#3a3d42;
    --steel-line:rgba(237,230,214,0.12);
  }
 
  *{margin:0;padding:0;box-sizing:border-box;}
 
  html{scroll-behavior:smooth;}
 
  body{
    background:var(--ink);
    color:var(--bone);
    font-family:'Barlow',sans-serif;
    overflow-x:hidden;
    -webkit-font-smoothing:antialiased;
  }
 
  h1,h2,h3,.display{
    font-family:'Anton',sans-serif;
    font-weight:400;
    text-transform:uppercase;
    letter-spacing:0.01em;
    line-height:0.95;
  }
 
  .mono{
    font-family:'Space Mono',monospace;
  }
 
  a{color:inherit;text-decoration:none;}
 
  img{display:block;max-width:100%;}
 
  :focus-visible{
    outline:2px solid var(--gold);
    outline-offset:3px;
  }
 
  ::selection{
    background:var(--crimson);
    color:var(--bone);
  }
 
  .wrap{
    max-width:1180px;
    margin:0 auto;
    padding:0 28px;
  }
 
  .eyebrow{
    font-family:'Space Mono',monospace;
    font-size:0.72rem;
    letter-spacing:0.28em;
    text-transform:uppercase;
    color:var(--gold);
    display:inline-flex;
    align-items:center;
    gap:10px;
  }
  .eyebrow::before{
    content:'';
    width:24px;
    height:1px;
    background:var(--gold);
    display:inline-block;
  }
 
  /* ---------- NAV ---------- */
  header{
    position:fixed;
    top:0;left:0;right:0;
    z-index:100;
    padding:18px 0;
    transition:background .35s ease, padding .35s ease, border-color .35s ease;
    border-bottom:1px solid transparent;
  }
  header.scrolled{
    background:rgba(11,11,12,0.88);
    backdrop-filter:blur(10px);
    padding:12px 0;
    border-bottom:1px solid var(--steel-line);
  }
  nav.wrap{
    display:flex;
    align-items:center;
    justify-content:space-between;
  }
  .brand{
    font-family:'Anton',sans-serif;
    font-size:1.1rem;
    letter-spacing:0.06em;
    display:flex;
    align-items:center;
    gap:10px;
  }
  .brand-badge{
    width:34px;height:34px;
    border:2px solid var(--crimson);
    border-radius:50%;
    display:flex;align-items:center;justify-content:center;
    font-size:0.75rem;
    color:var(--bone);
  }
  .nav-links{
    display:flex;
    gap:28px;
    list-style:none;
  }
  .nav-links a{
    font-family:'Space Mono',monospace;
    font-size:0.72rem;
    letter-spacing:0.14em;
    color:var(--bone-dim);
    text-transform:uppercase;
    transition:color .25s ease;
    position:relative;
  }
  .nav-links a:hover, .nav-links a:focus-visible{color:var(--bone);}
  .nav-links a span{color:var(--crimson);margin-right:6px;}
  .nav-toggle{
    display:none;
    flex-direction:column;
    gap:5px;
    background:none;
    border:none;
    cursor:pointer;
    padding:6px;
  }
  .nav-toggle span{
    width:22px;height:2px;background:var(--bone);display:block;
  }
 
  @media (max-width: 820px){
    .nav-links{
      position:fixed;
      top:0;right:0;
      height:100vh;
      width:min(78vw,320px);
      background:var(--ink-2);
      flex-direction:column;
      justify-content:center;
      align-items:flex-start;
      gap:26px;
      padding:0 40px;
      transform:translateX(100%);
      transition:transform .4s cubic-bezier(.77,0,.18,1);
      border-left:1px solid var(--steel-line);
    }
    .nav-links.open{transform:translateX(0);}
    .nav-toggle{display:flex;}
  }
 
  /* ---------- HERO ---------- */
  .hero{
    position:relative;
    min-height:100vh;
    display:flex;
    align-items:center;
    padding:140px 0 100px;
    background:
      radial-gradient(ellipse 60% 50% at 78% 20%, rgba(200,30,58,0.28), transparent 60%),
      radial-gradient(ellipse 50% 40% at 10% 90%, rgba(201,162,75,0.10), transparent 60%),
      var(--ink);
    overflow:hidden;
  }
  .hero-cage{
    position:absolute;
    right:-10%;
    top:50%;
    transform:translateY(-50%);
    width:780px;
    max-width:70vw;
    opacity:0.5;
    pointer-events:none;
  }
  .hero-content{
    position:relative;
    z-index:2;
    max-width:760px;
  }
  .hero-meta-row{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    margin-bottom:22px;
  }
  .tag{
    font-family:'Space Mono',monospace;
    font-size:0.68rem;
    letter-spacing:0.12em;
    text-transform:uppercase;
    padding:6px 12px;
    border:1px solid var(--steel-line);
    color:var(--bone-dim);
    border-radius:2px;
  }
  .tag.hot{
    border-color:var(--crimson);
    color:var(--bone);
    background:rgba(200,30,58,0.12);
  }
  .hero h1{
    font-size:clamp(2.8rem,8vw,6rem);
    color:var(--bone);
    overflow:hidden;
  }
  .hero h1 .line{
    display:block;
    clip-path:inset(0 100% 0 0);
    animation:reveal .9s cubic-bezier(.65,0,.15,1) forwards;
  }
  .hero h1 .line:nth-child(2){animation-delay:.22s; color:var(--crimson);}
  @keyframes reveal{to{clip-path:inset(0 0 0 0);}}
 
  .hero-sub{
    margin-top:22px;
    font-size:clamp(1.05rem,2vw,1.35rem);
    color:var(--bone-dim);
    max-width:520px;
    font-style:italic;
    border-left:2px solid var(--gold);
    padding-left:18px;
  }
  .hero-cta{
    margin-top:44px;
    display:inline-flex;
    align-items:center;
    gap:14px;
    background:var(--crimson);
    color:var(--bone);
    font-family:'Space Mono',monospace;
    font-size:0.78rem;
    letter-spacing:0.16em;
    text-transform:uppercase;
    padding:16px 26px;
    border:1px solid var(--crimson);
    transition:background .25s ease, color .25s ease, transform .25s ease;
  }
  .hero-cta:hover, .hero-cta:focus-visible{
    background:transparent;
    color:var(--bone);
    transform:translateY(-2px);
  }
  .hero-cta svg{width:16px;height:16px;animation:bob 1.6s ease-in-out infinite;}
  @keyframes bob{0%,100%{transform:translateY(0);}50%{transform:translateY(5px);}}
 
  .scroll-hint{
    position:absolute;
    bottom:34px;left:28px;
    font-family:'Space Mono',monospace;
    font-size:0.65rem;
    letter-spacing:0.2em;
    color:var(--bone-dim);
    writing-mode:vertical-rl;
    display:flex;
    align-items:center;
    gap:14px;
    z-index:2;
  }
  .scroll-hint::after{
    content:'';
    width:1px;height:50px;
    background:linear-gradient(var(--bone-dim),transparent);
  }
 
  /* ---------- SECTION shell ---------- */
  section{
    position:relative;
    padding:120px 0;
    border-top:1px solid var(--steel-line);
  }
  .round-label{
    display:flex;
    align-items:baseline;
    gap:16px;
    margin-bottom:54px;
  }
  .round-label .num{
    font-family:'Space Mono',monospace;
    font-size:0.85rem;
    color:var(--crimson);
    letter-spacing:0.1em;
  }
  .round-label h2{
    font-size:clamp(1.8rem,4vw,2.6rem);
  }
 
  .reveal-up{
    opacity:0;
    transform:translateY(34px);
    transition:opacity .8s ease, transform .8s cubic-bezier(.2,.7,.3,1);
  }
  .reveal-up.in{opacity:1;transform:translateY(0);}
 
  /* ---------- ABOUT ---------- */
  .about-grid{
    display:grid;
    grid-template-columns:1.1fr 0.9fr;
    gap:70px;
    align-items:center;
  }
  .about-grid p{
    color:var(--bone-dim);
    font-size:1.05rem;
    line-height:1.85;
    margin-bottom:20px;
  }
  .about-grid p strong{color:var(--bone);font-weight:600;}
  .about-visual{
    position:relative;
    aspect-ratio:4/5;
    border:1px solid var(--steel-line);
    background:var(--ink-2);
    display:flex;align-items:center;justify-content:center;
  }
  .about-visual svg{width:60%;height:60%;}
  .corner-stamp{
    position:absolute;
    bottom:-18px;right:-18px;
    background:var(--gold);
    color:var(--ink);
    font-family:'Space Mono',monospace;
    font-size:0.65rem;
    letter-spacing:0.1em;
    padding:10px 14px;
    text-transform:uppercase;
    transform:rotate(-3deg);
  }
 
  @media(max-width:860px){
    .about-grid{grid-template-columns:1fr;gap:40px;}
    .about-visual{max-width:320px;aspect-ratio:1/1;}
  }
 
  /* ---------- TALE OF THE TAPE ---------- */
  .tape-card{
    border:1px solid var(--steel-line);
    background:var(--ink-2);
  }
  .tape-head{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:22px 30px;
    border-bottom:1px solid var(--steel-line);
    font-family:'Space Mono',monospace;
    font-size:0.72rem;
    letter-spacing:0.16em;
    text-transform:uppercase;
    color:var(--bone-dim);
  }
  .tape-head .live{
    display:flex;align-items:center;gap:8px;color:var(--crimson);
  }
  .tape-head .live::before{
    content:'';width:7px;height:7px;border-radius:50%;background:var(--crimson);
    animation:pulse 1.4s ease-in-out infinite;
  }
  @keyframes pulse{0%,100%{opacity:1;}50%{opacity:.25;}}
 
  .tape-rows{
    display:grid;
  }
  .tape-row{
    display:grid;
    grid-template-columns:1fr auto 1fr;
    align-items:center;
    padding:26px 30px;
    border-bottom:1px solid var(--steel-line);
    gap:16px;
  }
  .tape-row:last-child{border-bottom:none;}
  .tape-row .stat{
    font-family:'Space Mono',monospace;
    font-size:clamp(1.6rem,4vw,2.4rem);
    color:var(--bone);
    text-align:right;
  }
  .tape-row .label{
    text-align:center;
    color:var(--bone-dim);
    font-size:0.78rem;
    letter-spacing:0.1em;
    text-transform:uppercase;
  }
  .tape-row .fact{
    font-size:0.95rem;
    color:var(--bone-dim);
    text-align:left;
    line-height:1.5;
  }
  .tape-row .fact strong{color:var(--gold);font-weight:600;font-family:'Space Mono',monospace;}
 
  @media(max-width:640px){
    .tape-row{grid-template-columns:1fr;gap:6px;text-align:left;}
    .tape-row .stat{text-align:left;}
    .tape-row .label{text-align:left;}
  }
 
  /* ---------- DISCIPLINES ---------- */
  .disc-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:1px;
    background:var(--steel-line);
    border:1px solid var(--steel-line);
  }
  .disc-card{
    background:var(--ink);
    padding:38px 28px;
    transition:background .3s ease, transform .3s ease;
  }
  .disc-card:hover{
    background:var(--ink-2);
    transform:translateY(-4px);
  }
  .disc-icon{
    width:44px;height:44px;
    margin-bottom:22px;
    color:var(--crimson);
  }
  .disc-card h3{
    font-size:1.2rem;
    margin-bottom:10px;
    letter-spacing:0.02em;
  }
  .disc-card p{
    color:var(--bone-dim);
    font-size:0.92rem;
    line-height:1.6;
  }
  @media(max-width:860px){
    .disc-grid{grid-template-columns:repeat(2,1fr);}
  }
  @media(max-width:560px){
    .disc-grid{grid-template-columns:1fr;}
  }
 
  /* ---------- GALLERY ---------- */
  .gallery-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:18px;
  }
  .poster{
    position:relative;
    aspect-ratio:3/4;
    overflow:hidden;
    background:var(--ink-2);
    border:1px solid var(--steel-line);
  }
  .poster img{
    width:100%;height:100%;object-fit:cover;
    filter:grayscale(35%) contrast(1.1) brightness(.85);
    transition:transform .6s ease, filter .6s ease;
  }
  .poster:hover img{
    transform:scale(1.08);
    filter:grayscale(0%) contrast(1.1) brightness(1);
  }
  .poster-tag{
    position:absolute;
    left:0;bottom:0;right:0;
    padding:14px 16px;
    background:linear-gradient(to top, rgba(11,11,12,0.92), transparent);
    font-family:'Space Mono',monospace;
    font-size:0.68rem;
    letter-spacing:0.1em;
    text-transform:uppercase;
    color:var(--bone);
  }
  @media(max-width:860px){
    .gallery-grid{grid-template-columns:repeat(2,1fr);}
  }
 
  /* ---------- FOOTER / DECISION ---------- */
  footer{
    padding:90px 0 40px;
    border-top:1px solid var(--steel-line);
  }
  .decision-card{
    border:1px solid var(--steel-line);
    padding:50px 40px;
    text-align:center;
    background:radial-gradient(ellipse at center, rgba(200,30,58,0.08), transparent 70%);
    margin-bottom:60px;
  }
  .decision-card .eyebrow{justify-content:center;margin-bottom:18px;}
  .decision-card .eyebrow::before{display:none;}
  .decision-card h2{
    font-size:clamp(1.8rem,5vw,3rem);
    margin-bottom:14px;
  }
  .decision-card p{color:var(--bone-dim);max-width:480px;margin:0 auto 30px;}
 
  .social-row{
    display:flex;
    justify-content:center;
    gap:16px;
    flex-wrap:wrap;
  }
  .social-row a{
    width:46px;height:46px;
    border:1px solid var(--steel-line);
    border-radius:50%;
    display:flex;align-items:center;justify-content:center;
    transition:border-color .25s ease, color .25s ease, transform .25s ease;
    color:var(--bone-dim);
  }
  .social-row a:hover, .social-row a:focus-visible{
    border-color:var(--crimson);
    color:var(--bone);
    transform:translateY(-3px);
  }
  .social-row svg{width:18px;height:18px;}
 
  .foot-bottom{
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
    gap:12px;
    font-family:'Space Mono',monospace;
    font-size:0.7rem;
    letter-spacing:0.08em;
    color:var(--bone-dim);
    text-transform:uppercase;
  }
 
  @media (prefers-reduced-motion: reduce){
    *{animation-duration:0.01ms !important; animation-iteration-count:1 !important; transition-duration:0.01ms !important; scroll-behavior:auto !important;}
    .hero h1 .line{clip-path:inset(0 0 0 0);}
  }
</style>
</head>
<body>
 
<header id="siteHeader">
  <nav class="wrap">
    <a href="#top" class="brand">
      <span class="brand-badge">JU</span>
      URBIÑEZ
    </a>
    <button class="nav-toggle" id="navToggle" aria-label="Abrir menú" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links" id="navLinks">
      <li><a href="#sobre-mi"><span>01</span>Sobre mí</a></li>
      <li><a href="#tape"><span>02</span>Tale of the Tape</a></li>
      <li><a href="#disciplinas"><span>03</span>Disciplinas</a></li>
      <li><a href="#galeria"><span>04</span>Galería</a></li>
      <li><a href="#contacto"><span>05</span>Contacto</a></li>
    </ul>
  </nav>
</header>
 
<main id="top">
 
  <!-- HERO -->
  <section class="hero" style="border-top:none;padding-top:140px;">
    <svg class="hero-cage" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <polygon points="200,10 340,80 380,220 300,360 100,360 20,220 60,80" stroke="rgba(237,230,214,0.14)" stroke-width="1.5"/>
      <polygon points="200,50 310,105 340,225 275,325 125,325 60,225 90,105" stroke="rgba(200,30,58,0.35)" stroke-width="1.5"/>
      <circle cx="200" cy="200" r="60" stroke="rgba(201,162,75,0.3)" stroke-width="1"/>
    </svg>
 
    <div class="wrap hero-content">
      <div class="hero-meta-row">
        <span class="tag hot">Evento principal</span>
        <span class="tag">Bogotá, Colombia</span>
        <span class="tag">Categoría: Aficionado de por vida</span>
      </div>
      <h1>
        <span class="line">Soy Jesús</span>
        <span class="line">Urbiñez</span>
      </h1>
      <p class="hero-sub">Y me apasionan las MMA — el octágono, el trabajo de piso, los cambios de nivel y cada decisión dividida que me mantiene pegado a la pantalla.</p>
      <a href="#sobre-mi" class="hero-cta">
        Ver la cartelera
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 4v16M5 13l7 7 7-7"/></svg>
      </a>
    </div>
 
    <span class="scroll-hint">DESLIZA PARA VER EL COMBATE</span>
  </section>
 
  <!-- ROUND 1 - SOBRE MÍ -->
  <section id="sobre-mi">
    <div class="wrap">
      <div class="round-label reveal-up">
        <span class="num mono">ROUND 01</span>
        <h2>Sobre mí</h2>
      </div>
      <div class="about-grid">
        <div class="reveal-up">
          <p>Desde la primera vez que vi un cambio de guardia terminar en un <strong>armlock</strong> perfecto, quedé enganchado. Las MMA no son solo el golpe que noquea: son ajedrez a toda velocidad, distancia, timing y una voluntad que se ve a simple vista.</p>
          <p>Sigo eventos, estudio técnica de disciplinas que ni practico, y puedo pasar una noche entera analizando el juego de piernas de un peleador en cámara lenta. No compito — pero vivo cada round como si estuviera en la esquina.</p>
          <p>Esta página es mi pequeña cartelera personal: una forma de compartir por qué este deporte me obsesiona tanto.</p>
        </div>
        <div class="about-visual reveal-up">
          <svg viewBox="0 0 120 120" fill="none" stroke="var(--bone-dim)" stroke-width="1.4" aria-hidden="true">
            <polygon points="60,6 104,30 104,90 60,114 16,90 16,30" stroke="var(--crimson)"/>
            <circle cx="60" cy="60" r="26" stroke="var(--gold)"/>
            <path d="M60 34v10M60 76v10M34 60h10M76 60h10" stroke="var(--bone-dim)"/>
          </svg>
          <span class="corner-stamp">Fan #1</span>
        </div>
      </div>
    </div>
  </section>
 
  <!-- ROUND 2 - TALE OF THE TAPE -->
  <section id="tape">
    <div class="wrap">
      <div class="round-label reveal-up">
        <span class="num mono">ROUND 02</span>
        <h2>Tale of the tape</h2>
      </div>
 
      <div class="tape-card reveal-up">
        <div class="tape-head">
          <span>Ficha del aficionado</span>
          <span class="live">En vivo</span>
        </div>
        <div class="tape-rows">
          <div class="tape-row">
            <span class="stat" data-count="8">0</span>
            <span class="label">Años siguiendo MMA</span>
            <span class="fact">Desde el colegio, sin perderme una <strong>cartelera</strong> importante.</span>
          </div>
          <div class="tape-row">
            <span class="stat" data-count="120">0</span>
            <span class="label">Peleas analizadas</span>
            <span class="fact">Incluyendo repeticiones, breakdowns y comentarios técnicos.</span>
          </div>
          <div class="tape-row">
            <span class="stat" data-count="6">0</span>
            <span class="label">Disciplinas estudiadas</span>
            <span class="fact">Del striking al grappling — <strong>todo</strong> suma al juego completo.</span>
          </div>
          <div class="tape-row">
            <span class="stat" data-count="100">0<span class="mono">%</span></span>
            <span class="label">Nivel de pasión</span>
            <span class="fact">Cada evento se ve como si fuera el mío.</span>
          </div>
        </div>
      </div>
    </div>
  </section>
 
  <!-- ROUND 3 - DISCIPLINAS -->
  <section id="disciplinas">
    <div class="wrap">
      <div class="round-label reveal-up">
        <span class="num mono">ROUND 03</span>
        <h2>Disciplinas que admiro</h2>
      </div>
 
      <div class="disc-grid reveal-up">
        <div class="disc-card">
          <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="24" cy="18" r="10"/><path d="M14 34c2-6 6-8 10-8s8 2 10 8"/></svg>
          <h3>Muay Thai</h3>
          <p>El arte de las ocho extremidades. Codos, rodillas y un clinch que decide combates.</p>
        </div>
        <div class="disc-card">
          <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M10 38c8-16 20-16 28-28"/><circle cx="12" cy="36" r="4"/><circle cx="36" cy="12" r="4"/></svg>
          <h3>Jiu-Jitsu Brasileño</h3>
          <p>Ajedrez humano en el suelo. La técnica siempre encuentra la forma de ganar.</p>
        </div>
        <div class="disc-card">
          <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="16" cy="16" r="7"/><path d="M23 23l14 14"/><path d="M31 31l6-2 2 6"/></svg>
          <h3>Boxeo</h3>
          <p>Manos rápidas, cabeza inteligente. El fundamento del striking a distancia.</p>
        </div>
        <div class="disc-card">
          <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M8 30l14-14M8 30h10v-10"/><circle cx="34" cy="14" r="6"/></svg>
          <h3>Wrestling</h3>
          <p>Control de nivel y derribos. Quien domina el suelo, domina el ritmo.</p>
        </div>
        <div class="disc-card">
          <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M10 40l12-24 8 6 8-16"/><circle cx="38" cy="6" r="3"/></svg>
          <h3>Kickboxing</h3>
          <p>Combinaciones fluidas de piernas y manos a máxima velocidad.</p>
        </div>
        <div class="disc-card">
          <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.6"><polygon points="24,4 40,14 40,34 24,44 8,34 8,14"/><circle cx="24" cy="24" r="6"/></svg>
          <h3>MMA</h3>
          <p>Donde todo se mezcla. El deporte más completo, sin lugar donde esconderse.</p>
        </div>
      </div>
    </div>
  </section>
 
  <!-- ROUND 4 - GALERÍA -->
  <section id="galeria">
    <div class="wrap">
      <div class="round-label reveal-up">
        <span class="num mono">ROUND 04</span>
        <h2>Galería</h2>
      </div>
      <div class="gallery-grid reveal-up">
        <div class="poster">
          <img src="https://placehold.co/600x800/141316/c81e3a?text=OCTAGON" alt="Octágono — imagen de marcador de posición">
          <span class="poster-tag">Fight night</span>
        </div>
        <div class="poster">
          <img src="https://placehold.co/600x800/141316/c9a24b?text=GUANTES" alt="Guantes — imagen de marcador de posición">
          <span class="poster-tag">Preparación</span>
        </div>
        <div class="poster">
          <img src="https://placehold.co/600x800/141316/ede6d6?text=GRAPPLING" alt="Grappling — imagen de marcador de posición">
          <span class="poster-tag">Trabajo de piso</span>
        </div>
        <div class="poster">
          <img src="https://placehold.co/600x800/141316/c81e3a?text=CAMP" alt="Campamento de entrenamiento — imagen de marcador de posición">
          <span class="poster-tag">Camp</span>
        </div>
      </div>
    </div>
  </section>
 
  <!-- DECISIÓN / CONTACTO -->
  <footer id="contacto">
    <div class="wrap">
      <div class="decision-card reveal-up">
        <span class="eyebrow">Decisión unánime</span>
        <h2>Hablemos de MMA</h2>
        <p>Si también vives cada round al límite del sofá, escríbeme. Siempre hay una pelea de la que hablar.</p>
        <div class="social-row">
          <a href="#" aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1"/></svg>
          </a>
          <a href="#" aria-label="X / Twitter">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4l16 16M20 4L4 20"/></svg>
          </a>
          <a href="#" aria-label="YouTube">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="6" width="18" height="12" rx="3"/><path d="M11 10l4 2-4 2z" fill="currentColor" stroke="none"/></svg>
          </a>
          <a href="mailto:jesus@example.com" aria-label="Correo">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
          </a>
        </div>
      </div>
 
      <div class="foot-bottom">
        <span>© <span id="year"></span> Jesús Urbiñez</span>
        <span>Hecho con pasión por las MMA</span>
      </div>
    </div>
  </footer>
 
</main>
 
<script>
  // Año dinámico en el footer
  document.getElementById('year').textContent = new Date().getFullYear();
 
  // Header: fondo al hacer scroll
  const header = document.getElementById('siteHeader');
  window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 40);
  }, { passive: true });
 
  // Menú móvil
  const navToggle = document.getElementById('navToggle');
  const navLinks = document.getElementById('navLinks');
  navToggle.addEventListener('click', () => {
    const open = navLinks.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', open);
  });
  navLinks.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      navLinks.classList.remove('open');
      navToggle.setAttribute('aria-expanded', false);
    });
  });
 
  // Revelado al hacer scroll
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const revealEls = document.querySelectorAll('.reveal-up');
  if (reduceMotion) {
    revealEls.forEach(el => el.classList.add('in'));
  } else {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    revealEls.forEach(el => io.observe(el));
  }
 
  // Contadores animados (Tale of the Tape)
  const counters = document.querySelectorAll('.stat[data-count]');
  const animateCount = (el) => {
    const target = parseInt(el.getAttribute('data-count'), 10);
    const suffixEl = el.querySelector('.mono');
    const suffix = suffixEl ? suffixEl.outerHTML : '';
    if (reduceMotion) {
      el.innerHTML = target + suffix;
      return;
    }
    let start = 0;
    const duration = 1200;
    const startTime = performance.now();
    function tick(now) {
      const progress = Math.min((now - startTime) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const value = Math.floor(eased * target);
      el.innerHTML = value + suffix;
      if (progress < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  };
  const counterIO = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCount(entry.target);
        counterIO.unobserve(entry.target);
      }
    });
  }, { threshold: 0.4 });
  counters.forEach(c => counterIO.observe(c));
 
  // Ligero parallax del octágono del hero (solo escritorio, sin reduced motion)
  if (!reduceMotion && window.matchMedia('(min-width: 900px)').matches) {
    const cage = document.querySelector('.hero-cage');
    window.addEventListener('mousemove', (e) => {
      const x = (e.clientX / window.innerWidth - 0.5) * 16;
      const y = (e.clientY / window.innerHeight - 0.5) * 16;
      cage.style.transform = `translateY(calc(-50% + ${y}px)) translateX(${x}px)`;
    }, { passive: true });
  }
</script>
 
</body>
</html>
 