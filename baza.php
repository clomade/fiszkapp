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
                <li><a href='wprowadz.php'>WPROWADŹ</a></li>
                <li class='active'><a href='baza.php'>BAZA</a></li>
            </ul>
            </nav>
            </div>

            <div class='main'>

                <div class='baza'>
                    <table>
                        <thead>
                        <tr>
                            <th>LP</th>
                            <th>POLSKI</th>
                            <th>ANGIELSKI</th>
                        </tr>
                        </thead>

                    <?php

                        $polaczenie = mysqli_connect('localhost','root','', 'fiszkapp');

                            $sqlpl = "SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'";
                            $sqlbaza = "SELECT LP, polski, angielski FROM czlowiek";

                            $zmiana = mysqli_query($polaczenie, $sqlpl);
                            $baza = mysqli_query($polaczenie, $sqlbaza);

                            while($wierszbaza = mysqli_fetch_assoc($baza)){
                                
                                $lp = $wierszbaza['LP'];
                                $pl = $wierszbaza['polski'];
                                $ang = $wierszbaza['angielski'];

                                echo '<tr><td>'.$lp.'</td><td>'.$pl.'</td><td>'.$ang.'</td></tr>';
                            }
                    ?>

                    </table>
                </div>
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