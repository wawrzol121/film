<html>
<head>
    <meta charset="UTF-8">
    <title>Wypożyczalnias</title>
    <link rel="stylesheet" href="style.css">
</head>
<header1>
<h3> Zapisz sie </h3>

</header1>
    <body>
        <div class="zalo">
            <form method="post">
                
                <p>login<input type="text" name="login"></p><br>
                <p>password<input type="text" name="password"></p><br>
            <p>name<input type="text" name="name"></p><br>
        
       <?php 
$conn = mysqli_connect('localhost', 'root', '', 'move' );


            if(isset($_POST['login'])){
                $login=$_POST['login'];
                $password=$_POST['password'];
                $name=$_POST['name'];

                $sql="INSERT INTO `user` (`iduser`, `name`, `login`, `password`) VALUES (NULL, '$login', '$password', '$names'); "; 
                $result=$conn->query($sql);
                echo $result;
                header('location:login.php');
              
            }


                ?>
                <input type="submit" value="Zakończ">
        </form>
        
        </div>
    </body>
</html>
