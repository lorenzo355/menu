<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BM Informatica</title>
    <link rel="stylesheet" href="siamo.css">
    <link rel="stylesheet" href="styleHome.css">
    <style>
        
        .image-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; 
            justify-content: center;
        }

        
        .image-container div {
            width: 350px; 
            height: 220px; 
        }

        img {
            width: 100%; 
            height: 100%; 
            object-fit: cover;
        }
    </style>

</head>
<body>
    <header>
        <div class="container">
            <h1>BM INFORMATICA</h1>
            <p>Partner IT dal 1980</p>
        </div>
        <?php
            include 'nav.php';
        ?>
    </header>

    <h1>Le news</h1>

    <section class="intro">
  
        <div class="image-container">
            
           
            <div>
            <h4>CYBERSECURITY E DIRETTIVA EUROPEA</h4>
                <a href="cybersecurity.php">
                    <img src="cybersecurity.jpg" alt="cybersecurity" />
                </a>
            </div>

            
            <div>
            <h4>LO SVILUPPO DI SOFTWARE SU MISURA</h4>
                <a href="software.php">
                    <img src="software1.jpg" alt="software" />
                </a>
            </div>

            
            <div>
            <h4>I GESTIONALI ERP POSSONO AIUTARE LA TUA IMPRESA</h4>
                <a href="gestionale.php">
                    <img src="gestionale.jpg" alt="gestionale" />
                </a>
            </div>

            
            <div>
            <h4>CRM PER LA GESTIONE DEL CLIENTE</h4>
                <a href="crm.php">
                    <img src="crm.jpg" alt="crm" />
                </a>
            </div>

            
            <div>
            <h4>FORNITURE PER ISTITUTI SCOLASTICI</h4>
                <a href="scuola.php">
                    <img src="scuola.jpg" alt="scuola" />
                </a>
            </div>

            
            <div>
            <h4>4 CONSIGLI PER LA PROTEZIONE DEI DATI </h4>
                <a href="dati.php">
                    <img src="dati.jpg" alt="dati" />
                </a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2025 BM Informatica | All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>
