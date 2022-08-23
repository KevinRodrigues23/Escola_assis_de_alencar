<?php
session_start();
require 'config.php';
include 'src/Artigo.php';
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
</head>

<header>
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid fonts">
    <a class="navbar-brand" href="#">Escola Assis de Alencar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Feed/index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="relatorio.php">relatórios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            mais
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Feed/admin/adicionar-artigo.php">Publicar artigo</a></li>
            <li><a class="dropdown-item" href="../Feed/admin/index.php">Editar/Deletar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Configuração</a></li>
          </ul>
        </li>
      
      </ul>
   
        <a class="btn btn-outline-success" href="../assets/logout.php">Logout</a>
      
    </div>
  </div>
</nav>
</header>
<main class="p-2">


<h1>RELATÓRIOS RECENTE</h1>
<div class="cardedit">
<div class="row row-cols-1 row-cols-md-3 g-3 m-2">
<?php foreach ($artigos as $artigo) : ?>
  <div class="col">
    <div class="card">
    <a href="artigo.php?id=<?php echo $artigo['id']; ?>">
      <img src="../img/OIP.jpg" class="card-img-top" width="200px" height="200px" alt="..."></a>
      <div class="card-body">
       
        <h5 class="card-title"><?php echo $artigo['titulo'];?></h5>
        <p class="text-left"><b>Públicado</b> <?php echo $artigo['nome']; ?></h1>
        <div class="nomeTime">
        
        </div>
        
        <p class="card-text"></p>
      </div>
    </div>
  </div>
 
  <?php endforeach; ?>
</div>
</div>
</main>
   

</div>


<!-- icon -->



 
</body>
</html>




            
    