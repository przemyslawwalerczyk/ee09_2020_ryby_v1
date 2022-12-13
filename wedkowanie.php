<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Wędkujemy</title>
</head>

<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <div id="lewy">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
        <?php
            $connect = new mysqli('localhost', 'root', '', 'wedkowanie');
            $sql = "SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";
            $result = $connect->query($sql);

            while($row = $result->fetch_assoc()) {
                $name = $row['nazwa'];
                $presence = $row['wystepowanie'];
                echo "<li> $name, wystepowanie: $presence</li>";
            }
            
            $connect->close();
           
        ?>
    </div>
    
    <div id="prawy">
        <img src="ryba.jpg" alt="Sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    
    <footer>
        <p>Stronę wykonał: Przemysław Walerczyk</p>
    </footer>

</body>      

</html>