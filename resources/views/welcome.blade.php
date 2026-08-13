<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jesús Urbiñez | Pasión por las MMA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Barlow:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Space+Mono:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
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
            <svg class="hero-cage" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <polygon points="200,10 340,80 380,220 300,360 100,360 20,220 60,80" stroke="rgba(237,230,214,0.14)"
                    stroke-width="1.5" />
                <polygon points="200,50 310,105 340,225 275,325 125,325 60,225 90,105" stroke="rgba(200,30,58,0.35)"
                    stroke-width="1.5" />
                <circle cx="200" cy="200" r="60" stroke="rgba(201,162,75,0.3)" stroke-width="1" />
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
                <p class="hero-sub">Y me apasionan las MMA — el octágono, el trabajo de piso, los cambios de nivel y
                    cada decisión dividida que me mantiene pegado a la pantalla.</p>
                <a href="#sobre-mi" class="hero-cta">
                    Ver la cartelera
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 4v16M5 13l7 7 7-7" />
                    </svg>
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
                        <p>Desde la primera vez que vi un cambio de guardia terminar en un <strong>armlock</strong>
                            perfecto, quedé enganchado. Las MMA no son solo el golpe que noquea: son ajedrez a toda
                            velocidad, distancia, timing y una voluntad que se ve a simple vista.</p>
                        <p>Sigo eventos, estudio técnica de disciplinas que ni practico, y puedo pasar una noche entera
                            analizando el juego de piernas de un peleador en cámara lenta. No compito — pero vivo cada
                            round como si estuviera en la esquina.</p>
                        <p>Esta página es mi pequeña cartelera personal: una forma de compartir por qué este deporte me
                            obsesiona tanto.</p>
                    </div>
                    <div class="about-visual reveal-up">
                        <svg viewBox="0 0 120 120" fill="none" stroke="var(--bone-dim)" stroke-width="1.4"
                            aria-hidden="true">
                            <polygon points="60,6 104,30 104,90 60,114 16,90 16,30" stroke="var(--crimson)" />
                            <circle cx="60" cy="60" r="26" stroke="var(--gold)" />
                            <path d="M60 34v10M60 76v10M34 60h10M76 60h10" stroke="var(--bone-dim)" />
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
                            <span class="fact">Desde el colegio, sin perderme una <strong>cartelera</strong>
                                importante.</span>
                        </div>
                        <div class="tape-row">
                            <span class="stat" data-count="120">0</span>
                            <span class="label">Peleas analizadas</span>
                            <span class="fact">Incluyendo repeticiones, breakdowns y comentarios técnicos.</span>
                        </div>
                        <div class="tape-row">
                            <span class="stat" data-count="6">0</span>
                            <span class="label">Disciplinas estudiadas</span>
                            <span class="fact">Del striking al grappling — <strong>todo</strong> suma al juego
                                completo.</span>
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
                        <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <circle cx="24" cy="18" r="10" />
                            <path d="M14 34c2-6 6-8 10-8s8 2 10 8" />
                        </svg>
                        <h3>Muay Thai</h3>
                        <p>El arte de las ocho extremidades. Codos, rodillas y un clinch que decide combates.</p>
                    </div>
                    <div class="disc-card">
                        <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <path d="M10 38c8-16 20-16 28-28" />
                            <circle cx="12" cy="36" r="4" />
                            <circle cx="36" cy="12" r="4" />
                        </svg>
                        <h3>Jiu-Jitsu Brasileño</h3>
                        <p>Ajedrez humano en el suelo. La técnica siempre encuentra la forma de ganar.</p>
                    </div>
                    <div class="disc-card">
                        <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <circle cx="16" cy="16" r="7" />
                            <path d="M23 23l14 14" />
                            <path d="M31 31l6-2 2 6" />
                        </svg>
                        <h3>Boxeo</h3>
                        <p>Manos rápidas, cabeza inteligente. El fundamento del striking a distancia.</p>
                    </div>
                    <div class="disc-card">
                        <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <path d="M8 30l14-14M8 30h10v-10" />
                            <circle cx="34" cy="14" r="6" />
                        </svg>
                        <h3>Wrestling</h3>
                        <p>Control de nivel y derribos. Quien domina el suelo, domina el ritmo.</p>
                    </div>
                    <div class="disc-card">
                        <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <path d="M10 40l12-24 8 6 8-16" />
                            <circle cx="38" cy="6" r="3" />
                        </svg>
                        <h3>Kickboxing</h3>
                        <p>Combinaciones fluidas de piernas y manos a máxima velocidad.</p>
                    </div>
                    <div class="disc-card">
                        <svg class="disc-icon" viewBox="0 0 48 48" fill="none" stroke="currentColor"
                            stroke-width="1.6">
                            <polygon points="24,4 40,14 40,34 24,44 8,34 8,14" />
                            <circle cx="24" cy="24" r="6" />
                        </svg>
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
                        <img src="https://placehold.co/600x800/141316/c81e3a?text=OCTAGON"
                            alt="Octágono — imagen de marcador de posición">
                        <span class="poster-tag">Fight night</span>
                    </div>
                    <div class="poster">
                        <img src="https://placehold.co/600x800/141316/c9a24b?text=GUANTES"
                            alt="Guantes — imagen de marcador de posición">
                        <span class="poster-tag">Preparación</span>
                    </div>
                    <div class="poster">
                        <img src="https://placehold.co/600x800/141316/ede6d6?text=GRAPPLING"
                            alt="Grappling — imagen de marcador de posición">
                        <span class="poster-tag">Trabajo de piso</span>
                    </div>
                    <div class="poster">
                        <img src="https://placehold.co/600x800/141316/c81e3a?text=CAMP"
                            alt="Campamento de entrenamiento — imagen de marcador de posición">
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
                    <p>Si también vives cada round al límite del sofá, escríbeme. Siempre hay una pelea de la que
                        hablar.</p>
                    <div class="social-row">
                        <a href="#" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <rect x="3" y="3" width="18" height="18" rx="5" />
                                <circle cx="12" cy="12" r="4" />
                                <circle cx="17.5" cy="6.5" r="1" />
                            </svg>
                        </a>
                        <a href="#" aria-label="X / Twitter">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <path d="M4 4l16 16M20 4L4 20" />
                            </svg>
                        </a>
                        <a href="#" aria-label="YouTube">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <rect x="3" y="6" width="18" height="12" rx="3" />
                                <path d="M11 10l4 2-4 2z" fill="currentColor" stroke="none" />
                            </svg>
                        </a>
                        <a href="mailto:jesus@example.com" aria-label="Correo">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7">
                                <rect x="3" y="5" width="18" height="14" rx="2" />
                                <path d="M3 7l9 6 9-6" />
                            </svg>
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
        }, {
            passive: true
        });

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
            }, {
                threshold: 0.15
            });
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
        }, {
            threshold: 0.4
        });
        counters.forEach(c => counterIO.observe(c));

        // Ligero parallax del octágono del hero (solo escritorio, sin reduced motion)
        if (!reduceMotion && window.matchMedia('(min-width: 900px)').matches) {
            const cage = document.querySelector('.hero-cage');
            window.addEventListener('mousemove', (e) => {
                const x = (e.clientX / window.innerWidth - 0.5) * 16;
                const y = (e.clientY / window.innerHeight - 0.5) * 16;
                cage.style.transform = `translateY(calc(-50% + ${y}px)) translateX(${x}px)`;
            }, {
                passive: true
            });
        }
    </script>



</body>

</html>
