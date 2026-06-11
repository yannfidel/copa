<?php

$paises = [
    "África do Sul",
    "Alemanha",
    "Argélia",
    "Arábia Saudita",
    "Argentina",
    "Austrália",
    "Áustria",
    "Bélgica",
    "Bósnia e Herzegovina",
    "Brasil",
    "Cabo Verde",
    "Canadá",
    "Catar",
    "Colômbia",
    "Coreia do Sul",
    "Costa do Marfim",
    "Croácia",
    "Curaçao",
    "Egito",
    "Equador",
    "Escócia",
    "Espanha",
    "Estados Unidos",
    "França",
    "Gana",
    "Haiti",
    "Holanda",
    "Inglaterra",
    "Irã",
    "Iraque",
    "Japão",
    "Jordânia",
    "Marrocos",
    "México",
    "Noruega",
    "Nova Zelândia",
    "Panamá",
    "Paraguai",
    "Portugal",
    "República Democrática do Congo",
    "República Tcheca",
    "Senegal",
    "Suécia",
    "Suíça",
    "Tunísia",
    "Turquia",
    "Uruguai",
    "Uzbequistão"
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Coleção - FFO</title>

  <!-- FONTES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style2.css">
</head>

<body>

  <!-- GLOWS -->
  <div class="glow glow-1"></div>
  <div class="glow glow-2"></div>

  <!-- HEADER -->
  <?php
  include_once 'header.php';
  ?>
  

  <!-- MAIN -->
  <main class="album-container">

<?php 
$contador_imagens = 1;
foreach ($paises as $pais) {
    echo "<section class='country-section'>
    <h1>{$pais}</h1>
    <div class='stickers-grid'>
        <div class='sticker-card'><img src='figurinhas/{$contador_imagens}.webp'></div>
        <div class='sticker-card'><img src='figurinhas/".($contador_imagens+1).".webp'></div>
        <div class='sticker-card'><img src='figurinhas/".($contador_imagens+2).".webp'></div>
    </div>
    </section>";
    $contador_imagens += 3;
}
?>
<!-- FFO -->
<section class="country-section special-section">
  <h1>FFO</h1>
<div class="ffo1">
  
  <div class="ffo2">
  <div class="special-sticker2"></div>
  <div class="special-sticker2"></div>
</div>
  <div class="special-sticker"></div>
</div>

</section>
    

  </main>
