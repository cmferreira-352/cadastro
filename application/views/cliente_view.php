<html>
    <head>
        <title>
            Cadastro de Cliente
        </title>
    </head>
    <body>
        <form method="POST" name="cadastro" action="<?php echo site_url('cliente/criar')?>">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" />
            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" />
            <input type="submit" name="criar" value="Cadastrar" />
                          
        </form>
    </body>
</html>