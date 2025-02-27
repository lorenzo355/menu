<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="indexlogin.css" /> 
    <script src="jquery-3.7.1.min.js"></script>
    <script src="registrati.php"></script>
</head>

<body>
    <div class="container">
        <div class="login-form">
            <h1>Login</h1>
            <form id="login-form" method="POST">
                <label for="name">Nome</label>
                <input type="text" id="name" name="nome" placeholder="Inserisci il tuo nome" required />

                <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $password = $_POST['password'];

    
    $json = file_get_contents('utenti.json');
    
    $arrayUtenti = json_decode($json, true);

    
    if (array_key_exists($nome, $arrayUtenti)) {
        
        if ($arrayUtenti[$nome] === $password) {
            
            header('Location: HOMEWEB.php');
            exit;
            } else {
            echo "<p style='color: red;'>Errore: Password errata. Per favore riprova.</p>";
            }
            } else {
            echo "<p style='color: red;'>Errore: Nome non valido. Per favore riprova.</p>";
         }
        }
        ?>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Inserisci la tua password" required />
           

                <div class="error-message" id="error-message"></div>

                <button type="submit">Accedi</button>

                <a href="registrati.php">Registrati</a>
                
                
            </form>
        </div>
    </div>
    <script>