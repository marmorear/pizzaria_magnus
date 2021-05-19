<?php

session_start();
include "conn.php";

$json_banco = ($_COOKIE["cadastro_banco"]);
$data = json_decode($json_banco, TRUE);

$nome =$data ['nome'];
$email =$data ['email'];
$celular = $data ['celular'];
$senha= $data['senha'];
$cpf= $data['cpf'];
if(!isset($_SESSION["user_id"]))
{
header("Location: index.php");
exit;
}
?>
<?php include("navbar.php");?>
<body>
    <div style="padding-top:50px;" class="container-fluid">
        <div class="container-sm" >
            <div class="row align-items-center"  align="center">
            
            <div class="col" align="center">
               <h5>Seja bem-vindo(a) <?php echo $nome;?>!</h5>
               <br>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div> 
            <br>    
            <h6>Status: Seu pedido está a caminho!</h6>  
            <h6>Nº do pedido: 488</h6>   
            </div>
            <div class="card" align="center" style="width: 25rem;">
                <div class="card-header">
                    Seu pedido:
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">1x 1/2 Pizza de Frango com Catupiry</li>
                    <li class="list-group-item"> 1x 1/2 Pizza Baiana</li>
                    <li class="list-group-item">1x Coca-Cola 1L</li>
                </ul>
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
<script type="text/javascript" src="js/teste.js"></script>
<?php include("footer.php");?>






