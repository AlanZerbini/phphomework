<?php
	$conn = mysqli_connect('localhost', "root", "", 'banco') or die("Não foi possível conectar.");
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Sura&display=swap" rel="stylesheet">
		<title>Listar</title>
	</head>
	<body>
		<header id="cabeçalho">
			<h1>BANCO</h1>
		</header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  			<a class="navbar-brand" href="index.php">HOME</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNav">
    			<ul class="navbar-nav">
      				<li class="nav-item">
        				<a class="nav-link" href="insercao.php">Inserir movimento</a>
      				</li>
      				<li class="nav-item active">
        				<a class="nav-link" href="listar.php"><u>Listar movimentos</u> <span class="sr-only">(current)</span></a>
      				</li>
    			</ul>
  			</div>
		</nav>
			<?php
				$result = mysqli_query($conn, 'SELECT codigo, tipo, descricao, data, valor FROM conta_corrente');

				if ($result) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<div class="lista">'."Código: ".$row['codigo']."<br>Tipo: ".$row['tipo']."<br>Descrição: ".$row['descricao']."<br>Data: ".$row['data']."<br>Valor: ".$row['valor'].'</div>';
					}
				}
				mysqli_close($conn);
			?>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>
</html>