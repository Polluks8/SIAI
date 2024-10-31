<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wedkowania</title>
    <link rel="stylesheet" href="styl21.css">
</head>
<body>
    <header> <h2>Wedkuj z nami</h2> </header>
    <div class="lewy"><img src="ryba2.jpg" alt="Szupak"></div>
    <div class="prawy">
        <h3>"Ryby spokojnego zeru (biale)"</h3>
        <?php
        $conn = mysqli_connect("localhost", "root","", "egzamin_2020_01_01");
        $sql = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=1";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            echo '<p>' .$row[0].'. '.$row[1].', wystepuje w: '.$row[2].'</p>';
        }

        mysqli_close($conn);
        ?>
            
        <ol>
            <li><a href="https://wedkuje.pl/">"Odwiedz takze"</a> </li>
            <li><a href="http://www.pzw.org.pl/">"Polski Zwiozek Wekarski</a></li>
        </ol>    
  
    </div>
    <footer><p>"Strone wykonal:74373732</p></footer>
</body>
</html>