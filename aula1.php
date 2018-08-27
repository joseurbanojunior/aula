<!DOCTYPE html>
  <head lang="pt-br">
  	<meta charset="utf-8">
  	<?php
     $a = $_POST['a'];
  	?>
  	<style type="text/css">
  		* {box-sizing: border-box; margin: 0; padding: 0;}

  		table {
  			width: 30%;
  			height: 200px;
  			border-spacing: 0;
  			text-align: center;
  			font-weight: bold;
  			margin: 0 auto;
  			margin-top: 120px;
  			background-color: orange;
  		}

  		tr, th, td {
  			border: 1px solid black;
  		}

  		input#botao {
  			margin-left: 478px;
  			margin-top: 10px;
  			cursor: pointer;
  		}

  		body {background-color: <?php switch ($a) {case '': echo $a; break; default: echo $a; ; break;}?>}
  	</style>
  </head>
  <body>
  	<table>
  		<tr>
  			<th colspan="2">Tabela De Cores</th>
  		</tr>
  		<tr>
  			<td>Escolha Uma Cor</td>
  			<form action="" method="post">
  			<td><input type="color" name="a" required></td>
  		</tr>
  	</table>
  	<input type="submit" value="MUDAR" id="botao">
  	</form>
  </body>	
</html>