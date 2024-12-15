
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
      body{
        margin: 0;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
       color: white;
      }
      header{
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid pink;
        background-color: rgb(3, 8, 107);
        gap: 70%;
      }
     
      main{
        background: url(./astronaut-neon-ombre-fantasy-aesthetic-vle3qhm4cuwrnuhb.jpg);
       background-repeat: no-repeat;
       background-size: cover;
       background-position: relative;
       margin: 0px 0px 0px 0px;
       padding: 660px 20px 20px 20px;
       height: 100%;
      }
    
      #Caixa{
        display: flex;
        align-items: center;
        padding-top: 20px;
        border: 1px solid blue;
        box-shadow: 25px 25px 25px black;
        flex-direction: column;
        position: absolute;
        right: 20px;
        top:90px;
        width: 45%;
        height: 80%;
        background: linear-gradient(blue, purple, darkblue);
        border-radius: 10px;
        opacity: 0.8;
        scroll-behavior: smooth;
        overflow-y: scroll;
      }
     
      
        tbody{
          
          display: flex;
          flex-direction: column;
          align-items: center;
        }
        tr{
          display: flex;
          gap: 20px;
          margin: 20px;
        }
        td{
          border: 1px solid black;
          padding: 20px 20px 20px 20px;
          color: black;
          background-color: white;
          border-radius: 10px;
          
        }
        a{
          text-decoration: none;
          color:white;
        }
        span{
          display: flex;
          align-items: baseline;
          gap: 60px;
        }

        @media(max-width: 1400px){
        .main{
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          
        }
        #Caixa{
          right: auto;
          top: 100px;
          padding-top: 20px;
          position: center;
          overflow-y: hidden;
          width: 90%;
          display: flex;
          align-items: center;
          
        }
        .tdd{
          
          
          color: black;
          background-color: white;
          border-radius: 0px;
          border: 0px;
          
        }
        .trr{
          gap: 0;
         
        }
        
        }
        @media(max-width: 730px){
          #Caixa{
            top: 140px;
          }
          .spann{
            gap: 10px;
          }
          .Header{
            padding-left: 10px;
            padding-right: 10px;
          }
        }
    </style>
</head>
<body>
    <header class="Header">
        <h2>Telhas MS FERROS</h2>
        <h2><a href="TERCEIRO.php">Adicionar Pedido</a></h2>
    </header>
    <main class="main">
      <div id="Caixa">
        <h1>Pedidos de telhas</h1>
        <table>
        <tbody>
          <span class="spann">
            <p>PEDIDO </p>
            <p> NOME </p>
            <p> METRAGEM </p>
            <p> QUANTIDADE </p>
          </span>
        <?php
        include_once('conexao.php');
        $sql = "SELECT * FROM cadastrados ORDER BY id DESC";
        $result = $conexao->query($sql);
        while($user_data = mysqli_fetch_assoc($result)){
        echo "<tr class='trr'>";
        echo "<td class='tdd'>".$user_data['Pedido']."</td>";
        echo "<td class='tdd'>".$user_data['Nome']."</td>";
        echo "<td class='tdd'>".$user_data['Metragem']."</td>";
        echo "<td class='tdd'>".$user_data['Total']."</td>";
        echo "</tr>";
        
       }
       ?>
    </tbody>
    </table>
    </div>
    </main>
    <script>
     
    </script>
</body>
</html>