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
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">Nosso Acervo
                            Literário</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!--<li><hr class="dropdown-divider" /></li>-->
                            <li><a class="dropdown-item" href="Acervo Desenvolvimento Pessoal.php">Desenvolvimento
                                    Pessoal</a></li>
                            <li><a class="dropdown-item" href="Acervo Educação.php">Educação</a></li>
                            <li><a class="dropdown-item" href="Acervo Ficção.php">Ficção</a></li>
                            <li><a class="dropdown-item" href="Acervo Infantil.php">Infantil</a></li>
                            <li><a class="dropdown-item" href="Acervo Informática.php">Informática</a></li>
                            <li><a class="dropdown-item" href="Acervo Mangás.php">Mangás</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="Fale Conosco.php" style="color: black;">Fale
                            Conosco</a>
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
                <form class="d-flex carrinho-container">
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
                <h1 class="display-4 fw-bolder">Informações da Conta</h1>
                <p class="lead fw-normal text-white-50 mb-0">Atualize ou verifique suas informações sempre que houver
                    necessidade</p>
            </div>
        </div>
    </header>
    <style>
        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 75vh;
            margin-top: -5%;
            margin-bottom: -5%;
        }
    
        form {
            max-width: 400px;
        }
    
        .form-group {
            margin-bottom: 20px;
        }
    
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
    
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    
        .form-row {
            display: flex;
            justify-content: space-between;
        }
    
        button {
            background-color: white;
            color: black;
            padding: 10px;
            cursor: pointer;
        }
    
        button:hover {
            background-color: black;
            color: white;
            opacity: 1
        }
    </style>
    
    <section class="py-5 form-container">
        <form>
            <div class="form-row">
                <div class="form-group" style="flex: 1;">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" placeholder="Nome" autocomplete="off" style="width: 200px;" required>
                </div>
                <div class="form-group" style="margin-left: 30px; flex: 1;">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" autocomplete="off" style="width: 200px;" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group" style="flex: 1;">
                    <label for="birthday">Data de Nascimento</label>
                    <input type="date" id="birthday" name="birthday" style="width: 200px;" required>
                </div>
                <div class="form-group" style="margin-left: 30px; flex: 1;">
                    <label for="gender">Gênero</label>
                    <select id="gender" name="gender" style="width: 200px;">
                        <option value="male">Masculino</option>
                        <option value="female">Feminino</option>
                        <option value="other">Outro</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group" style="flex: 1;">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" placeholder="Senha" autocomplete="new-password" style="width: 200px;" required>
                </div>
                <div class="form-group" style="margin-left: 30px; flex: 1;">
                    <label for="confirm-password">Confirmar Senha</label>
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmar Senha" autocomplete="new-password" style="width: 200px;">
                </div>
            </div>
            <button type="submit">Atualizar</button>
        </form>
    </section>    
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Livraria Brasileira 2023 - Rio de Janeiro, RJ -
                Brasil</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>