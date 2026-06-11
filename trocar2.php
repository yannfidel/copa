<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - FFO</title>

  <!-- Fonte -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- GLOWS -->
  <div class="glow glow-1"></div>
  <div class="glow glow-2"></div>

<!-- HEADER -->
  <?php
  include_once 'header.php';
  ?>

  <script>

const addBtn =
document.getElementById("addSlot");

const topSlots =
document.getElementById("topSlots");

const bottomSlots =
document.getElementById("bottomSlots");

/* ADICIONAR */

addBtn.addEventListener("click", () => {

  /* CARTA DE CIMA */

  const topCard =
  document.createElement("div");

  topCard.classList.add("sticker-card");

  topSlots.appendChild(topCard);

  /* CARTA DE BAIXO */

  const bottomCard =
  document.createElement("div");

  bottomCard.classList.add("sticker-card");

  /* ADICIONA ANTES DO BOTÃO + */

  bottomSlots.insertBefore(
    bottomCard,
    addBtn
  );

});

</script>
<!-- MAIN CONTENT -->
<main class="main-content">

  



<body>

  <!-- GLOWS -->
  <div class="glow glow-1"></div>
  <div class="glow glow-2"></div>

  <!-- LOGIN -->
 <main class="trade-page">

  <!-- ÁREA DA TROCA -->
<div class="trade-system">

  <!-- FIGURINHA DE CIMA -->
  <div class="top-slots" id="topSlots">

    

  </div>
  

  <!-- FIGURINHAS DE BAIXO -->
  <div class="bottom-slots" id="bottomSlots">

    <!-- SLOT -->
    <div class="sticker-card"></div>

    <!-- BOTÃO + -->
    <button class="add-card-btn"
            id="addSlot">

      +

    </button>

  </div>

  
</div>  <!-- ÁREA DA TROCA -->
    <section class="trade-area">

      <!-- FIGURINHA PRINCIPAL -->
      <div class="main-sticker">

        <!-- depois você poderá colocar img aqui -->
        

      </div>

      <!-- TEXTO -->
      <p class="trade-text">
        Trocar por:
      </p>

      <!-- TROCA -->
       <div class="coluna">
      <div class="trade-offer coluna">

        <!-- FIGURINHA -->
        

        <!-- QUANTIDADE -->
       <div class="trade-offer coluna">

  <!-- SLOTS -->
  <div class="slots-area" id="slotsArea">

    <!-- CARTA -->
    <div class="sticker-card"></div>

    <!-- BOTÃO ADD -->
    <button class="add-card-btn"
            id="addSlot">

      +

    </button>

  </div>

    <!-- BOTÕES -->
    <section class="buttons">

      <button class="primary-btn">
        Trocar
      </button>

      <button class="secondary-btn">
        Selecionar intenção
      </button>

      <button class="secondary-btn">
        Selecionar Troca
      </button>

    </section>

</div>


  </main>

</body>
</html>

</main>
</body>
</html>