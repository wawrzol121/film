<html>
<head>
    <meta charset="UTF-8">
    <title>strona główna</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
<h3> Wypożyczalnia Filmów</h3>
</header>
    <div class="log"><button type="button"><a href="login.php">zaloguj</a></button></div>
<body>
    <div class="a">
    <?php
$conn = new mysqli("localhost", "root", "", "move");

       $sql= '"SELECT idfilm, nazwa ,rodzaj   , dlugosc , rok_produkcji ,autor,swypozyczony FROM film AS i JOIN user ON id=autor.iduser"';
         
    $res = $conn->query("SELECT `idfilm`, `Nazwa`,`rodzaj`,`dlugosc`, `rok_produkcji`,`autor`, `wypozyczony`  FROM `film`");
    $film = $res->fetch_all(MYSQLI_ASSOC);
    for($i = 0; $i<count($film); $i++){
        echo "<h3>idfilm = ".$film[$i]["idfilm"]."</h3>";
        echo"<h3>Nazwa = ".$film[$i]["Nazwa"]."</h3>";
        echo"<h3>rodzaj =".$film[$i]["rodzaj"]."</h3>";
        echo"<h3>dlugosc =".$film[$i]["dlugosc"]."</h3>";
        echo"<h3>rok_produkcji =".$film[$i]["rok_produkcji"]."</h3>";
        echo"<h3>autor = ".$film[$i]["autor"]."</h3>";
        echo"<h3>wypozyczony =".$film[$i]["wypozyczony"]."</h3>";
    }

    

?>
    </div>
  
    
    </body>
</html>
