<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/bootstrap/css/bootstrap.min.css"/>
        <title>
            Mostra Cliente
        </title>
    </head>
    <body>
        <h1>
            Lista de Clientes mau pagadores
        </h1>
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
            </thead>
            
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente->id ?></td>
                    <td><?php echo $cliente->nome ?></td>
                    <td><?php echo $cliente->telefone ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </body>
</html>