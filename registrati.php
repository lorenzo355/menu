<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione Utente</title>
    <link rel="stylesheet" href="registrazione.css">
</head>
<?php
$errore_nome = $errore_email = $errore_password = '';
$nome = $email = $password = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = sanitize_input($_POST["nome"]);
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    if (empty($nome)) {
        $errore_nome = "Il nome è obbligatorio.";
    }

    if (empty($email)) {
        $errore_email = "L'email è obbligatoria.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errore_email = "L'email non è valida.";
    }

    if (empty($password)) {
        $errore_password = "La password è obbligatoria.";
    }

    if (empty($errore_nome) && empty($errore_email) && empty($errore_password)) {
        update_json_file($nome, $password);
        echo "Registrazione avvenuta con successo!";
    }
}

function sanitize_input($data) {
    return htmlspecialchars(trim($data));
}

function update_json_file($nome, $password) {
    $file = 'users.json'; 

    $json_data = file_get_contents($file);
    $users = json_decode($json_data, true);

    $users[$nome] = $password;

    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}
?>
<body>
    <div class="container">
        <h2>Registrazione</h2>
        <form action="register.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
                <span class="error"><?php echo $errore_nome; ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $errore_email; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>">
                <span class="error"><?php echo $errore_password; ?></span>
            </div>
           
            <button type="submit" class="btn">Registrati</button>
            <a href="LOGIN.php">Accedi</a>
        </form>
    </div>
</body>
</html>
