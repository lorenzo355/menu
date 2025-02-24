<nav>
    <ul>
        <?php
        $filename = 'db-nav.txt';
        $leggi = fopen($filename, 'r');
        $size = 1024;
        
        while (!feof($leggi)) {
            $rec = fread($leggi, $size);
        }
        fclose($leggi);

        $padri = [];
        $figlie = [];
        $i=0;
        foreach (explode("\n", $rec) as $string) {
            $parts = explode("|", $string);
            
            $indice=$parts[0];
            $descrizione=$parts[1];
            $nomePagina=$parts[2];
            $isPadre=(ctype_digit($indice));
            

            if($isPadre)
            {
                if($i>0)
                {
                    echo '</div>
                            </li>';
                }
                echo '<li class="dropdown">
            <a href="" class="dropbtn">'.$descrizione.'</a>
            <div class="dropdown-content">';
            }else{
                echo '<a href="'.$nomePagina.'">'.$descrizione.'</a><br>';
            }

            if (ctype_digit($indice)) {
                $padri[$indice] = ['descrizione' => $descrizione, 'pagina' => $nomePagina, 'figlie' => []];
            } else {
                $figlie[] = ['padre' => $indice, 'descrizione' => $descrizione, 'pagina' => $nomePagina];
            }
            $i++;
        }
        ?>
    </ul>
</nav>
