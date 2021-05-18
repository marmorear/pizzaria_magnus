<?php include("navbar.php");
?>

<body>
    <div style="padding-top:50px;" class="container-fluid">
        <div class="container-sm" id="app">
            <div class="row align-items-center"  align="center">
            
            <div class="col" align="left">
                <form method="post" action="salvar.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">E-mail</label>
                        <input type="email" class="form-control" v-model="email" id="inputEmail4" placeholder="E-mail..." >
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Senha</label>
                        <input type="password" class="form-control" v-mask="'##########'" v-model="senha" id="inputPassword8" placeholder="Senha...">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Nome Completo</label>
                        <input type="text" class="form-control" v-model="nome_cadastro" id="inputAddress" placeholder="Nome...">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">CPF</label>
                        <input type="text" v-mask="'###.###.###-##'" class="form-control" v-model="cpf" id="inputAddress6" placeholder="CPF...">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">CEP</label>
                        <input type="text" v-mask="'#####-###'" class="form-control" v-model="cep" id="inputAddress60" placeholder="CEP...">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Endereço</label>
                        <input type="text" class="form-control" v-model="endereco" id="inputAddress2" placeholder="Endereço...">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Celular</label>
                        <input type="text" v-mask="'(##)#####-####'"class="form-control" v-model="celular" id="inputAddress7" placeholder="Celular">
                    </div>
                    <br> 
                    
                        <button @click="salva_dados();"class="btn btn-warning">Cadastrar</button>
                     
             </form>

                                
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
