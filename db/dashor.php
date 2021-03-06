<?php

include('protect.php');
 
    include('conect.php');

    if(!empty($_POST)){

    $sql_code = "SELECT * FROM cliente";

    
            $sql_query = $mysqli->query($sql_code) or die("Falha na execulção no código SQL");

            $quantidade = $sql_query->num_rows;


                $usuario = $sql_query->fetch_assoc();

                $_SESSION['id'] = $usuario['id'];

                $_SESSION['nome'] = $usuario['nome'];
    
                $_SESSION['cpf'] = $usuario['cpf'];

}
?>

<!DOCTYPE html>

<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>dev.economie$</title>

        <link rel="stylesheet" href="../Componentes/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>            

        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">

    </head>
    <body>
        
        <header>
            <h1 id="logo">dev.economie$</h1>
            <p style="color:white; font-size: 23px;">Olá <?php echo $_SESSION['nome'];?></p>
            <p id=logout>
            <a href="./cadastro.php" 
                class="button new" style="color:white;">+ Adicionar Cliente</a> >
            <a href="logout.php" style="color:white;"><i class='fa fa-sign-out'></i> Sair</a>
    </p>
        </header>

        <main class="container">
            <section id="balance">
                <h2 class="sr-only">Balanço</h2>

                <div class="card">
                    <h3>
                        <span>
                            Entradas
                        </span>
                        <img src="../assets/income.svg" alt="Image de entradas">
                    </h3>
                    <p id="incomeDisplay">R$ 0,00</p>
                </div>

                <div class="card">
                    <h3>
                        <span>
                            Saídas
                        </span>
                        <img src="../assets/expense.svg" alt="Image de saídas">
                    </h3>
                    <p id="expenseDisplay">R$ 0,00</p>
                </div>

                <div class="card total">
                    <h3>
                        <span>
                            Total
                        </span>
                        <img src="../assets/total.svg" alt="Image de total">
                    </h3>
                    <p id="totalDisplay">R$ 0,00</p>
                </div>
                
            </section>

            <section id="transaction">
                <h2 class="sr-only">Transações</h2>

                <a href="#" 
                onclick="Modal.open()"
                class="button new">+ Nova Transação</a>
        
                <table id="data-table">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Data</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </section>
        </main>

        <div class="modal-overlay">
            <div class="modal">
                <div id="form">
                    <h2>Nova Transação</h2>
                    <form action="" onsubmit="Form.submit(event)" method="POST">
                        <div class="input-group">
                            <label 
                                class="sr-only" 
                                for="description">Descrição</label>
                            <input 
                                type="text" 
                                id="description" 
                                name="description"
                                placeholder="Descrição"
                            />
                        </div>

                        <div class="input-group">
                            <label 
                                class="sr-only" 
                                for="amount">Valor</label>
                            <input 
                                type="number"
                                step="0.01"
                                id="amount" 
                                name="amount"
                                placeholder="0,00"
                            />
                            <small class="help">Use o sinal - (negativo) para despesas e , (vírgula) para casas decimais</small>
                        </div>

                        <div class="input-group">
                            <label 
                                class="sr-only" 
                                for="date">Data</label>
                            <input 
                                type="date" 
                                id="date" 
                                name="date"
                            />
                        </div>

                        <div class="input-group actions">
                            <a 
                            onclick="Modal.close()"
                            href="#" 
                            class="button cancel">Cancelar</a>
                            <button>Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer><p>dev.economie$</p></footer>

        <script src="../Javascript/scripts.js"></script>
    </body>
</html>
