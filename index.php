<?php
// SS Consultoria Ambiental - Landing Page
require_once 'includes/config.php';

$page_title = $company_name . " - Gestão de Resíduos e Efluentes";
$page_description = "Especialistas em consultoria ambiental, tratamento de efluentes e gestão de resíduos para empresas de todos os portes.";

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

include 'includes/header.php';
?>
<!-- CSS Adicional -->
<link rel="stylesheet" href="assets/css/index.css">

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
        <h2 class="section-title">Nossos Serviços</h2>
        <p class="servicos-subtitle">Soluções inteligentes e sustentáveis para sua empresa.</p>
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
        <div class="servicos-cta" style="text-align: center;">
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
            style="background:rgba(255,255,255,0.2);color:white;padding:14px 24px;border-radius:12px;margin-bottom:30px;font-weight:700;max-width:600px;margin-left:auto;margin-right:auto;backdrop-filter:blur(5px);box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            ✅ <?php echo $success; ?>
        </div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div
            style="background:rgba(255,0,0,0.2);color:white;padding:14px 24px;border-radius:12px;margin-bottom:30px;font-weight:700;max-width:600px;margin-left:auto;margin-right:auto;backdrop-filter:blur(5px);">
            ❌ <?php echo $error; ?>
        </div>
    <?php endif; ?>

    <form class="contato-form" action="https://formspree.io/f/seu-id-aqui" method="POST">
        <input type="text" name="nome" placeholder="Seu Nome Completo" required>
        <input type="email" name="_replyto" placeholder="Seu Melhor E-mail" required>
        <input type="tel" name="telefone" placeholder="Seu Telefone / WhatsApp">
        <textarea name="mensagem" placeholder="Como podemos ajudar sua empresa?" required></textarea>
        <!-- Campo oculto para evitar spam e redirecionar após envio -->
        <input type="hidden" name="_subject" value="Novo contato do site SS Consultoria">
        <button type="submit">Enviar Mensagem Agora</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>