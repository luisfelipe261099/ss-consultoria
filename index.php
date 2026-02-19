<?php
// SS Consultoria Ambiental - Landing Page
$company_name = "SS Consultoria Ambiental";
$whatsapp_number = "5511999999999"; // Altere para o número real
$email = "contato@ssconsultoriaambiental.com.br";
$phone = "(11) 99999-9999";

$services = [
    [
        "icon" => "🗑️",
        "title" => "Gestão de Resíduos",
        "description" => "Plano de gerenciamento de resíduos às instituições e todos os portes.",
        "img" => "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&q=80"
    ],
    [
        "icon" => "💧",
        "title" => "Tratamento de Efluentes",
        "description" => "Tratamento e monitoramento de efluentes industriais e sanitários.",
        "img" => "https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=400&q=80"
    ],
    [
        "icon" => "🌿",
        "title" => "Consultoria Ambiental",
        "description" => "Consultoria para adequação às normas ambientais vigentes.",
        "img" => "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&q=80"
    ],
];

$stats = [
    ["value" => "+10", "label" => "Anos de Experiência"],
    ["value" => "+100", "label" => "Clientes Satisfeitos"],
    ["value" => "+250", "label" => "Projetos Concluídos"],
];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $company_name; ?></title>
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

        /* ===== HERO ===== */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: #0a1a0a;
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background-image: url('1.png');
            background-size: cover;
            background-position: center;
            opacity: 0.55;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(105deg,
                    rgba(10, 30, 10, 0.85) 0%,
                    rgba(10, 30, 10, 0.6) 50%,
                    rgba(10, 30, 10, 0.2) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
            padding: 180px 40px 80px;
            width: 100%;
        }

        .hero-text {
            max-width: 520px;
        }

        .hero-text h1 {
            font-family: var(--font-main);
            font-size: 52px;
            font-weight: 800;
            color: white;
            line-height: 1.1;
            margin-bottom: 16px;
        }

        .hero-text h1 span {
            color: var(--green-light);
            display: block;
        }

        .hero-text p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 16px;
            line-height: 1.7;
            margin-bottom: 36px;
            max-width: 420px;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: transparent;
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.8);
            padding: 14px 32px;
            border-radius: 8px;
            font-family: var(--font-main);
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: white;
            color: var(--dark);
            border-color: white;
        }

        .btn-green {
            background: var(--green-dark);
            color: white;
            border-color: var(--green-dark);
            padding: 14px 32px;
            border-radius: 8px;
            font-family: var(--font-main);
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .btn-green:hover {
            background: var(--green);
            border-color: var(--green);
        }

        /* ===== SOBRE NÓS ===== */
        .sobre {
            position: relative;
            padding: 90px 40px;
            text-align: center;
            overflow: hidden;
        }

        .sobre-bg {
            position: absolute;
            inset: 0;
            background-image: url('https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=1400&q=60');
            background-size: cover;
            background-position: center;
            opacity: 0.12;
        }

        .sobre::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, #e8f5e9 0%, #f0faf0 40%, #e0f2f1 100%);
            opacity: 0.9;
        }

        .sobre-inner {
            position: relative;
            z-index: 2;
            max-width: 720px;
            margin: 0 auto;
        }

        .section-title {
            font-family: var(--font-main);
            font-size: 36px;
            font-weight: 700;
            color: var(--teal-dark);
            margin-bottom: 12px;
        }

        .section-subtitle {
            font-family: var(--font-main);
            font-size: 20px;
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 24px;
            line-height: 1.4;
        }

        .section-subtitle span {
            color: var(--teal-dark);
        }

        .sobre p {
            color: var(--gray);
            font-size: 15.5px;
            line-height: 1.8;
            margin-bottom: 36px;
        }

        /* ===== SERVIÇOS ===== */
        .servicos {
            position: relative;
            padding: 80px 40px;
            background: #eaf6ea;
            overflow: hidden;
        }

        .servicos::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url('https://images.unsplash.com/photo-1559827260-dc66d52bef19?w=1400&q=60');
            background-size: cover;
            opacity: 0.07;
        }

        .servicos-inner {
            position: relative;
            z-index: 2;
            max-width: 1200px;
            margin: 0 auto;
        }

        .servicos h2 {
            font-family: var(--font-main);
            font-size: 34px;
            font-weight: 700;
            color: var(--dark);
            text-align: center;
            margin-bottom: 50px;
        }

        .servicos-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
            margin-bottom: 50px;
        }

        .service-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
        }

        .service-card-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .service-card-body {
            padding: 22px 24px 28px;
        }

        .service-card-body h3 {
            font-family: var(--font-main);
            font-size: 17px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 10px;
        }

        .service-card-body p {
            color: var(--gray);
            font-size: 14px;
            line-height: 1.6;
        }

        .servicos-cta {
            text-align: center;
        }

        /* ===== STATS ===== */
        .stats {
            background: white;
            padding: 70px 40px;
        }

        .stats-inner {
            max-width: 900px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            text-align: center;
        }

        .stat-item h3 {
            font-family: var(--font-main);
            font-size: 52px;
            font-weight: 800;
            color: var(--teal-dark);
            margin-bottom: 8px;
        }

        .stat-item p {
            font-size: 15px;
            color: var(--gray);
            font-weight: 500;
        }

        /* ===== CONTATO ===== */
        .contato {
            background: linear-gradient(135deg, var(--teal-dark) 0%, var(--green-dark) 100%);
            padding: 80px 40px;
            text-align: center;
        }

        .contato h2 {
            font-family: var(--font-main);
            font-size: 36px;
            font-weight: 700;
            color: white;
            margin-bottom: 14px;
        }

        .contato p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 16px;
            margin-bottom: 40px;
        }

        .contato-form {
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .contato-form input,
        .contato-form textarea {
            width: 100%;
            padding: 14px 18px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-family: var(--font-body);
            outline: none;
            background: rgba(255, 255, 255, 0.95);
            color: var(--text);
        }

        .contato-form textarea {
            resize: vertical;
            min-height: 120px;
        }

        .contato-form button {
            background: white;
            color: var(--teal-dark);
            border: none;
            padding: 16px 40px;
            border-radius: 8px;
            font-family: var(--font-main);
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
        }

        .contato-form button:hover {
            background: var(--green-light);
            color: var(--dark);
        }

        /* ===== FOOTER ===== */
        footer {
            background: var(--dark);
            color: rgba(255, 255, 255, 0.7);
            text-align: center;
            padding: 28px 40px;
            font-size: 13.5px;
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
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .whatsapp-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 30px rgba(37, 211, 102, 0.5);
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
            .servicos-grid {
                grid-template-columns: 1fr;
            }

            .stats-inner {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .hero-text h1 {
                font-size: 38px;
            }

            .hero-content {
                padding: 160px 20px 60px;
            }
        }

        @media (max-width: 600px) {
            .nav-logo-icon {
                height: 80px;
                max-width: 200px;
            }

            .hero-text h1 {
                font-size: 32px;
            }

            .hero-text p {
                font-size: 15px;
            }

            .btn-primary,
            .btn-green {
                padding: 12px 24px;
                width: 100%;
                justify-content: center;
            }
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-text {
            animation: fadeInUp 0.8s ease forwards;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <a href="#inicio" class="nav-logo">
            <img src="logo1.png" alt="SS Consultoria Ambiental" class="nav-logo-icon">
        </a>
        <div class="menu-toggle" id="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="nav-links">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="sobre.php">Sobre Nós</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="projetos.php">Projetos</a></li>
            <li><a href="#contato">Contato</a></li>
            <li><a href="#contato" class="nav-cta">Contato</a></li>
        </ul>
    </nav>

    <!-- HERO -->
    <section class="hero" id="inicio">
        <div class="hero-bg"></div>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="hero-text">
                <h1>
                    Especialistas em
                    <span>Consultoria Ambiental</span>
                </h1>
                <p>
                    Soluções completas em gestão e tratamento de resíduos,
                    para proteger o meio ambiente e garantir
                    conformidade legal.
                </p>
                <a href="sobre.php" class="btn-primary">
                    Saiba Mais &nbsp;&rsaquo;
                </a>
            </div>
        </div>
    </section>

    <!-- SOBRE NÓS -->
    <section class="sobre" id="sobre">
        <div class="sobre-bg"></div>
        <div class="sobre-inner">
            <h2 class="section-title">Sobre Nós</h2>
            <p class="section-subtitle">
                Sua parceira em <span>consultoria ambiental e<br>soluções sustentáveis</span>
            </p>
            <p>
                A SS Consultoria Ambiental oferece serviços especializados em gestão de resíduos,
                tratamento de efluentes e consultoria ambiental. Com uma equipe
                qualificada e experiente, ajudamos sua empresa a se adequar
                às normas ambientais e adotar práticas sustentáveis.
            </p>
            <a href="#servicos" class="btn-green">
                Saiba Mais Sobre Nós &nbsp;&rsaquo;
            </a>
        </div>
    </section>

    <!-- SERVIÇOS -->
    <section class="servicos" id="servicos">
        <div class="servicos-inner">
            <h2>Nossos Serviços</h2>
            <div class="servicos-grid">
                <?php foreach ($services as $service): ?>
                    <div class="service-card">
                        <img src="<?php echo htmlspecialchars($service['img']); ?>"
                            alt="<?php echo htmlspecialchars($service['title']); ?>" class="service-card-img" />
                        <div class="service-card-body">
                            <h3><?php echo htmlspecialchars($service['title']); ?></h3>
                            <p><?php echo htmlspecialchars($service['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="servicos-cta">
                <a href="projetos.php" class="btn-green">
                    Veja Nossos Projetos &nbsp;&rsaquo;
                </a>
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="stats" id="projetos">
        <div class="stats-inner">
            <?php foreach ($stats as $stat): ?>
                <div class="stat-item">
                    <h3><?php echo htmlspecialchars($stat['value']); ?></h3>
                    <p><?php echo htmlspecialchars($stat['label']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- CONTATO -->
    <section class="contato" id="contato">
        <h2>Entre em Contato Conosco</h2>
        <p>Estamos prontos para ajudar sua empresa a crescer de forma sustentável.</p>

        <?php
        $success = '';
        $error = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nome'])) {
            $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
            $email_f = htmlspecialchars(trim($_POST['email'] ?? ''));
            $tel = htmlspecialchars(trim($_POST['telefone'] ?? ''));
            $msg = htmlspecialchars(trim($_POST['mensagem'] ?? ''));

            if ($nome && $email_f && $msg) {
                // Aqui você pode integrar envio de e-mail com mail() ou PHPMailer
                $to = $email;
                $subject = "Contato via Site - $nome";
                $body = "Nome: $nome\nEmail: $email_f\nTelefone: $tel\nMensagem:\n$msg";
                $headers = "From: $email_f";
                // mail($to, $subject, $body, $headers);
                $success = "Mensagem enviada com sucesso! Entraremos em contato em breve.";
            } else {
                $error = "Por favor, preencha todos os campos obrigatórios.";
            }
        }
        ?>

        <?php if ($success): ?>
            <div
                style="background:rgba(255,255,255,0.2);color:white;padding:14px 24px;border-radius:8px;margin-bottom:20px;font-weight:600;max-width:600px;margin-left:auto;margin-right:auto;">
                ✅ <?php echo $success; ?>
            </div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div
                style="background:rgba(255,0,0,0.2);color:white;padding:14px 24px;border-radius:8px;margin-bottom:20px;font-weight:600;max-width:600px;margin-left:auto;margin-right:auto;">
                ⚠️ <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <form class="contato-form" method="POST" action="#contato">
            <input type="text" name="nome" placeholder="Seu nome *" required
                value="<?php echo htmlspecialchars($_POST['nome'] ?? ''); ?>" />
            <input type="email" name="email" placeholder="Seu e-mail *" required
                value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" />
            <input type="tel" name="telefone" placeholder="Seu telefone"
                value="<?php echo htmlspecialchars($_POST['telefone'] ?? ''); ?>" />
            <textarea name="mensagem" placeholder="Sua mensagem *"
                required><?php echo htmlspecialchars($_POST['mensagem'] ?? ''); ?></textarea>
            <button type="submit">Enviar Mensagem</button>
        </form>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>
            &copy; <?php echo date('Y'); ?> <?php echo $company_name; ?>. Todos os direitos reservados.
            &nbsp;|&nbsp;
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            &nbsp;|&nbsp;
            <a href="tel:<?php echo preg_replace('/\D/', '', $phone); ?>"><?php echo $phone; ?></a>
        </p>
    </footer>

    <!-- WHATSAPP FLUTUANTE -->
    <a href="https://wa.me/<?php echo $whatsapp_number; ?>?text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es!"
        class="whatsapp-btn" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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

        // Fechar menu ao clicar em um link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                menuToggle.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });

        // Smooth scroll para links da nav
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Scroll animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.service-card, .stat-item, .sobre-inner').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>

</html>