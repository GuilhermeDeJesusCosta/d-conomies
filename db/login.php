<?php
    include('conect.php');

    if(!empty($_POST['cpf']) && !empty($_POST['senha'])) {

        if(strlen($_POST['cpf']) == 0) {

            echo "Preencha seu E-mail!";

        } else if(strlen($_POST['senha']) == 0) {

            echo "Preencha sua Senha!";

        } else {

            $email = $mysqli->real_escape_string($_POST['cpf']);

            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM cliente WHERE cpf = '$email' LIMIT 1";

            $sql_query = $mysqli->query($sql_code) or die("Falha na execulção no código SQL");

            $quantidade = $sql_query->num_rows;


                $usuario = $sql_query->fetch_assoc();

                if(password_verify($senha, $usuario['senha'])){

                        session_start();
                        
                    $_SESSION['id'] = $usuario['id'];

                    $_SESSION['nome'] = $usuario['nome'];
        
                    $_SESSION['cpf'] = $usuario['cpf'];
                    
                    header("Location: ./db/dashor.php");

                    

                }else {
                    echo "Não logado!";
                }

            }
    }
    ?>