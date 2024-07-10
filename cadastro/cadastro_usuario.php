<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Cadastro de usuários</title>
</head>

<body>
    <div id="wrapper">
        <header>
            <nav class="navbar">
                <a id="logo" href="../index.html"><img src="../logo-no-background.png" height=30px></a>
                <ul>
                    <li>
                        <a href="../index.html">HOME</a>
                    </li>
                    <div class="dropdown">
                        <li>
                            <p>CADASTRAR</p>
                        </li>
                        <div class="dropdown-content">
                            <ul>
                                <li>
                                    <a href="cadastro_livro.php">LIVRO</a>
                                </li>

                                <li>
                                    <a href="cadastro_usuario.php">USUÁRIO</a>
                                </li>

                                <li>
                                    <a href="cadastro_emprestimo.php">EMPRÉSTIMO</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dropdown">
                        <li>
                            <p style="text-align: center">REGISTRO</p>
                        </li>
                        <div class="dropdown-content">
                            <ul>
                            <li>
                                    <a href="../lista/list_livros.php">LIVROS</a>
                                </li>

                                <li>
                                    <a href="../lista/list_usuarios.php">USUÁRIOS</a>
                                </li>

                                <li>
                                    <a href="../lista/list_emprestimos.php">EMPRÉSTIMOS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </ul>
            </nav>

        </header>

        <main>
            <div id="main-content">
                <div id="main-form">

                    <h1>CADASTRO DE USUÁRIO</h1>

                    <div id="form-content">
                        <form action="../db/cad_usuarios.php" method="POST">
                            Nome<br><input type="text" name="nome" size="50" required>
                            <p>
                                CPF<br><input type="text" name="cpf" size="50" maxlength="14" placeholder="Ex: 123.456.789-10" required>
                            <p>
                                Endereço<br><input type="text" name="endereco" size="50" maxlength="40" required>
                            <p>
                                Telefone<br><input type="text" name="fone" size="50" maxlength="15" required>

                            <div class="form-column">
                                <div style="text-align: left">
                                    Sexo biológico<br>
                                    <input type="radio" name="sexo" value="m" checked> Masculino
                                    <input type="radio" name="sexo" value="f" style="margin-left: 5px"> Feminino
                                </div>
                                <div style="text-align: right">
                                    Data de nascimento
                                    <br>
                                    <input type="text" name="dn" size="15" maxlength="14" placeholder="ano/mês/dia" required>
                                </div>
                            </div>

                            <div class="form-column">
                                <input id="form-submit" type="submit" value="CADASTRAR">
                                <input id="form-reset" type="reset" value="LIMPAR">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </main>

        <footer>
            <div class="footer-top">
                <div class="footer-left-con">
                    <img src="../logo-no-background.png" height=40px>
                </div>
                <div class="footer-right-con">

                    <h3>Contato</h3>
                    <p>Email: info@exemplo.com</p>
                    <p>Telefone: (99) 9999-9999</p>
                    <p>Endereço: Rua Exemplo, 123, Cidade, Estado</p>

                </div>
            </div>
            <hr>
            <p>&copy; 2024 Instituto Wittgenstein. Todos os direitos reservados.</p>
        </footer>
    </div>
</body>

</html>