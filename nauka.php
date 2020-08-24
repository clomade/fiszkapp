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
                <li class='active'><a href='nauka.php'>NAUKA</a></li>
                <li><a href='wprowadz.php'>WPROWADŹ</a></li>
                <li><a href='baza.php'>BAZA</a></li>
            </ul>
            </nav>
            </div>

            <div class='main'>
         
                <p style="color:white; text-align: center; font-size: 130%; ">
                
                    <?php 

                            $polaczenie = mysqli_connect('localhost','root','', 'fiszkapp');
                            $sqlmemory = "SELECT COUNT(odpowiedz) FROM czlowiek WHERE odpowiedz = 1";
                            $sqlmax = "SELECT COUNT(odpowiedz) FROM czlowiek";

                            $memory = mysqli_query($polaczenie, $sqlmemory);
                            $max = mysqli_query($polaczenie, $sqlmax);

                            while($wierszmem = mysqli_fetch_assoc($memory)){                
                                $mem = $wierszmem['COUNT(odpowiedz)'];
                                echo 'Zapamiętane: '.$mem.'/';
                            }

                            while($wierszmax = mysqli_fetch_assoc($max)){                
                                $maxpoint = $wierszmax['COUNT(odpowiedz)'];
                                echo $maxpoint;
                            }
                        
                        ?>
               </p>

               <p style="color:grey; text-align: center;">
               <?php

                    $sqlagain = "SELECT COUNT(odpowiedz) FROM czlowiek WHERE odpowiedz = 2";
                    $again = mysqli_query($polaczenie, $sqlagain);        

                    while($wierszagain = mysqli_fetch_assoc($again)){                
                        $agn = $wierszagain['COUNT(odpowiedz)'];
                        echo 'Do powtórki: '.$agn;
                    }
               ?>
               </p><br/>

                <div class="fiszka"> 
                
                    <a href='nauka2.php' style="text-decoration: none; color: black; font-size: 120%; text-align: center;">
                    <p>
                        
                    <?php           

                        $sqlpl = "SET NAMES 'utf8' COLLATE 'utf8_unicode_ci'";
                        $sql = "SELECT Polski FROM czlowiek WHERE Odpowiedz=0 AND Kryterium='czlowiek' LIMIT 1";

                        $zmiana = mysqli_query($polaczenie, $sqlpl);
                        $wynik = mysqli_query($polaczenie, $sql);
                   
                        while($wiersz = mysqli_fetch_assoc($wynik)){
                            
                            $pl = $wiersz['Polski'];
                        
                            echo $pl;                                    
                        
                        }

                        if(($mem+$agn) == $maxpoint){
                            echo 'KONIEC! <br/> Zacznij od nowa!';
                        }
                                              
                ?>                                 
                   </p><a> 
                </div>
                
                <div class='przycisk'>
                    <form method="post" action='nauka.php'>
                        <button type='submit' name='correct' class='correct'>DOBRZE</button>
                        <button type='submit' name='uncorrect' class='uncorrect'>ŹLE</button>
                        <button type='submit' name='again' class='again'>JESZCZE RAZ</button>
                        <br/>
                        <button type='submit' name='reset' class='reset'>RESETUJ WSZYSTKIE POPRAWNE ODPOWIEDZI</button>
                    </form>
                    
<?php
    if(isset($_POST['correct'])){
        
        $sql2="UPDATE czlowiek SET Odpowiedz=1 WHERE Odpowiedz=0 AND Kryterium='czlowiek' LIMIT 1";
        $odpowiedz = mysqli_query($polaczenie, $sql2);
        
        header('refresh: 0;');
       
    }

    if(isset($_POST['uncorrect'])){
        
        $sql2="UPDATE czlowiek SET Odpowiedz=2 WHERE Odpowiedz=0 AND Kryterium='czlowiek' LIMIT 1";
        $odpowiedz = mysqli_query($polaczenie, $sql2);
        
        header('refresh: 0;');
       
    }

    if(isset($_POST['again'])){
        
        $sql2="UPDATE czlowiek SET Odpowiedz=0 WHERE Odpowiedz=2";
        $odpowiedz = mysqli_query($polaczenie, $sql2);
        
        header('refresh: 0;');
       
    }

    if(isset($_POST['reset'])){
        $sql3 = "UPDATE czlowiek SET Odpowiedz=0";
        $odpowiedz = mysqli_query($polaczenie, $sql3);
        header('refresh: 0;');
        }

    mysqli_close($polaczenie); 
?>

                
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