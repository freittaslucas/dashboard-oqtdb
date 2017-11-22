<!DOCTYPE html>
<html lang="br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Lucas Freitas">
<title>DashBoard | Tarefa</title>

<link rel="shortcut icon" href="img/ico/favicon.ico">

<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<header>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#"><i class="fa fa-picture-o" aria-hidden="true"></i> Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i>  <b class="menu-superior"> Usuario </b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>  <b class="menu-superior"> Mensagens </b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-heart" aria-hidden="true"></i>  <b class="menu-superior"> Favoritos </b></a>
      </li>
    </ul>
 <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
    </form>
 

	
   
  </div>

</nav>

</header>


<section>

	
	
	
	
<aside id="menu-vertical">	
<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

  <a class="nav-link active" id="v-pills-clientes-tab" data-toggle="pill" href="#v-pills-clientes" role="tab" aria-controls="v-pills-clientes" aria-selected="true"><i class="fa fa-users" aria-hidden="true"></i> <span>Clientes</span></a>
  
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-list-alt" aria-hidden="true"></i> <span>Pedidos</span></a>
  
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-list-ol" aria-hidden="true"></i> <span>Número de Pedidos</span></a>
  
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-indent" aria-hidden="true"></i> <span>Últimos Pedidos</span></a>
</div>
</aside>	

<article id="conteudo">



<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-clientes" role="tabpanel" aria-labelledby="v-pills-home-tab">
  
  <div class="row linha-topo">
				
		<div class="col-md-6">		
			 <form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Procurar por Clientes" aria-label="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
			</form>
	  
	  </div>
	  
	  <div class="col-md-6">
		
	  </div>
	  
	  </div>
	  <div class="row linha">
	  <div class="col-sm-4 col-4 coluna first">
		Foto
	  </div>
	  <div class="col-sm-4 col-4 coluna">
		Nome
	  </div>
	  

	  <div class="col-sm-4 col-4 coluna">
		Plano
	  </div>
	  
  </div>
  
  
  
  
  
  
   <div class="row linha">
	  <div class="col-sm-4 col-4 coluna first">
		<span class="fa-stack fa-lg">
		  <i class="fa fa-square fa-stack-2x"></i>
		  <i class="fa fa-user fa-stack-1x fa-inverse"></i>
		</span>
	  </div>
	  <div class="col-sm-4 col-4 coluna">
		Fulano da Silva Souza
	  </div>
	  

	  <div class="col-sm-4 col-4 coluna">
		Plano II
	  </div>
	  
  </div>
  
  </div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
  
  
   <div class="row linha-topo">
				
		<div class="col-md-6">		
			 <form class="form-inline my-2 my-lg-0">
			  <input class="form-control mr-sm-2" type="search" placeholder="Procurar por Pedidos" aria-label="Search">
			  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Procurar</button>
			</form>
	  
	  </div>
	  
	  <div class="col-md-6">
		
	  </div>
	  
	  </div>
	  <div class="row linha">
	  <div class="col-sm-4 col-4 coluna first">
		Data
	  </div>
	  <div class="col-sm-4 col-4 coluna">
		Produto
	  </div>
	  

	  <div class="col-sm-4 col-4 coluna">
		ID
	  </div>
	  
  </div>
  
  
  
  </div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
  
  
  
  
   
    <div class="row linha-topo">
				
		<div class="col-md-6">		
			<h3> Número de Pedidos</h3>
	  
	  </div>
	  
	  <div class="col-md-6">
		
	  </div>
	  
	  </div>
	  <div class="row linha">
	  <div class="col-sm-4 col-4 coluna first">
		Data
	  </div>
	  <div class="col-sm-4 col-4 coluna">
		Produto
	  </div>
	  

	  <div class="col-sm-4 col-4 coluna">
		ID
	  </div>
	  
  </div>
  
  
  
 </div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
  
  
    <div class="row linha-topo">
				
		<div class="col-md-6">		
			<h3>Últimos Pedidos</h3>
	  
	  </div>
	  
	  <div class="col-md-6">
		
	  </div>
	  
	  </div>
	  <div class="row linha">
	  <div class="col-sm-4 col-4 coluna first">
		Data
	  </div>
	  <div class="col-sm-4 col-4 coluna">
		Produto
	  </div>
	  

	  <div class="col-sm-4 col-4 coluna">
		ID
	  </div>
	  
  </div>
  
  
  
  
  
</div>
</div>


 
</article>


</section>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

</body>
</html>