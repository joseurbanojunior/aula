<?php
 require_once 'aula2.php';

 $pessoa = new Pessoa();

 $pessoa->setNome("Jose Urbano");

 $pessoa->andar();

 var_dump($pessoa);
?>