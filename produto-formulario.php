<?php
require_once ("cabecalho.php");
require_once ("banco-categoria.php");
require_once ("logica-usuario.php");
require_once ("class/Produto.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->setId(1);

$produto = new Produto("", 0.00, "", $categoria, 0);

$categorias = listaCategorias($conexao);
?>
<html>
        <h1>Formulário de cadastro</h1>
        <form action="adiciona-produto.php" method="post">
                <table class="table">
                        <?php include ("produto-formulario-base.php") ?>

                        <tr>
                                <td> <input type="submit" class="btn btn-primary" value="Cadastrar" /> </td>
                        </tr>
                        
                </table>
        </form>
</html>

<?php include ("rodape.php"); ?>
