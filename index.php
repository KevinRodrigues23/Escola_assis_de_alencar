<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- font icons from bootstrap -->
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
  <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="./javascript/validador.js"></script>



    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Assis de Alencar</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <header>
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">ESCOLA ASSIS DE ALENCAR</a>
           <div>
             
              <a class="navbar-brand" href="Feed/sobre.php">Sobre</a>
              <a class="navbar-brand" href="#">Fale Conosco</a>
              <a class="navbar-brand" href="#">Unidades</a>
             
            </div>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
                
                  
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  LOGIN DO PROFESSOR <i class="fa fa-sign-in" aria-hidden="true"></i>
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


    <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          Seja bem-vindo! <br />
          <span style="color: hsl(218, 81%, 75%)">Escola Assis de Alencar</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
         Professores das Escolas Assis de Alencar> Por favor, cadastre-se na platarfoma!
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
            <h2>Cadastro dos Professores <i class="fa fa-user-plus" aria-hidden="true"></i></h2><br>

            <form action="assets/processa.php" method="POST">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="nome" id="form3Example1" class="form-control" placeholder="Nome" data-tipo="nome" required/>
                    <label class="form-label" for="form3Example1">nome</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="sobrenome" id="form3Example2" class="form-control"placeholder="sobrenome" data-tipo="sobrenome" required/>
                    <label class="form-label" for="form3Example2">Sobrenome</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" id="form3Example3" class="form-control" placeholder="Digite o sue email..." data-tipo="email" required/>
                <label class="form-label" for="form3Example3">Email </label>
              
                <input type="password" name="senha" id="form3Example4"  class="form-control" placeholder="Digite sua senha..." pattern="^(?=.*[0-9])(?!.*[ !@#$%^&*_=+-]).{6,12}$" title="A senha deve conter entre 6 a 12 numeros e não deve conter símbolos." data-tipo="senha" required/>
                <label class="form-label" for="form3Example4">Senha</label>
              </div>
              <!-- Submit button -->
              <div class="d-grid gap-2 col-6 mx-auto">
              <button class="btn btn-primary" type="submit" data-confirmProf>Cadastrar <i class="fa fa-user-plus" aria-hidden="true"></i></button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
include('assets/footer.php');
?>
<!-- Section: Design Block -->