<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Livraria Brasileira</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Livraria Brasileira</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Início</a></li>
                        <li class="nav-item"><a class="nav-link" href="Sobre Nós.php" style="color: black;">Sobre nós</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">Nosso Acervo Literário</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!--<li><hr class="dropdown-divider" /></li>-->
                                <li><a class="dropdown-item" href="Acervo Desenvolvimento Pessoal.php">Desenvolvimento Pessoal</a></li>
                                <li><a class="dropdown-item" href="Acervo Educação.php">Educação</a></li>
                                <li><a class="dropdown-item" href="Acervo Ficção.php">Ficção</a></li>
                                <li><a class="dropdown-item" href="Acervo Infantil.php">Infantil</a></li>
                                <li><a class="dropdown-item" href="Acervo Informática.php">Informática</a></li>
                                <li><a class="dropdown-item" href="Acervo Mangás.php">Mangás</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="Fale Conosco.php" style="color: black;">Fale Conosco</a>
                    </ul>
                    <style>
                        /* Adicione este bloco de estilo ao seu código */
                        .btn-outline-light:hover img {
                            filter: brightness(0) invert(1);
                        }
                    </style>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark mx-4 btn-outline-light" href="Minha Conta.php">
                            <img src="assets/Usuário/User.png" height="40px" alt="Minha Conta">
                        </a>
                    </form>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" href="Carrinho.php" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Carrinho
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Sobre nós</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Um pedacinho de nossa cultura e de nossa dedicação pelo incentivo à leitura na população brasileira</p>                    
                </div>
            </div>
        </header>
        <style>
            .justificado {
                text-align: justify;
            }

            .form-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 70vh;
                margin-top: -5%;
                margin-bottom: -5%;
            }
    
            form {
                max-width: 400px;
            }

        </style>
        <section class="py-5 form-container">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">                    
                    <br>
                    <p class="justificado">A nossa equipe se encontra há 5 anos trabalhando em desenvolver cada vez mais o incentivo e o conhecimento literário para a população brasileira.</p>
                    <br>
                    <p class="justificado">Em nosso acervo, o leitor poderá descobrir diversos gêneros literários, que por sua vez, possam contribuir cada vez mais em seus gostos pessoais, assim como acadêmicos e culturais.</p>
                    <br>
                    <p class="justificado">Esperamos que os visitantes, ou futuros leitores, encontrem esse espaço e façam dele um ambiente confortável para adquirir seus novos livros, assim como incentivar amigos, colegas ou familiares a se aventurar no mundo mágico da literatura.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Livraria Brasileira 2023 - Rio de Janeiro, RJ - Brasil</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
