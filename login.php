<?php
    session_start();
    require 'conn.php';
    $json_banco = ($_COOKIE["cadastro_banco"]);
    $data = json_decode($json_banco, TRUE);

    $nome =$data ['nome'];
    $email =$data ['email'];
    $celular = $data ['celular'];
    $senha= $data['senha'];
    $cpf= $data['cpf'];

    if(isset($_POST['login'])){
        
        //Retrieve the field values from our login form.
        $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
        $senha = !empty($_POST['senha']) ? trim($_POST['senha']) : null;
        
        //Retrieve the user account information for the given email.
        $sql = "SELECT * FROM cliente WHERE email = :email AND senha = :senha";
        $stmt = $conn->prepare($sql);
        
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        //Execute.
        $stmt->execute();
        
        //Fetch row.
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($user === false){
        echo '<script type="text/javascript">window.location = "index.php"</script>';
        } else{
             password_verify($senha, $user['senha']);    
            
                $_SESSION['user_id'] = $user['idCliente'];
                $_SESSION['logged_in'] = time();
                
                echo '<script type="text/javascript">window.location = "home.php"</script>';
                exit;
       
        }
        
    }
?>
