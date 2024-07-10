<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Atualização de livro</title>
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
                                    <a href="../cadastro/cadastro_livro.php">LIVRO</a>
                                </li>

                                <li>
                                    <a href="../cadastro/cadastro_usuario.php">USUÁRIO</a>
                                </li>

                                <li>
                                    <a href="../cadastro/cadastro_emprestimo.php">EMPRÉSTIMO</a>
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

                    <?php 
                        $isbn = $_POST['isbn'];
                        $con = mysqli_connect("127.0.0.1", "root", "", "projetobiblioteca");
                        if(mysqli_connect_errno()){
                            echo "Failed to connect to MySQL:" . mysqli_connect_error();
                        }
                        $result = mysqli_query($con, "SELECT*FROM livros WHERE isbn = '$isbn'");
                    ?>

                    <h1>ATUALIZAR CADASTRO DE LIVRO</h1>

                    <div id="form-content">
                        <form action="../db/upd_livros.php" method="POST">
                            <?php while($row = mysqli_fetch_array($result)){ ?>
                            <input type="hidden" name="old_isbn" value="<?php echo $row['isbn']; ?>">
                            Título<br><input type="text" name="titulo" size="50" value="<?php echo $row['titulo']; ?>">
                            <p>
                                ISBN<br><input type="text" name="isbn" size="50" maxlength="17" value="<?php echo $row['isbn']; ?>">
                            <p>
                                Autor<br><input type="text" name="autor" size="50" maxlength="40" value="<?php echo $row['autor']; ?>">
                            <p>
                                Editora<br><input type="text" name="editora" size="50" maxlength="40" value="<?php echo $row['editora']; ?>">

                            <div class="form-column">
                                <div style="text-align: left">
                                    Ano de publicação<br>
                                    <input type="text" name="ano" size="15" maxlength="4" value="<?php echo $row['ano']; ?>">
                                </div>
                                <div style="text-align: right">
                                    Quantidade de páginas
                                    <br>
                                    <input type="text" name="paginas" size="15" maxlength="6" value="<?php echo $row['paginas']; ?>">
                                </div>
                            </div>

                            <div class="form-column">
                                <input id="form-submit" type="submit" value="CADASTRAR">
                                <input id="form-reset" type="reset" value="LIMPAR">
                            </div>
                        </form>
                        <?php } mysqli_close($con) ?>
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