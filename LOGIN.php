<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="indexlogin.css" /> 
    <script src="jquery-3.7.1.min.js"></script>
    <script src="lolo.js"></script>
</head>

<body>
    <div class="container">
        <div class="login-form">
            <h1>Login</h1>
            <form id="login-form" method="POST">
                <label for="name">Nome</label>
                <input type="text" id="name" name="nome" placeholder="Inserisci il tuo nome" required />

                <?php
               
    if (isset($_POST['nome']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $password = $_POST['password'];
        $arrayUtenti = [
            'Lorenzo' => "Lorenzo01",
            'Luca' => "Luca02",
            'Giovanni' => "Giovanni03",
            'Davide' => 'Davide04',
            'francesco' => 'Francesco05',
            'Mari0' => 'Mario06',
            'Mattia' => 'Mattia07',
        ];
        $persone = ['Lorenzo','Luca','Giovanni','Davide','Francesco','Mario','Mattia']; 

        
        if (array_key_exists($nome, $arrayUtenti)) {
            $passwordUtente = $arrayUtenti[$nome];
            

        } else {
            echo "<p style='color: red;'>Errore: Nome non valido. Per favore riprova.</p>";
        }
        if(array_key_exists($nome, $arrayUtenti)) {
            
            if($passwordUtente==$password ){
                header('Location: HOMEWEB.php');
            } else {
                echo "<p style='color: red;'>Errore: Password errata. Per favore riprova.</p>";
            }
        }
    }
    ?>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Inserisci la tua password" required />
           

                <div class="error-message" id="error-message"></div>

                <button type="submit">Accedi</button>

                <a href="registrati.php">
                <button type="button">registrati</button>
                </a>



            </form>
        </div>
    </div>
    <script>
    