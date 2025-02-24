<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu a Tendina Azienda Informatica</title>
    <link rel="stylesheet" href="styleHome.css">
    <script src="jquery-3.7.1.min.js"></script>
</head>
<body>

    <header>
        <div class="logo"> 
            <h1>BM Informatica Srl</h1>
        </div>

        
        <?php
                include 'nav.php';
                ?>
    </header>

    <div id="home" class="hero">
        <h2>Benvenuto in BM Informatica Srl</h2>
        <p>Siamo il partner tecnologico di fiducia per le aziende, offrendo soluzioni software e hardware innovative.</p>
        <button id="btn-test">info</button>
    </div>

<script>
    $(document).ready(function(){
        console.log('pronto');
        $('#btn-test').on('click',function(){
            alert('benvenuto nel sito ufficiale della nostra azienda. Qui sotto troverai tutte le informazioni che stavi cercando');
        })
    });
    
</script>
    <section id="chi-siamo">
        <div class="container">
            <h2>Chi Siamo</h2>
            <p>Siamo il partner IT di riferimento per molte aziende nel territorio forlivese. La nostra missione è garantire il miglior supporto per la progettazione, realizzazione e gestione dei sistemi aziendali.</p>
            <p>Offriamo soluzioni informatiche complete, personalizzabili e adatte a ogni esigenza aziendale, con un approccio mirato alla qualità e all'efficienza. La nostra squadra è composta da esperti professionisti che lavorano costantemente per garantire un supporto tecnologico di alto livello.</p>
            <img  class="about-img"><h4>Team aziendale</h4>
        </div>
    </section>

    <footer>
        <p>Per informazioni contattaci al numero sottostante<br><strong>0543724290</strong><br><strong>Email:</strong> <a href="mailto:info@bm-informatica.it">info@bm-informatica.it</a></p>
    </footer>
    
</body>
</html>
