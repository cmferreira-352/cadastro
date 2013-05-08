<html>
    <head>
        <meta charset="utf-8">
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
    </body>
</html>