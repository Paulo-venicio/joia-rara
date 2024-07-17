<?php
include ("../../DB/conexao.php")
?>

<?php   
        include("./listar_prod.php")
       //chamar o arquivo PHP que lista os registros retornados do Banco de Dados.
 
    else // Se o Banco de Dados não conseguir registrar o formulário, aparece a seguinte mensagem de erro.
    {
        echo "
        <div class="."containerSP".">
            <div class="."cabeca_container".">";
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "
            </div>
            <div class="."btn_voltar".">
                <a class="."btn_voltar"." href="."../registros/cad_produtos.html".">
                    Novo Registro ?
                </a>
            </div> 
        </div>";
    }
?>
<?php   
        include("./listar_pes.php"); //chamar o arquivo PHP que lista os registros retornados do Banco de Dados.
    
    else // Se o Banco de Dados não conseguir registrar o formulário, aparece a seguinte mensagem de erro.
    {
        echo "
        <div class="."containerSP".">
            <div class="."cabeca_container".">";
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "
            </div>
            <div class="."btn_voltar".">
                <a class="."btn_voltar"." href="."../../formularios/cad_clientes.html".">
                    Novo Registro ?
                </a>
            </div> 
        </div>";
    }
?>
<footer class=status>
<?php echo $status ?>
</footer>