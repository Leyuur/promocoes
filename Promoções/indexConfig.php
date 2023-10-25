<?php 

    session_start();
 
    include_once ('config.php');
    
    if (empty($_POST['inputUser']))
    {
        echo "<p>Você deve digitar algum CPF.</p>";
    }
    
    else 
    {
    
    $_SESSION['cpf'] = $_POST['inputUser'];
    
    $cpf = $_SESSION['cpf'];
    
    $sql = "SELECT * FROM clientes WHERE cpf_cliente = '$cpf'";
    
    $result = $conexao->query($sql);
    
    if (mysqli_num_rows($result) < 1){
        
        echo "<p>Este CPF não está registrado.</p>";
    }
    
    else 
    {
    
    header ('Location: participante.php');
    
    }
    
}

?>