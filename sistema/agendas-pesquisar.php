<?php include("conexao-sistema.php")?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require('app-topo.php') ?>
</head>

<body>
    
    <?php require('app-menus.php') ?>

    <h1>Listagem de Agendamentos</h1>
    <p>Verifique os Agandamentos</p>
    <div class="row">
        <div class="offset-md-10 col-md-2 text-end">
            <a href="agendas-cadastro.php" class="btn btn-primary">Novo</a>
        </div>
    </div>

    <div class="row mt-3">
        <table class="table">
            <tr class="table-dark">
                <th>ID</th>
                <th>LOCAL_ID</th>
                <th>LOCAL</th>
                <th>DATA INICIO</th>
                <th>DATA FINAL</th>
                <th>OBSERVAÇÃO</th>
                <th>OPÇÕES</th> 
            </tr>

               <?php 
                  $sql=$conn->prepare("
                     select agendas.*, locais.nome as local
                     from agendas
                     LEFT JOIN locais ON locais.id = agendas.local_id
                  ");
                  $sql->execute();
                  while($dados=$sql->fetch()){
               ?>

            <tr>
                <td><?php echo $dados['id'] ; ?></td>
                <td><?php echo $dados['local_id'] ; ?></td>
                <td><?php echo $dados['local'] ; ?></td>
                <td><?php echo $dados['data_inicio'] ; ?></td>
                <td><?php echo $dados['data_fim'] ; ?></td>
                <td><?php echo $dados['observacao'] ; ?></td>
                <td>
                    <a href="agendas-cadastro.php?id=<?php echo $dados['id'];?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="agendas-deletar.php?id=<?php echo $dados['id'];?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>

              <?php } ?>
            
        </table>
    </div>

    </div>

    <?php require('app-scripts.php') ?>

</body>

</html>