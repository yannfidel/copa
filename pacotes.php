<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Pacote FFO</title>

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
  <main class="pack-page">

    <!-- PACOTE -->
    <div class="pack-wrapper">

      <!-- TOPO RASGÁVEL -->
      <div class="pack-tear"></div>

      <!-- PACOTE -->
      <div class="pack" id="pack">

        <div class="pack-shine"></div>

        <div class="pack-content">

          <h1>Pacote<br>FFO</h1>

          <p>World Edition</p>

        </div>

      </div>

      <!-- FIGURINHAS -->
      <div class="stickers-container" id="stickersContainer">

        <!-- TEMPLATE -->
        <div class="sticker-card reveal-card">
          <img src="1.png" alt="">
        </div>

        <div class="sticker-card reveal-card">
          <img src="3.png" alt="">
        </div>

        <div class="sticker-card reveal-card">
          <img src="2.png" alt="">
        </div>

        <div class="sticker-card reveal-card">
          <img src="3.png" alt="">
        </div>

      </div>

    </div>

    <!-- BOTÕES -->
    <div class="buttons">

        
      <button id="openBtn">
        Abrir Pacote
      </button>
        

        <a href="colecao">
      <button>
        Coleção
      </button>
</a>

    <a href="troca1">
      <button>
        Troca
      </button>

</a>
 <a href="album">
      <button>
        Album
      </button>

    
</a>


    </div>



   
  </main>

  <script src="script.js"></script>

</body>
</html>