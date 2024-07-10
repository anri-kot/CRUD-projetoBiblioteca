<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <title>Lista de usuários</title>
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
                <?php 
                
                $con = mysqli_connect("127.0.0.1", "root", "", "projetobiblioteca");
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $result = mysqli_query($con, "SELECT * FROM usuarios");

                ?>
                
                <h1>REGISTRO DE USUÁRIOS</h1>

                <table class="lista">
                    <tr class="th-row">
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th>Sexo</th>
                        <th>Data Nasc.</th>
                        <th>Ação</th>
                    </tr>

                    <?php while($row = mysqli_fetch_array($result)) { ?>
                    
                    <tr class="td-row">
                        <td><?php echo $row['cpf']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['endereco']; ?></td>
                        <td><?php echo $row['fone']; ?></td>
                        <td style="text-align: center"><?php echo $row['sexo']; ?></td>
                        <td><?php echo $row['dn']; ?></td>

                        <!-- Botão de excluir -->
                        <td><form action="../db/del_usuarios.php" method="POST">
                            <input type="hidden" name="cpf" value="<?php echo $row['cpf']; ?>">
                            <input type="submit" class="del" value="Excluir">
                         </form>
                        <!-- Botão de atualizar -->
                        <form action="../atualiza/form_upd_usuarios.php" method="POST">
                            <input type="hidden" name="cpf" value="<?php echo $row['cpf']; ?>">
                            <input type="submit" class="upd" value="Atualizar">
                        </form></td>
                    </tr>

                    <?php } mysqli_close($con) ?>
                </table>
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