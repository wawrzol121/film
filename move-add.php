<html>
<head>
    <meta charset="UTF-8">
    <title>Wypożyczalnia</title>
    <link rel="stylesheet" href="style.css">
</head>
<header1>
<h3> Dodaj film </h3>

</header1>
    <body>
        <div class="dodaj">
            <form method="post">
                
                <p>rodzaj<input type="text" name="rodzaj"></p><br>
                <p>dlugos<input type="text" name="dlugosc"></p><br>
                <p>rok_produkcji<input type="text" name="rok_produkcji"></p><br>
                <p>autor<input type="text" name="autor"></p><br>
                <p>nazwa<input type="text" name="nazwa"></p><br>
                <p>wypozyczony<input type="text" name="wypozyczony"></p><br>
        
       <?php 
$conn = mysqli_connect('localhost', 'root', '', 'move' );


            if(isset($_POST['film'])){
                $rodzaj=$_POST['rodzaj'];
                $dlugosc=$_POST['dlugosc'];
                $rok_produkcji=$_POST['rok_produkcji'];
                $autor=$_POST['autor'];
                $nazwa=$_POST['nazwa'];
                $wypozyczony=$_POST['wypozyczony'];

                $sql="INSERT INTO `film` (`idfilm`, `rodzaj`, `dlugosc`, `rok_produkcji`, `autor`, `nazwa`, `wypozyczony`) VALUES ('', '$rodzaj', '$dlugosc', '$rok_produkcji', '$autor', '$nazwa', '$wypozyczony')";  
                $result= $conn->query($sql);
                $row = $res->fetch_all();
                if(count($row)>0){
                echo $result;
                header('location:move-search.php');
              
            }
            }


                ?>
                <input type="submit" value="Dodaj">
        </form>
        
        </div>
    </body>
</html>
