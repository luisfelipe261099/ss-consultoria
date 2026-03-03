<?php
// SS Consultoria Ambiental - Pagina de Projetos
require_once 'includes/config.php';

$page_title = "Nossos Projetos - " . $company_name;
$page_description = "Conheça alguns dos nossos trabalhos de destaque em consultoria e engenharia ambiental em todo o Brasil.";

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

include 'includes/header.php';
?>
<!-- CSS Adicional -->
<link rel="stylesheet" href="assets/css/projetos.css">

<!-- HERO -->
<section class="page-hero">
    <div class="reveal">
        <h1>Nossos Projetos</h1>
        <p>Conheça alguns dos nossos trabalhos de destaque em consultoria e engenharia ambiental em todo o Brasil.</p>
    </div>
</section>

<!-- FILTROS -->
<div class="filters reveal">
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
            <div class="project-card reveal" data-category="<?php echo $project['category']; ?>">
                <div class="project-img-wrapper">
                    <span class="project-category">
                        <?php echo $project['category']; ?>
                    </span>
                    <img src="<?php echo $project['img']; ?>" alt="<?php echo $project['title']; ?>" class="project-img">
                </div>
                <div class="project-content">
                    <div class="project-info-meta">
                        <span>📍 <?php echo $project['location']; ?></span>
                        <span>🏢 <?php echo $project['client']; ?></span>
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
<section class="cta-section reveal">
    <h2>Seu projeto está no próximo nível?</h2>
    <p>Entre em contato e descubra como podemos ajudar sua empresa com soluções ambientais sustentáveis e
        inovadoras.</p>
    <a href="index.php#contato" class="btn-white">Solicitar Orçamento Geral</a>
</section>

<?php
include 'includes/footer.php';
?>
<script>
    // Lógica simples de filtro integrada no main.js, mas mantendo a específica aqui se necessário
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
                    card.style.animation = 'fadeInUp 0.6s ease forwards';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
</script>