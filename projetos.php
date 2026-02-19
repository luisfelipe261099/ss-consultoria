<?php
// SS Consultoria Ambiental - Pagina de Projetos
$company_name = "SS Consultoria Ambiental";
$whatsapp_number = "5511999999999";
$email = "contato@ssconsultoriaambiental.com.br";
$phone = "(11) 99999-9999";

$project_categories = ["Todos", "Gestão de Resíduos", "Tratamento de Efluentes", "Licenciamento", "Sustentabilidade"];

$projects = [
    [
        "category" => "Tratamento de Efluentes",
        "title" => "Sistema de Reuso de Água - Indústria Têxtil",
        "client" => "EcoTextil S.A.",
        "location" => "Joinville - SC",
        "description" => "Implementação de sistema ultra moderno de filtragem e tratamento biológico para reuso de 85% do efluente no processo produtivo.",
        "technical_info" => "Capacidade de 50m³/dia, redução de 40% na conta de água, adequação total à CONAMA 430.",
        "img" => "https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=800&q=80"
    ],
    [
        "category" => "Gestão de Resíduos",
        "title" => "Gestão de Resíduos Hospitalares (PGRSS)",
        "client" => "Rede Hospitalar São José",
        "location" => "São Paulo - SP",
        "description" => "Otimização logística e destinação final de resíduos infectantes e químicos para uma rede com 5 unidades hospitalares.",
        "technical_info" => "Redução de 25% nos custos de destinação, treinamento de 500+ colaboradores, conformidade com a RDC 222/18.",
        "img" => "https://images.unsplash.com/photo-1516549655169-df83a0774514?w=800&q=80"
    ],
    [
        "category" => "Licenciamento",
        "title" => "Licenciamento Ambiental - Usina Fotovoltaica",
        "client" => "Solaris Energy",
        "location" => "Petrolina - PE",
        "description" => "Processo completo de licenciamento (LP, LI e LO) para parque solar de 50MW.",
        "technical_info" => "Estudo de impacto ambiental (EIA/RIMA), plano de monitoramento da fauna local, aprovação em tempo recorde.",
        "img" => "https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?w=800&q=80"
    ],
    [
        "category" => "Sustentabilidade",
        "title" => "Consultoria para Certificação ISO 14001",
        "client" => "AutoParts Global",
        "location" => "Curitiba - PR",
        "description" => "Preparação e auditoria interna para a certificação ambiental internacional em fábrica de autopeças.",
        "technical_info" => "Implementação de SGA, política ambiental corporativa, conformidade com legislações federais e estaduais.",
        "img" => "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&q=80"
    ],
    [
        "category" => "Sustentabilidade",
        "title" => "Recuperação de Área Degradada (PRAD)",
        "client" => "Mineradora Vale Verde",
        "location" => "Mariana - MG",
        "description" => "Plano de recomposição vegetal e estabilização de encostas em antiga área de extração mineral.",
        "technical_info" => "Plantio de 15.000 mudas nativas, monitoramento de solo e recursos hídricos, biodiversidade recuperada em 70%.",
        "img" => "https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=800&q=80"
    ],
    [
        "category" => "Gestão de Resíduos",
        "title" => "Logística Reversa de Embalagens",
        "client" => "BioLog Distribuidora",
        "location" => "Manaus - AM",
        "description" => "Estruturação de cadeia de logística reversa para embalagens plásticas e metálicas pós-consumo.",
        "technical_info" => "Conformidade com a PNRS, rastreabilidade total de fardos, parceria com 12 cooperativas de catadores.",
        "img" => "https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=800&q=80"
    ],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos -
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
            background-color: #f9fbf9;
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
            background: linear-gradient(rgba(26, 46, 26, 0.85), rgba(26, 46, 26, 0.85)), url('1.png');
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

        .page-hero p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
            opacity: 0.9;
            line-height: 1.6;
        }

        /* ===== FILTROS ===== */
        .filters {
            padding: 60px 40px 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .filter-btn {
            padding: 10px 24px;
            border: 2px solid #e0e0e0;
            background: white;
            border-radius: 50px;
            font-family: var(--font-main);
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            color: var(--gray);
        }

        .filter-btn:hover {
            border-color: var(--green);
            color: var(--green-dark);
        }

        .filter-btn.active {
            background: var(--green-dark);
            border-color: var(--green-dark);
            color: white;
            box-shadow: 0 4px 15px rgba(46, 125, 50, 0.3);
        }

        /* ===== GRID DE PROJETOS ===== */
        .projects-section {
            padding: 0 40px 100px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .project-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s;
            display: flex;
            flex-direction: column;
            border: 1px solid #f0f0f0;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.12);
        }

        .project-img-wrapper {
            position: relative;
            height: 220px;
            overflow: hidden;
        }

        .project-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .project-card:hover .project-img {
            transform: scale(1.1);
        }

        .project-category {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--green-dark);
            color: white;
            padding: 6px 14px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .project-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .project-content h3 {
            font-family: var(--font-main);
            font-size: 20px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .project-info-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            font-size: 13px;
            color: var(--teal-dark);
            font-weight: 600;
        }

        .project-description {
            color: var(--gray);
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .technical-box {
            background: var(--gray-light);
            padding: 15px;
            border-radius: 8px;
            font-size: 13.5px;
            border-left: 4px solid var(--green);
            margin-top: auto;
        }

        .technical-box strong {
            display: block;
            color: var(--dark);
            margin-bottom: 4px;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 0.5px;
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

        .cta-section p {
            font-size: 18px;
            margin-bottom: 40px;
            opacity: 0.9;
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
            transition: all 0.3s;
        }

        .btn-white:hover {
            transform: scale(1.05);
            background: #f0f7f0;
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

        /* ===== WHATSAPP BUTTON ===== */
        .whatsapp-btn {
            position: fixed;
            bottom: 28px;
            right: 28px;
            z-index: 999;
            width: 58px;
            height: 58px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
            transition: transform 0.3s;
        }

        .whatsapp-btn:hover {
            transform: scale(1.1);
        }

        .whatsapp-btn svg {
            width: 32px;
            height: 32px;
            fill: white;
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

            .projects-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .page-hero {
                padding: 160px 20px 60px;
            }

            .page-hero h1 {
                font-size: 36px;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .filters {
                padding: 40px 20px;
            }

            .filter-btn {
                padding: 8px 18px;
                font-size: 13px;
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
        <h1>Nossos Projetos</h1>
        <p>Conheça alguns dos nossos trabalhos de destaque em consultoria e engenharia ambiental em todo o Brasil.</p>
    </section>

    <!-- FILTROS -->
    <div class="filters">
        <?php foreach ($project_categories as $index => $cat): ?>
            <button class="filter-btn <?php echo $index === 0 ? 'active' : ''; ?>" data-category="<?php echo $cat; ?>">
                <?php echo $cat; ?>
            </button>
        <?php endforeach; ?>
    </div>

    <!-- PROJETOS -->
    <section class="projects-section">
        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
                <div class="project-card" data-category="<?php echo $project['category']; ?>">
                    <div class="project-img-wrapper">
                        <span class="project-category">
                            <?php echo $project['category']; ?>
                        </span>
                        <img src="<?php echo $project['img']; ?>" alt="<?php echo $project['title']; ?>"
                            class="project-img">
                    </div>
                    <div class="project-content">
                        <div class="project-info-meta">
                            <span>📍
                                <?php echo $project['location']; ?>
                            </span>
                            <span>🏢
                                <?php echo $project['client']; ?>
                            </span>
                        </div>
                        <h3>
                            <?php echo $project['title']; ?>
                        </h3>
                        <p class="project-description">
                            <?php echo $project['description']; ?>
                        </p>
                        <div class="technical-box">
                            <strong>Destaque Técnico</strong>
                            <?php echo $project['technical_info']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section">
        <h2>Seu projeto está no próximo nível?</h2>
        <p>Entre em contato e descubra como podemos ajudar sua empresa com soluções ambientais sustentáveis e
            inovadoras.</p>
        <a href="index.php#contato" class="btn-white">Solicitar Orçamento Geral</a>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>
            &copy;
            <?php echo date('Y'); ?>
            <?php echo $company_name; ?>. Todos os direitos reservados.
            &nbsp;|&nbsp;
            <a href="mailto:<?php echo $email; ?>">
                <?php echo $email; ?>
            </a>
        </p>
    </footer>

    <!-- WHATSAPP -->
    <a href="https://wa.me/<?php echo $whatsapp_number; ?>" class="whatsapp-btn" target="_blank">
        <svg viewBox="0 0 32 32">
            <path
                d="M16 0C7.164 0 0 7.164 0 16c0 2.82.736 5.47 2.02 7.77L0 32l8.46-2.22A15.93 15.93 0 0016 32c8.836 0 16-7.164 16-16S24.836 0 16 0zm8.08 22.14c-.34.96-1.98 1.84-2.72 1.96-.7.12-1.58.17-2.56-.16-.59-.2-1.35-.46-2.32-.9-4.08-1.76-6.74-5.86-6.94-6.14-.2-.27-1.64-2.18-1.64-4.16 0-1.97 1.03-2.94 1.4-3.34.34-.38.74-.47 1-.47.24 0 .48.002.7.012.22.01.52-.083.82.626.3.72 1.02 2.5 1.11 2.68.09.17.15.38.03.6-.12.22-.18.36-.36.56-.17.2-.36.44-.52.59-.17.17-.35.35-.15.69.2.33.89 1.47 1.91 2.38 1.31 1.17 2.41 1.53 2.75 1.7.33.17.53.14.72-.08.2-.23.84-.98 1.06-1.32.22-.33.44-.28.74-.17.3.12 1.9.9 2.23 1.06.33.17.55.25.63.39.08.14.08.8-.26 1.76z" />
        </svg>
    </a>

    <script>
        // Menu Mobile Toggle
        const menuToggle = document.getElementById('mobile-menu');
        const navLinks = document.querySelector('.nav-links');

        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Lógica simples de filtro
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');

                // Ativar botão
                document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Filtrar cards
                document.querySelectorAll('.project-card').forEach(card => {
                    if (category === 'Todos' || card.getAttribute('data-category') === category) {
                        card.style.display = 'flex';
                        card.style.animation = 'fadeIn 0.5s ease forwards';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Keyframe de animação para o filtro
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>

</html>