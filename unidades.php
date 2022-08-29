<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesCss/unidades-style.css">
    <!-- font icons from bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS only from bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Unidades</title>
</head>
<body>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <header>
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <a class="btn-back" href="index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
              <a class="navbar-brand" href="#">ESCOLA ASSIS DE ALENCAR</a>
           <div>
              <a class="navbar-brand" href="Feed/sobre.php">Sobre</a>
              <a class="navbar-brand" href="#">Fale Conosco</a>
              <a class="navbar-brand" href="#">Unidades</a>
            </div>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="assets/login.php" method="POST">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="exampleFormControlInput1" placeholder="Senha">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Entrar</button>
      </div>
      </form>
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
    </div>
  </div>
</div>            
<script src="javascript/Jquery.js" charset="utf-8"></script>

              </div>
            </div>
        </nav>
</header>

<main id="unidades-box">
    <div class="cabecalho">
        <h2 class="cabecalho__titulo">Encontre a unidade perfeita para você <i class="fa fa-globe" aria-hidden="true"></i></h2>
    </div>

    <div class="sobre__unidades">
        <div class="sobre__unidades-texto">
            <h3>Proximo a você!</h3>
            <p>Disponibilizamos polos acessíveis aos mais distintos locais, pontos estratégicos que possuem um grande fluxo de transporte publico.</p>
        </div>
        <img class="sobre__unidade-img" src="./img/crianças.jpg" alt="Crianças felizes em sala de aula">
    </div>

    <div class="central__polo">
        <h3 class="polo__titulo">Polo Principal <i class="fa fa-map-marker point-icon" aria-hidden="true"></i></h3>
        <iframe class="polo__mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.3391133651385!2d-43.181046074491356!3d-22.90085964970842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5c77db1225%3A0x8aec20d62db827d!2sSenac%20Marechal%20Floriano!5e0!3m2!1spt-BR!2sbr!4v1661779918734!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="cards__polos">
        <div class="polos__card card" style="width: 18rem;">
            <img src="./img/escola.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cidadela</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit unde sapiente deleniti voluptatibus beatae eligendi iusto accusamus</p>
                <a href="#" class="btn btn-primary">Conhecer <i class="fa fa-university" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="polos__card card" style="width: 18rem;">
            <img src="./img/escola.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cidadela</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit unde sapiente deleniti voluptatibus beatae eligendi iusto accusamus</p>
                <a href="#" class="btn btn-primary">Conhecer <i class="fa fa-university" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="polos__card card" style="width: 18rem;">
            <img src="./img/escola.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cidadela</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit unde sapiente deleniti voluptatibus beatae eligendi iusto accusamus</p>
                <a href="#" class="btn btn-primary">Conhecer <i class="fa fa-university" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="polos__card card" style="width: 18rem;">
            <img src="./img/escola.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cidadela</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit unde sapiente deleniti voluptatibus beatae eligendi iusto accusamus</p>
                <a href="#" class="btn btn-primary">Conhecer <i class="fa fa-university" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="polos__card card" style="width: 18rem;">
            <img src="./img/escola.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cidadela</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit unde sapiente deleniti voluptatibus beatae eligendi iusto accusamus</p>
                <a href="#" class="btn btn-primary">Conhecer <i class="fa fa-university" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="polos__card card" style="width: 18rem;">
            <img src="./img/escola.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Cidadela</h5>
                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit unde sapiente deleniti voluptatibus beatae eligendi iusto accusamus</p>
                <a href="#" class="btn btn-primary">Conhecer <i class="fa fa-university" aria-hidden="true"></i></a>
            </div>
        </div>


    </div>


</main>

<?php 
include('assets/footer.php');
?>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>