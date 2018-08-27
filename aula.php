<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>
<body>
    <form action="" method="post">
    	<p>Nome: </p>
    	<p><input type="texto" name="nome"></p>
    	<p>Idade: </p>
    	<p><input type="number" name="idade"></p>
    	<p></p>
    	<input type="submit" value="Cadastrar">
    </form>
    <?php
     class CadastroUsuario {
     	
     	function CadastroUsuario($nome, $idade) {
     		echo "<br>";
     		echo "Nome: ".$nome;
     		echo "<br>";
     		echo "<br>";
     		echo "Idade: ".$idade." Anos";
     	}

     }
        $idade = $_POST['idade'];
        $nome = $_POST['nome'];
     	$obj = new CadastroUsuario($nome, $idade);
    ?>
</body>
</html>