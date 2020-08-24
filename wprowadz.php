<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>FISZKI</title>
        <link href='styl.css' rel='stylesheet' type='text/css'>
        <meta name='author' content='Anna Krawczyk (clomade)'/>
        <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class='container'>
            <div class="baner">
                <h1>DARMOWA NAUKA FISZEK</h1>
            </div>

            <div class="menu">
            <nav>
            <ul>
                <li><a href='index.html'>WITAJ</a></li>
                <li><a href='nauka.php'>NAUKA</a></li>
                <li class='active'><a href='wprowadz.php'>WPROWADŹ</a></li>
                <li><a href='baza.php'>BAZA</a></li>
            </ul>
            </nav>
            </div>

            <div class='main'>

                <div class='formularz'>

                    <form method='post' action='wprowadz.php'>
                        
                        <span style='color:white;'>Polski: <input type='text' name='polski'><br/><br/>
                        
                        Angielski: <input type='text' name='angielski'><br/><br/>
                        
                        Źródło: <select name='zrodlo'>
                            <option>Longman</option>
                            <!--<option>inne</option>-->
                        </select><br/><br/>
                        
                        Kryterium: <select name='kryterium'>
                            <option>Czlowiek</option>
                            <!--<option>Dom</option>-->
                            <!--<option>Inne</option>-->
                        </select></span> <br/><br/>

                        <input type='submit' value='DODAJ'><br/><br/><br/><br/>

                    </form>

                </div>

                <?php

                        $polski = isset($_POST['polski']) ? $_POST['polski'] : '';
                        $angielski = isset($_POST['angielski']) ? $_POST['angielski'] : '';
                        $zrodlo = isset($_POST['zrodlo']) ? $_POST['zrodlo'] : '';
                        $kryterium = isset($_POST['kryterium']) ? $_POST['kryterium'] : '';

                        if ($polski AND $angielski AND $zrodlo AND $kryterium){  



                        $polaczenie = mysqli_connect('localhost','root','', 'fiszkapp');

                        $sqlpl = "SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'";
                        $sqladd = "INSERT INTO czlowiek(Polski, Angielski, Zrodlo, Odpowiedz, Kryterium) VALUES ('$polski', '$angielski', '$zrodlo', 0, '$kryterium')";

                        $zmiana = mysqli_query($polaczenie, $sqlpl);
                        $wynik = mysqli_query($polaczenie, $sqladd);

                        echo '<p style="color:white; text-align: center; font-size: 150%; "><b><u>'.$polski.'</u></b> dodano do bazy!</p>';

                        } else {                    
                        echo "<p style='color:white; text-align: center; font-size: 200%;'>PODAJ DANE !</p>";
                        }    

                    ?>

            </div>

            <div class='footer'>
                <hr>
                <p>Autor: Anna Krawczyk (clomade)</p>
                <!--<img src='logo.img' alt='Logo strony'>-->
                <hr>
            </div>
        </div>
    </body>
</html>