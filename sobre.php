<?php
// SS Consultoria Ambiental - Pagina Sobre Nós
require_once 'includes/config.php';

$page_title = "Sobre Nós - " . $company_name;
$page_description = "Saiba mais sobre a SS Consultoria Ambiental, nossa missão, visão e compromisso com soluções sustentáveis.";

include 'includes/header.php';
?>
<!-- CSS Adicional -->
<link rel="stylesheet" href="assets/css/sobre.css">

<!-- HERO -->
<section class="page-hero">
    <div class="reveal">
        <h1>Sobre a SS Consultoria</h1>
        <p>Compromisso com o meio ambiente e com o sucesso do seu negócio.</p>
    </div>
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
            <div class="dif-content">
                <strong>Equipe Multidisciplinar</strong>
                <span>Especialistas em diversas áreas para uma visão 360º de cada projeto.</span>
            </div>
        </div>
        <div class="dif-item">
            <div class="dif-content">
                <strong>Atendimento Personalizado</strong>
                <span>Entendemos a particularidade de cada setor industrial e cada região.</span>
            </div>
        </div>
        <div class="dif-item">
            <div class="dif-content">
                <strong>Foco em Resultados</strong>
                <span>Metodologias que visam redução de custos e eficiência operacional real.</span>
            </div>
        </div>
        <div class="dif-item">
            <div class="dif-content">
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

<?php include 'includes/footer.php'; ?>