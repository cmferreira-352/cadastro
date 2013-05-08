<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/bootstrap/css/bootstrap.min.css"/>
        <title>
            Cadastro de Cliente
        </title>
    </head>
    <body>
        <?php echo $this->session->flashdata('message'); ?>
        <form method="POST" name="cadastro" action="<?php echo site_url('cliente/criar')?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" />
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" />
            <input type="submit" name="criar" value="Cadastrar" />
            <?php echo validation_errors()?>              
        </form>
        
        <a href="<?php echo site_url('cliente/listar') ?>" class="btn btn-action">Listar Clientes</a>
    </body>
</html>