<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/bootstrap/css/bootstrap.min.css"/>
        <title>
            Mostra Cliente
        </title>
    </head>
    <body>
        <?php if ($this->session->flashdata('feedback')): ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('feedback') ?>
                <button class="close" data-dismiss="alert">x</button>
            </div>
        <?php endif ?> 
        <h1>
            Lista de Clientes mau pagadores
        </h1>
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Editar</th>
            </thead>
            
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?php echo $cliente->id ?></td>
                    <td><?php echo $cliente->nome ?></td>
                    <td><?php echo $cliente->telefone ?></td>
                    <td><a class="btn btn-action"
                           href="<?php echo site_url('cliente/atualizar/'.$cliente->id) ?>">
                            <i class="icon-edit"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </body>
</html>