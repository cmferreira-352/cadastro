<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/bootstrap/css/bootstrap.min.css"/>
        <title>
           Alteração de Dados   
        </title>
    </head>
    <body>
        <h1> Atualização de dados <?php echo $cliente->nome ?></h1>
        <?php echo $this->session->flashdata('message'); ?>
        <form method="POST" name="cadastro" action="<?php echo site_url('cliente/atualizar/'.$cliente->id)?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $cliente->nome?>"/>
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" value="<?php echo $cliente->telefone ?>"/>
            <input type="submit" name="criar" value="Atualizar" />
            <?php echo validation_errors()?>              
        </form>
        
    </body>
</html>
