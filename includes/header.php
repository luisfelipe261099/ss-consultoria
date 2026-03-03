<?php
require_once 'config.php';
// Definir variáveis padrão se não existirem
if (!isset($page_title))
    $page_title = $company_name;
if (!isset($page_description))
    $page_description = "Especialistas em consultoria ambiental, gestão de resíduos e tratamento de efluentes.";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $page_title; ?>
    </title>
    <meta name="description" content="<?php echo $page_description; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:image" content="https://ssconsultoriaambiental.com.br/logo2.png"> <!-- URL Absoluta -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $favicon_path; ?>">
    <link rel="apple-touch-icon" href="<?php echo $favicon_path; ?>">

    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <a href="index.php#inicio" class="nav-logo">
            <img src="logo2.png" alt="SS Consultoria Ambiental" class="nav-logo-icon">
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
            <li><a href="index.php#contato" class="nav-cta">Contato</a></li>
        </ul>
    </nav>