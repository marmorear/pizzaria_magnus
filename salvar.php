<?php

include "conn.php";

$json_banco = ($_COOKIE["cadastro_banco"]);
$data = json_decode($json_banco, TRUE);

$nome =$data ['nome'];
$email =$data ['email'];
$celular = $data ['celular'];
$senha= $data['senha'];
$cpf= $data['cpf'];

$sql = "INSERT INTO cliente (nome,email,celular,senha,cpf) VALUES(:nome,:email,:celular,:senha,:cpf)";
try {
    $stmt = $conn->prepare( $sql );
    $stmt->bindParam( ':nome', $nome );
    $stmt->bindParam( ':email', $email );
    $stmt->bindParam( ':celular', $celular );
    $stmt->bindParam( ':senha', $senha);
    $stmt->bindParam( ':cpf', $cpf); 

try {

    $result = $stmt->execute();

} catch( PDOException $e ) {


}

} catch( PDOException $e ) {



echo $e -> getMessage();
}
?>

<?php include("navbar.php");?>
<body>
    <div style="padding-top:50px;" class="container-fluid">
        <div class="container-sm" id="app">
            <div class="row align-items-center"  align="center">
            
            <div class="col" align="left">
               
            <?php 
                if ( !$result )
                {
                    echo '<div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Seu cadastro não foi efetuado!</h4>
                        <p>Pode ser que o seu cpf já esteja exista no nosso banco.</p>
                        <p>Pode ser que o seu e-mail já esteja exista no nosso banco.</p>
                        <hr>
                        <p class="mb-0">Estamos aqui para o que você precisar.</p>
                        </div>';  
                }else{
                 echo '<div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Seu cadastro foi efetuado com sucesso!</h4>
                        <p>Agora você pode receber nossa promoções por e-mail e acompanhar os seus pedidos.</p>
                        <hr>
                        <p class="mb-0">Tente novamente.Estamos aqui para o que você precisar.</p>
                        </div>';

                }
            
            
            ?>           
                                
            </div>
                
            <div class="col">
                <img src="../img/logo.png" style="width:300px; height:300px;" alt="..." />
            </div>
            <a href="https://pizzariamagnus.fun/">
                    <button class="btn btn-warning" type="button">Voltar a página principal</button>
                    </a>
            <br>

        </div>
    </div>
</div>
</body>
<?php include("footer.php");?>






