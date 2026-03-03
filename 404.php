<?php
require_once 'includes/config.php';
$page_title = "Página Não Encontrada - " . $company_name;
include 'includes/header.php';
?>

<section class="page-hero" style="min-height: 80vh; display: flex; align-items: center; justify-content: center;">
    <div class="reveal">
        <h1 style="font-size: 120px; line-height: 1; margin-bottom: 10px; opacity: 0.2;">404</h1>
        <h2 style="font-family: var(--font-main); font-size: 32px; margin-bottom: 20px;">Ops! Página não encontrada.
        </h2>
        <p style="margin-bottom: 40px; max-width: 500px; margin-left: auto; margin-right: auto;">
            O link que você seguiu pode estar quebrado ou a página pode ter sido removida.
        </p>
        <a href="index.php" class="btn-green">Voltar para o Início</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>