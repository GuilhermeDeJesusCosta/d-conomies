<?php 
    include('conect.php');

    if(!empty($_POST)){

    $nome =  $mysqli->real_escape_string($_POST['nome']);

    $email = $mysqli->real_escape_string($_POST['cpf']);

    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $mysqli->query("INSERT INTO cliente (nome, cpf, senha ) VALUES ('$nome','$email','$senha')");
    }

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro</title>

</head>

<body>
            
        <form action="" method="post">

            <p>
                <label for="">User_name:</label>

                <input type="text" name="nome">

            </p>

            <p>

                <label for="">cpf:</label>
            
                <input type="text" name="cpf"  onkeypress="return onlynumber();" maxlength="16" minlength="7"  onkeydown="javascript: fMasc( this, mCPF );">

            </p>

            <p>
                <label for="">Pass_Senha:</label>

                <input type="password" name="senha">

            </p>

            <p>
                <input type="submit" value="Cadastrar-se">

                <input type="button" value="Tenho uma Conta">

            </p>

        </form>

        <script src="../Javascript/scripts.js"></script>


</body>

</html>