<?php

include('./db/login.php');

?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Login - Dev.economie$</title>
 
        <link rel="stylesheet" href="./Componentes/style.css">

        <!-- Font Awesome -->



        <link rel="preconnect" href="https://fonts.gstatic.com">
    
      
    </head>

    <body>
        
        <header>

            <h1 id="logo">Dev.economie$</h1>

        </header>

   
       <div class="card">

        <form action="" method="post">

        <h1>Entrar no Sistema</h1>

        <h6>Faça login no nosso sistema</h6>

        <br>
       
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF" required onkeypress="return onlynumber();"  onkeydown="javascript: fMasc( this, mCPF );" minlength="14" maxlength="14">
       
        <p>
      
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required onkeypress="return onlynumber();" maxlength="16" minlength="7"></p>
       
        <br>
       
        <input type="submit" style="background-color: green; cursor: pointer; color: white;" value="Entrar">
    
    </form>
       
</div>
       
      
        <footer><p>dev.economie$</p></footer>

        <script src="./Javascript/scripts.js"></script>

    </body>
</html>

