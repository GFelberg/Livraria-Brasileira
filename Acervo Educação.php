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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Início</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="Sobre Nós.php" style="color: black;">Sobre nós</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">Nosso Acervo Literário</a>
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
                <h1 class="display-4 fw-bolder">Livros de Educação</h1>
                <p class="lead fw-normal text-white-50 mb-0">Encontre o seu próximo livro conosco</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/Educação/Livro - O Grande Livro de Libras - Língua Brasileira de Sinais.jpg"
                            alt="..." height="400px" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">O Grande Livro de Libras - Língua Brasileira de Sinais</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                R$35.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao
                                    Carrinho</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Promoção badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Promoção</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/Educação/Livro - O Livro da Biologia.jpg"
                            alt="..." height="400px"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">O Livro da Biologia</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-half"></div>
                                    <div class="bi bi-star"></div>
                                    <div class="bi bi-star"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">R$100.00</span>
                                R$50.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao
                                    Carrinho</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/Educação/Livro - Moderna Plus Matemática - 3 Ano.jpg" alt="..."
                            height="400px" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Moderna Plus Matemática - 3° Ano</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi bi-star"></div>
                                </div>
                                <!-- Product price-->
                                R$200.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao Carrinho</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Promoção</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/Educação/Livro - Teláris Geografia - 8 Ano.jpg" alt="..."
                            height="400px" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Teláris Geografia - 8° Ano</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi bi-star"></div>
                                    <div class="bi bi-star"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">R$300.00</span>
                                R$120.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao
                                    Carrinho</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/Educação/Livro - O Livro da Física.jpg"
                            alt="..." height="400px"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">O Livro da Física</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-half"></div>
                                    <div class="bi bi-star"></div>
                                    <div class="bi bi-star"></div>
                                </div>
                                <!-- Product price-->
                                R$120.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao Carrinho</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                            Promoção</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/Educação/Livro - Teláris História - 8 Ano.jpg" alt="..." height="400px"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Teláris História - 8° Ano</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">R$300.00</span>
                                R$150.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/Educação/Livro - 50 Experimentos para Fazer em Casa - Manual do Mundo.jpg" alt="..." height="400px"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">50 Experimentos para Fazer em Casa - Manual do Mundo</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-half"></div>
                                    <div class="bi bi-star"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">R$90.00</span>
                                R$46.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/Educação/Livro - Química - Série Brasil - Ensino Médio.jpg" alt="..." height="400px"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Química - Série Brasil - Ensino Médio</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi bi-star"></div>
                                    <div class="bi bi-star"></div>
                                </div>
                                <!-- Product price-->
                                $240.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Adicionar ao Carrinho</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Livraria Brasileira 2023 - Rio de Janeiro, RJ - Brasil</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>