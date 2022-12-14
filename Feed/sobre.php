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
              <a class="navbar-brand" href="../index.php">Home</a>
              <a class="navbar-brand" href="sobre.php">Sobre</a>
              <a class="navbar-brand" href="#">Fale Conosco</a>
              <a class="navbar-brand" href="../unidades.php">Unidades</a>
             
            </div>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
                
                  
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  LOGIN <i class="fa fa-sign-in" aria-hidden="true"></i>
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
        <form action="../assets/login.php" method="POST">
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
    

<br>



  <div class="container marketing">

   

    

    <hr class="featurette-divider">
    <br>
    <br>

    <div class="row featurette">
      <div class="col-md-7">
      
       
        
        <h2 class="featurette-heading" >Sobre a Escola</h2>
        <Br>
          
        <p class="lead">A escola Assis de Alencar
          ?? refer??ncia em ensino profissional. Uma institui????o que h?? mais de 75 anos ajuda a transformar a vida das pessoas e apresenta grande variedade de cursos, desenvolvidos de acordo com as exig??ncias do mercado.
          <br>
          Presente em 38 unidades de ensino, a institui????o atua em diversas ??reas, oferecendo cursos de capacita????o, t??cnicos, de gradua????o, de p??s-gradua????o, especializa????o e programas de educa????o a dist??ncia. Aqui, voc?? aprende uma profiss??o na pr??tica, aumentando suas chances de conseguir seu primeiro emprego ou de se recolocar no mercado de trabalho. Venha conhecer o Assis de Alencar e entender como voc?? tamb??m pode transformar sua vida.

          </p>
      </div>
      <div class="col-md-5">
        <img class=""style= margin-left:15%  src="sobre/c.jpg"  width="400" height="400">
      </div>
    </div>
    <br>
    <br>
    <hr class="featurette-divider">

    <div class="row featurette">
      
      <div class="col-md-7 order-md-2">
        <br>
        <br>
        <br>
        <br>
    
    
        <h2 class="featurette-heading">Miss??o, Vis??o e Valores  </h2>
        <br>
        <p class="lead">Educar para o trabalho em atividades do com??rcio de bens, servi??os e turismo.</p>
        <p class="lead">Ser a institui????o brasileira que oferece as melhores solu????es em educa????o profissional, reconhecida pelas empresas.</p>
        <p class="lead">Colabora????o, transpar??ncia, atitude de dono e responsabilidade social.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class=""  src="sobre/b.png" width="450" height="450">
       

      </div>
    </div>

    <hr class="featurette-divider">
    <br>
    <br>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Hist??ria da Escola Assis de Alencar </h2>
        <br>
        <p class="lead">Em 1946 ?? registrado um marco na hist??ria do Brasil: nasce a primeira constitui????o brasileira liberal democr??tica, que estabelece leis muito importantes como as elei????es diretas e secretas, igualdade de todos perante a lei e liberdade de manifesta????o de pensamento. No entanto, mesmo com o futuro promissor, o pa??s ainda estava pobre, atrasado e com fortes conflitos sociais. Foi quando empres??rios inteligentes se empenharam em criar servi??os e produtos inovadores, visando encontrar solu????es para problemas sociais e econ??micos.</p>
      </div>
      <div class="col-md-5">

        <img class="" style= margin-left:15%   src="sobre/a.jpg" width="400" height="400">
        <br>
        <br>
        <br>
        
      </div>
      
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p></p>
  </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>
