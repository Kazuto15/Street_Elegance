<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-xmcXMp9XbBdTEu4jAxLEL1TV9w8jxL3+mq4NtDQ9w5KI7jMjMJKz5RlPmk8b0CRf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

  <title >Street Elegance</title>

</head>
<body>    
    

    <!--NavBar-->
    <?php
      require_once './components/header-user.php'

    ?>
      

      <main>
      <div class="container-fluid">
        <div id="mainSlider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <!--Aqui é o numero de Sildes q pode colocar no codigo  -->
            <li data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#mainSlider" data-bs-slide-to="1"></li>
            <li data-bs-target="#mainSlider" data-bs-slide-to="2"></li>
            <li data-bs-target="#mainSlider" data-bs-slide-to="3"></li>
            <li data-bs-target="#mainSlider" data-bs-slide-to="4"></li>
            <li data-bs-target="#mainSlider" data-bs-slide-to="5"></li>
          </ol>
          <!-- Slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Y2K drips teste2.png" class="d-block w-100" alt="Y2K style">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="titulo-carousel">Y2K</h2>
                <p>Y2K é inspirada em meados dos anos 90 e no inicio dos anos 2000. esse estilo foi usado pelos artistas da epoca, carregando muitas peças chamativas e uma perssonalidade unica.   </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/US DRIPS.png" class="d-block w-100" alt="projeto estilo">
              <div class="carousel-caption d-none d-md-block">
                <h2  class="titulo-carousel">US DRIP</h2>
                <p>Drip ganhou popularidade nos anos 2000 em Atlanta do estado da Georgia nos EUA.A caracterização do US DRIP é uma mistura de roupas de grife com peças streetwear, criando um visual descontraido como tambem sofisticado.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/ST.png" class="d-block w-100" alt="projeto estilo">
              <div class="carousel-caption d-none d-md-block">
                <h2  class="titulo-carousel">STREETWEAR</h2>              
              <p>O Streetwear surgiu 1990.Inspirado na cultura hip-hop de Nova York e pela cultura do surf da California. È um estilo mais casual que tem mais enfâse nas cores neutras.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/SL.png" class="d-block w-100" alt="projeto estilo">
              <div class="carousel-caption d-none d-md-block">
                <h2  class="titulo-carousel">SPORTLIFE</h2>              
              <p>Surgindo no Jardim Libano na zona oeste de São Paulo pelo Neguinho de favela com a ideia que você é o atleta de cada dia. O Sportlife se caracteriza com roupas de clubes esportivos trazendo a cultura das favelas do Brasil. </p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/SF.png" class="d-block w-100" alt="projeto estilo">
              <div class="carousel-caption d-none d-md-block">
                <h2  class="titulo-carousel">SPORT FINO</h2>              
              <p>  O estilo sport fino preza por uma elegância moderada, evitando exageros em termos de cores vibrantes ou padrões muito chamativos. A simplicidade e a harmonia são essenciais.</p>
              </div>
            </div>

            <div class="carousel-item">
              <img src="img/old money.png" class="d-block w-100" alt="projeto estilo">
              <div class="carousel-caption d-none d-md-block">
                <h2  class="titulo-carousel">OLD MONEY</h2>              
              <p>O estilo de vestir muitas vezes reflete a modéstia e a tradição. As pessoas associadas ao Old Money podem preferir roupas clássicas e atemporais, evitando modismos ou tendências passageiras.</p>
              </div>
            </div>
          </div>
      
          <!-- Setas de navegação -->
          <a href="#mainSlider" class="carousel-control-prev"  role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a href="#mainSlider" class="carousel-control-next" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </main>

    
    <div class="sobre">
    <h2 >Sobre o site</h2>
    <p>Bem-vindo ao Street Elegance, o seu destino definitivo para descobrir e aprimorar seu estilo único. Navegue pelas nossas 
    categorias distintas, desde o urbano moderno até o elegante executivo, explorando uma variedade de estilos que se adaptam 
    à sua personalidade. Em "Customizations" , oferecemos insights práticos sobre moda, destacando influenciadores reais 
    que incorporam esses estilos de maneira inspiradora. Deslize por nossa seleção cuidadosamente curada de looks, obtenha 
    sugestões de combinações de cores e descubra a diversidade de expressão pessoal na moda. No Street Elegance, nossa 
    missão é capacitá-lo a criar um guarda-roupa que fale autenticidade, originalidade e confiança.</p>
   
    <h2>Nossa Historia</h2>
    <p> A jornada de Guilherme Mesquita e Kaua Barbosa rumo à autenticidade através da moda. 
    Nossa história começou na busca pelo autoconhecimento, onde percebemos que navegar pelo mundo 
    da moda pode ser desafiador. Decidimos criar este espaço para ser mais do que um site, mas um 
    guia confivel e sim para todas as pessoas terem acesso a como se vestir bem, confortavel e como
    esta descrito na nossa logo Elegante, compartilhamos nossas histórias, dicas e triunfos. Aqui,
    a moda vai além de seguir tendências; é uma expressão única de quem você é. Ao explorar nossas
    páginas, você encontrará inspiração e orientação para criar um guarda-roupa que ecoa a sua 
    autenticidade. Junte-se a nós nesta aventura, onde cada peça conta a sua própria história. 
    Este é o "Descubra Seu Estilo", onde a moda encontra a verdadeira essência.</p>
    </div>



     

  


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>