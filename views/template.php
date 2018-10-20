<!DOCTYPE html>
<html lang="pt-br">
  <head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Classificados</title>
  </head>
  <body>
	
	<header>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="home">Classificados</a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Alterna navegação">
		  	<span class="navbar-toggler-icon"></span>
		 </button>
		 <div class="collapse navbar-collapse" id="nav">
		 	<ul class="navbar-nav ml-auto">
		 		<li class="nav-item">
		 			<a href="cadastro" class="nav-link btn-primary btn-sm px-2 mr-lg-2 my-2 my-lg-0 text-center text-light">Cadastre-se</a>
		 		</li>
		 		<li class="nav-item">
		 			<a href="login" class="nav-link btn-info btn-sm px-4 text-center text-light">Login</a>
		 		</li>
		 	</ul>
		 </div>
	  </nav>
	</header>

	<div class="container-fluid">
		<main>
		  <div class="row p-2">
			<div class="col-sm-2">
			  dasdas
			</div>
			<div class="col-sm-10">
			  <?php $this->loadView($viewName, $viewData); ?>
			  
			</div>
		  </div>          
		</main>
	</div>
	<!-- JavaScript (Opcional) -->
	<!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>