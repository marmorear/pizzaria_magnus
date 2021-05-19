
<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/efe08242e8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/v-mask/dist/v-mask.min.js"></script>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/vue-cookies@1.7.4/vue-cookies.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>

    <link href="css/style.css" rel="stylesheet">
    <title>Pizzaria Magnus</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
    <nav class="navbar  fixed-top navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://pizzariamagnus.fun/">Pizzaria Magnus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link  active dropdown-toggle"  id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Fazer
                                    pedido</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1">Cardápio</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalnews">Receba a newsletter</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#exampleModalogin">Login <i class="fas fa-users"></i> </button>
                </form>
            </div>
        </div>
    </nav>
    <br>
      <!-- Modal Login-->
      <div class="modal fade" id="exampleModalogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" >
                    <div class="row align-items-center" align="center">
                        <div class="col align-self-center">
                        <form method="post" action="login.php">
                            <p>Já é cliente? Logue para acompanhar seu pedido.</p>
                            <p>Email:</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="addon-wrapping"><i
                                        class="fas fa-envelope-open-text"></i></span>
                                <input type="text" class="form-control" placeholder="Digite aqui seu e-mail..."
                                    aria-label="Username" require id="email" name="email" v-model="email_login" aria-describedby="addon-wrapping">
                            </div>
                            <br>
                            <p>Senha:</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="addon-wrapping"><i class="fas fa-key"></i></span>
                                <input type="password" require id="senha" name="senha" v-model="senha_login"placeholder="Digite aqui sua senha..." class="form-control" id="inputPassword">
                            </div>
                        </div>
                    </div>
                    <div align="center">
                       
                    <button type="submit" name="login" class="btn btn-outline-warning">Acessar</button>
                   
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <a href="cadastro.php">
                    <button type="button"   class="btn btn-warning">Não é cliente? Cadastre-se!</button>
                    </a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ModalNewsletter -->
    <div class="modal fade" id="exampleModalnews" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Receba a nossa newsletter com promoções!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center" align="center">
                        <div class="col align-self-center">
                            <img src="img/promo.png" style="width:300px; height:300px;" class="d-block w-100" alt="...">
                            <br>
                            <p>Deixe seu e-mail na nossa lista e receba um cupom de desconto!</p>
                            <br>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="addon-wrapping"><i
                                        class="fas fa-envelope-open-text"></i></span>
                                <input type="text" class="form-control" placeholder="Digite aqui seu e-mail..."
                                    aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não quero
                        participar!</button>
                    <button type="button" class="btn btn-warning">Quero participar!</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal pedido -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Faça seu pedido</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center" align="center">
                        <div class="col align-self-center">
                            Faça seu pedido por:
                            <br>
                            <a
                                href="https://api.whatsapp.com/send?phone=55119898989888&text=Gostaria%20de%20fazer%20um%20pedido">
                                <span style="font-size: 3em; color:green;">
                                    <i class="fab fa-whatsapp-square"></i>
                            </a>
                            </span>
                            <br>
                            <span>
                                <a href="https://www.ifood.com.br/">
                                    <img src="img/ifood.png" class="containerimg" alt="...">
                                </a>
                            </span>
                            <br>
                            <span>
                                <a href="https://www.rappi.com.br/">
                                    <img src="img/rappi.png" class="containerimg2" alt="...">
                                </a>
                            </span>
                            <br>
                            Clique e você será redirecionado a página para fazer seu pedido.
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Entendi</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Cardapio -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cardápio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/cardapio1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/cardapio2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/cardapio3.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
 