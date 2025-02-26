
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