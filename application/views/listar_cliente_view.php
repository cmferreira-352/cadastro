<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/bootstrap/css/bootstrap.min.css"/>
        <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>public/js/remover.js"></script>
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
                            Editar
                            <i class="icon-edit"></i>
                        </a>
                        <a id="remover-action" rel="<?php echo $cliente->id ?>" class="btn btn-action" data-toggle="modal"
                           href="#modalRemover" onclick="passId(<?php echo $cliente->id ?> , '<?php echo base_url() ?>')">
                            Deletar
                            <i class="icon-remove"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        
        <!-- Modal -->
        <div id="modalRemover" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Remover Cliente</h3>
          </div>
          <div class="modal-body">
            <p>Deseja remover este cliente?</p>
          </div>
          <div class="modal-footer">
              <form id="remover-form" action="" name="remover" method="POST">
                <input type="submit" class="btn btn-danger" value="Sim" />
                <button class="btn btn-action" data-dismiss="modal" aria-hidden="true">Não</button>
              </form>
          </div>
        </div>
        
    </body>
</html>