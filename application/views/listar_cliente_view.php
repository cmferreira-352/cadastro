<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/bootstrap/css/bootstrap.min.css"/>
        <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>
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
        
        <!-- Button to trigger modal -->
        <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

        <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Modal header</h3>
          </div>
          <div class="modal-body">
            <p>One fine body…</p>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button>
          </div>
        </div>
        
    </body>
</html>