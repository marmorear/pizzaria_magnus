 <?php include("navbar.php");?> 
<body>
    <div style="padding-top:50px;" class="container-fluid">
        <div class="container-lg">
            <div class="row align-items-center" align="center">
                <div class="col">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="100">
                                <img src="img/pizza4.png" style="width:300px; height:300px;" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="img/pizza2.png" style="width:300px; height:300px;" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/pizza3.png" style="width:300px; height:300px;" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <img src="../img/logo.png" style="width:300px; height:300px;" alt="..." />
                </div>
            </div>

            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModal1">Veja o nosso cardápio</button>
            </div>
            <br>
            <div class="row align-items-center" align="center">
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img src="../img/pizza1.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <p class="card-text" style="text-align:center;">
                                Pizza Salgada
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img src="../img/pizzadoce.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <p class="card-text" style="text-align:center;">
                                Pizza Doce
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 20rem;">
                        <img src="../img/porcoes.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <p class="card-text" style="text-align:center;">
                                Porções
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Faça seu
                pedido</button>
        </div>
        <br>
    </div>
    <?php include("footer.php");?>
</body>
