<?php
include("navbar.php");

include "conn.php";

$json_banco = ($_COOKIE["cadastro_banco"]);
$data = json_decode($json_banco, TRUE);

$nome =$data ['nome'];
$email =$data ['email'];
$celular = $data ['celular'];
$senha= $data['senha'];
$cpf= $data['cpf'];

$sql = "INSERT INTO cliente (nome,email,celular,senha,cpf) VALUES(:nome,:email,:celular,:senha,:cpf)";
$stmt = $conn->prepare( $sql );
$stmt->bindParam( ':nome', $nome );
$stmt->bindParam( ':email', $email );
$stmt->bindParam( ':celular', $celular );
$stmt->bindParam( ':senha', $senha);
$stmt->bindParam( ':cpf', $cpf); 
$result = $stmt->execute();
 
if ( ! $result )
{
    var_dump( $stmt->errorInfo() );
    exit;
}
 
echo '<script type="text/javascript">',
'alert("Cadastro Finalizado com sucesso!");',
'</script>'
;

?>

<body>
    <div style="padding-top:50px;" class="container-fluid">
        <div class="container-sm" id="app">
            <div class="row align-items-center"  align="center">
            
            <div class="col" align="left">
               
            <?php 
                if ( ! $result )
                {
                    echo '<div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Seu cadastro não foi efetuado!</h4>
                    <p>Por favor entre em contato para que possamos te ajudar.</p>
                    <hr>
                    <p class="mb-0">Estamos aqui para o que você precisar.</p>
                  </div>';  
                }else{
                echo '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Seu cadastro foi efetuado com sucesso!</h4>
                <p>Agora você pode receber nossa promoções por e-mail e acompanhar os seus pedidos.</p>
                <hr>
                <p class="mb-0">Estamos aqui para o que você precisar.</p>
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






