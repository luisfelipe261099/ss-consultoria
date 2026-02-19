<?php
// SS Consultoria Ambiental - Pagina Sobre Nós
$company_name = "SS Consultoria Ambiental";
$whatsapp_number = "5511999999999";
$email = "contato@ssconsultoriaambiental.com.br";
$phone = "(11) 99999-9999";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós -
        <?php echo $company_name; ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --green: #4CAF50;
            --green-dark: #2e7d32;
            --green-light: #81C784;
            --teal: #26a69a;
            --teal-dark: #00796b;
            --white: #ffffff;
            --gray-light: #f5f7f5;
            --gray: #666;
            --dark: #1a2e1a;
            --text: #333;
            --font-main: 'Montserrat', sans-serif;
            --font-body: 'Open Sans', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-body);
            color: var(--text);
            overflow-x: hidden;
            background-color: #fcfdfc;
        }

        /* ===== NAVBAR ===== */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            padding: 10px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            z-index: 1001;
        }

        .nav-logo-icon {
            height: 110px;
            width: auto;
            max-width: 320px;
            display: block;
            object-fit: contain;
            transition: all 0.3s ease;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 32px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--text);
            font-family: var(--font-main);
            font-size: 13.5px;
            font-weight: 500;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: var(--green-dark);
        }

        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            flex-direction: column;
            gap: 6px;
            cursor: pointer;
            z-index: 1001;
            padding: 10px;
        }

        .menu-toggle span {
            display: block;
            width: 28px;
            height: 3px;
            background: var(--dark);
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .nav-cta {
            background: var(--green-dark);
            color: white !important;
            padding: 10px 22px;
            border-radius: 6px;
            font-weight: 600 !important;
            transition: background 0.2s !important;
        }

        .nav-cta:hover {
            background: var(--green) !important;
            color: white !important;
        }

        /* ===== HERO INTERNO ===== */
        .page-hero {
            padding: 220px 40px 100px;
            background: linear-gradient(rgba(26, 46, 26, 0.8), rgba(26, 46, 26, 0.8)), url('1.png');
            background-size: cover;
            background-position: center;
            text-align: center;
            color: white;
        }

        .page-hero h1 {
            font-family: var(--font-main);
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        /* ===== CONTEUDO SOBRE ===== */
        .sobre-intro {
            padding: 100px 40px;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .sobre-text h2 {
            font-family: var(--font-main);
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 24px;
            line-height: 1.2;
        }

        .sobre-text p {
            font-size: 16px;
            line-height: 1.8;
            color: var(--gray);
            margin-bottom: 20px;
        }

        .sobre-img-frame {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }

        .sobre-img-frame img {
            width: 100%;
            display: block;
        }

        /* ===== MISSÃO VISÃO VALORES ===== */
        .mvv-section {
            background: var(--gray-light);
            padding: 100px 40px;
        }

        .mvv-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .mvv-card {
            background: white;
            padding: 40px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            transition: transform 0.3s;
        }

        .mvv-card:hover {
            transform: translateY(-5px);
        }

        .mvv-icon {
            font-size: 40px;
            margin-bottom: 20px;
            display: block;
        }

        .mvv-card h3 {
            font-family: var(--font-main);
            color: var(--teal-dark);
            margin-bottom: 15px;
            font-size: 22px;
        }

        .mvv-card p {
            font-size: 15px;
            color: var(--gray);
            line-height: 1.6;
        }

        /* ===== DIFERENCIAIS ===== */
        .diferenciais {
            padding: 100px 40px;
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        }

        .diferenciais h2 {
            font-family: var(--font-main);
            font-size: 32px;
            margin-bottom: 50px;
        }

        .dif-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            text-align: left;
        }

        .dif-item {
            display: flex;
            gap: 15px;
            align-items: flex-start;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            border-left: 5px solid var(--green);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.02);
        }

        .dif-item strong {
            display: block;
            color: var(--dark);
            margin-bottom: 5px;
        }

        .dif-item span {
            font-size: 14px;
            color: var(--gray);
        }

        /* ===== CTA ===== */
        .cta-section {
            background: linear-gradient(135deg, var(--teal-dark) 0%, var(--green-dark) 100%);
            padding: 100px 40px;
            text-align: center;
            color: white;
        }

        .cta-section h2 {
            font-family: var(--font-main);
            font-size: 40px;
            margin-bottom: 20px;
        }

        .btn-white {
            background: white;
            color: var(--green-dark);
            padding: 16px 40px;
            border-radius: 8px;
            font-family: var(--font-main);
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        /* ===== FOOTER ===== */
        footer {
            background: var(--dark);
            color: rgba(255, 255, 255, 0.7);
            text-align: center;
            padding: 40px;
            font-size: 14px;
        }

        footer a {
            color: var(--green-light);
            text-decoration: none;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1024px) {
            nav {
                padding: 5px 20px;
            }

            .nav-logo-icon {
                height: 90px;
            }

            .menu-toggle {
                display: flex;
            }

            .nav-links {
                position: fixed;
                top: 0;
                right: -100%;
                width: 80%;
                height: 100vh;
                background: white;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 25px;
                box-shadow: -10px 0 30px rgba(0, 0, 0, 0.1);
                transition: right 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            }

            .nav-links.active {
                right: 0;
            }

            .nav-links a {
                font-size: 18px;
                font-weight: 600;
            }

            /* Toggle Animation */
            .menu-toggle.active span:nth-child(1) {
                transform: rotate(45deg) translate(6px, 6px);
            }

            .menu-toggle.active span:nth-child(2) {
                opacity: 0;
            }

            .menu-toggle.active span:nth-child(3) {
                transform: rotate(-45deg) translate(7px, -7px);
            }
        }

        @media (max-width: 900px) {
            .page-hero {
                padding: 160px 20px 60px;
            }

            .page-hero h1 {
                font-size: 36px;
            }

            .sobre-intro {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 60px 20px;
            }

            .sobre-text h2 {
                font-size: 28px;
            }

            .mvv-section {
                padding: 60px 20px;
            }

            .mvv-grid {
                grid-template-columns: 1fr;
            }

            .dif-list {
                grid-template-columns: 1fr;
            }

            .diferenciais {
                padding: 60px 20px;
            }
        }

        @media (max-width: 600px) {
            .nav-logo-icon {
                height: 80px;
                max-width: 200px;
            }

            .cta-section h2 {
                font-size: 28px;
            }

            .btn-white {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <a href="index.php" class="nav-logo">
            <img src="logo1.png" alt="SS Consultoria Ambiental" class="nav-logo-icon">
        </a>
        <div class="menu-toggle" id="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-links">
            <li><a href="index.php#inicio">Inicio</a></li>
            <li><a href="sobre.php">Sobre Nós</a></li>
            <li><a href="index.php#servicos">Serviços</a></li>
            <li><a href="projetos.php">Projetos</a></li>
            <li><a href="index.php#contato">Contato</a></li>
            <li><a href="index.php#contato" class="nav-cta">Contato</a></li>
        </ul>
    </nav>

    <!-- HERO -->
    <section class="page-hero">
        <h1>Sobre a SS Consultoria</h1>
        <p>Compromisso com o meio ambiente e com o sucesso do seu negócio.</p>
    </section>

    <!-- QUEM SOMOS -->
    <section class="sobre-intro">
        <div class="sobre-text">
            <h2>Transformando desafios ambientais em <span>oportunidades sustentáveis.</span></h2>
            <p>
                A SS Consultoria Ambiental nasceu com a missão de oferecer soluções técnicas de ponta para empresas que
                buscam excelência em conformidade ambiental. Com anos de experiência no mercado, nossa equipe
                multidisciplinar une engenharia, biologia e gestão estratégica.
            </p>
            <p>
                Acreditamos que a sustentabilidade não é apenas uma obrigação legal, mas um diferencial competitivo
                capaz de reduzir custos, otimizar processos e elevar a reputação institucional de nossos clientes.
            </p>
        </div>
        <div class="sobre-img-frame">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800&q=80" alt="Nosso Escritório">
        </div>
    </section>

    <!-- MVV -->
    <section class="mvv-section">
        <div class="mvv-grid">
            <div class="mvv-card">
                <span class="mvv-icon">🎯</span>
                <h3>Missão</h3>
                <p>Prover soluções ambientais inovadoras e eficazes que garantam a conformidade legal e promovam o
                    desenvolvimento sustentável de nossos clientes.</p>
            </div>
            <div class="mvv-card">
                <span class="mvv-icon">👁️</span>
                <h3>Visão</h3>
                <p>Ser referência nacional em consultoria ambiental, reconhecida pela excelência técnica, ética
                    profissional e compromisso com o futuro do planeta.</p>
            </div>
            <div class="mvv-card">
                <span class="mvv-icon">💎</span>
                <h3>Valores</h3>
                <p>Integridade absoluta, responsabilidade socioambiental, inovação constante, transparência nos
                    processos e paixão pela proteção da natureza.</p>
            </div>
        </div>
    </section>

    <!-- DIFERENCIAIS -->
    <section class="diferenciais">
        <h2>Por que escolher a SS Consultoria?</h2>
        <div class="dif-list">
            <div class="dif-item">
                <div>
                    <strong>Equipe Multidisciplinar</strong>
                    <span>Especialistas em diversas áreas para uma visão 360º de cada projeto.</span>
                </div>
            </div>
            <div class="dif-item">
                <div>
                    <strong>Atendimento Personalizado</strong>
                    <span>Entendemos a particularidade de cada setor industrial e cada região.</span>
                </div>
            </div>
            <div class="dif-item">
                <div>
                    <strong>Foco em Resultados</strong>
                    <span>Metodologias que visam redução de custos e eficiência operacional real.</span>
                </div>
            </div>
            <div class="dif-item">
                <div>
                    <strong>Conformidade Legal</strong>
                    <span>Monitoramento constante das legislações federais, estaduais e municipais.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <h2>Vamos construir um futuro sustentável juntos?</h2>
        <p>Entre em contato com nossos especialistas e solicite um diagnóstico ambiental gratuito.</p>
        <a href="index.php#contato" class="btn-white">Falar com Consultor</a>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>&copy;
            <?php echo date('Y'); ?>
            <?php echo $company_name; ?>. Todos os direitos reservados.
        </p>
    </footer>

    <script>
        // Menu Mobile Toggle
        const menuToggle = document.getElementById('mobile-menu');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Fechar menu ao clicar em um link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    </script>
</body>

</html>