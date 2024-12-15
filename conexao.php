<?php
  $Nome_do_servidor = 'Localhost';
  $Root = 'root';
  $Senha = '';
  $Telhas = 'telhas';

  $conexao = new mysqli($Nome_do_servidor,$Root,$Senha,$Telhas);

  if($conexao ->connect_errno){
    echo 'error';
  }
  else{
    echo 'Conectado com sucesso!';
  }
?>