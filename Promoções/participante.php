<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="participanteStyle.css">
    <title>DRTechs | Site</title>
</head>
<header>
<nav id="menu-reg">
        <ul>
            <li><a href="index.html">Nova consulta</a></li>
        </ul>
</nav>
</header>
<body>
<div class = "tabela_titulo">
    <div class = "bem_vindo">
        <h1>Bem-vindo(a) <?php
        
        session_start();
        
        include_once ('config.php');
        
        $cpf = $_SESSION['cpf'];
        
        $sql = "SELECT * FROM clientes WHERE cpf_cliente = '$cpf'";
    
        $result = $conexao->query($sql);
        
        $userdata = mysqli_fetch_assoc($result);
        
        $nome_cliente = $userdata['nome_cliente'];
        
        
         echo "$nome_cliente";
         
        ?>!</h1>
    </div>
      <div class = "m-5">
        <table class = "table">
          <thread>
             <tr>  
                <th scope = "col">Número da Sorte</th>
              </tr>
          </thread>
          <tbody class="planilha">
            <?php
                
                include_once ('config.php');
                
                $cpf = $_SESSION['cpf'];
                
                $sql = "SELECT * FROM clientes WHERE cpf_cliente = '$cpf'";
    
                $result = $conexao->query($sql);
        
                while($userdata = mysqli_fetch_assoc($result))
              { 
                echo "<tr>";
                echo "<td>".$userdata['num_sorte']."</td>";
                echo "</tr>";
              }  
            ?>
          </tbody>
        </table>  
      </div>
</div>
</body>
</html>