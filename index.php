<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-xmcXMp9XbBdTEu4jAxLEL1TV9w8jxL3+mq4NtDQ9w5KI7jMjMJKz5RlPmk8b0CRf" crossorigin="anonymous">

    <title>YourStyle</title>
</head>
<body>
    


    <!--NavBar-->
    <?php
      require_once './components/menu-user.php'
    ?>
      

      <main>
      <div class="container-fluid">
        <div id="mainSlider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-bs-target="#mainSlider" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#mainSlider" data-bs-slide-to="1"></li>
            <li data-bs-target="#mainSlider" data-bs-slide-to="2"></li>
          </ol>
      
          <!-- Slides -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Y2K drips teste2.png" class="d-block w-100" alt="Y2K style">
              <div class="carousel-caption d-none d-md-block">
                <h2>YOUR STYLE</h2>
                <p>Y2K inspirado no estilo dos anos 2000, esse estilo contém muita personalidade e cores.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/US DRIPS.png" class="d-block w-100" alt="projeto estilo">
              <div class="carousel-caption d-none d-md-block">
                <h2>YOUR STYLE</h2>
                <p>Y2K inspirado no estilo dos anos 2000, esse estilo contém muita personalidade e cores.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="" class="d-block w-100" alt="projeto estilo">
              <div class="carousel-caption d-none d-md-block">
                <h2>YOUR STYLE</h2>
                <p>Y2K inspirado no estilo dos anos 2000, esse estilo contém muita personalidade e cores.</p>
              </div>
            </div>
          </div>
      
          <!-- Setas de navegação -->
          <a class="carousel-control-prev" href="#mainSlider" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#mainSlider" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </main>






     

  


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>