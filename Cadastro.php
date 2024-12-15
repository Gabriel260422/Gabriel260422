<?php
include_once('conexao.php');
if(isset($_POST['submit'])) {
 print_r('LOGADO COM SUCESSO');
 $Pedido = $_POST['Pedido'];
 $Nome = $_POST['Nome'];
 $Metragem = $_POST['Metragem'];
 $Total = $_POST['Total'];
 $Data = $_POST['Data']; 
 $result = mysqli_query($conexao, "INSERT INTO cadastrados(Pedido,Nome,Metragem,Total,Data) VALUES('$Pedido','$Nome','$Metragem','$Total','$Data')");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
      html,body{
        margin: 0;
        font-weight: bolder;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      }
      header{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(3, 8, 107);
        color: white;
      }
      main{
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid blue;
        padding-bottom:30px ;
       background-color: gray;
      }
        form{
          
          display: flex;
          align-items: center;
          flex-direction: column;
          gap: 10px;
          border: 5px solid rgb(3, 8, 107);
          padding:30px 20px 40px 20px ;
          border-radius: 10px;
          margin-top: 20px;
          background-color: #1f8190;
        } 
        form span{
         border: 5px solid rgb(3, 8, 107);
         display: flex;
         align-items: center;
         gap: 10px;
         width: 350px;
         justify-content: center;
         flex-direction: column;
         padding: 10px 10px 10px 10px;
         border-radius: 15px;
         background: linear-gradient(rgb(3,8,107), blue);
         color: white;
        
        }
        
    </style>
</head>
<body>
    <header>
        <h2>Telhas MS FERROS</h2>
    </header>
    <main>
      <div class="Usuarios">
        <form action="TERCEIRO.php" method="POST">
          <h2>Cadastro de Telhas</h2>
            <span>
            <input type="text" name="Pedido" required minlength="4" maxlength="8">
            <label for="Nome" class="Label">Pedido</label>
            </span>
            <span>
            <input type="text" name="Nome" required minlength="2" maxlength="20">
            <label for="Nome" class="Label">Nome</label>
            </span>
            <span>
            <input type="text" name="Metragem" required maxlength="8">
            <label for="Nome" class="Label">Metragem</label>
            </span>
            <span>
            <input type="text" name="Total" required maxlength="4">
            <label for="Nome" class="Label">Total</label>
            </span>
            <span>
            <input type="date" name="Data" required>
            <label for="Nome" class="Label">Data</label>
            </span>
            <input type="submit" name="submit">
        </form>
      </div>
    </main>
    <script>
     
    </script>
</body>
</html>
