<?php include("conexao-sistema.php")?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require('app-topo.php') ?>
</head>

<body>
    
    <?php require('app-menus.php') ?>

    <h1>Listagem de Locais</h1>
    <p>Verifique os Locais</p>
    <div class="row">
        <div class="offset-md-10 col-md-2 text-end">
            <a href="locais-cadastro.php" class="btn btn-primary">Novo</a>
        </div>
    </div>

    <div class="row mt-3">
        <table class="table">
            <tr class="table-dark">
                <th>ID</th>
                <th>NOME</th>
                <th>STATUS</th>
                <th>OPÇÕES</th> 
            </tr>

               <?php 
                  $sql=$conn->prepare("
                     select * from locais;
                  ");
                  $sql->execute();
                  while($dados=$sql->fetch()){
               ?>

            <tr>
                <td><?php echo $dados['id'] ; ?></td>
                <td><?php echo $dados['nome'] ; ?></td>
                <td>
                    <?php 
                if($dados ['status'] == 1){
                    echo "Ativo";
                }else{
                    echo "Desativo";
                };
                    ?> 
            
                </td>
                <td>
                    <a href="locais-cadastro.php?id=<?php echo $dados['id'];?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="locais-deletar.php?id=<?php echo $dados['id'];?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>

              <?php } ?>
            
        </table>
    </div>

    </div>

    <?php require('app-scripts.php') ?>

</body>

</html>