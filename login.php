<html>
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<header1>
<h3> Logowanie</h3>

</header1>
<body>
    <form method="post">
        <div class="logi">
            <p>login <input type="text" name="login"></p>
            <p>hasło <input type="text" name="password"></p>
    
         <?php
        $conn = new mysqli("localhost", "root", "", "move");

             if(isset($_POST["login"])){
            $sql= "SELECT * FROM user WHERE login='".$_POST['login']."' AND password='".$_POST['password']."'";
            $res = $conn->query($sql);
            $row = $res->fetch_array();
            if(count($row)>0){
                setcookie("user_id",$row["id"]);
                header('location:index.php');
            }
             }
                else (isset($_POST["login"])){
               }
                

          

                


        ?>
        
   
        <input type="submit" value="Zaloguj">
    </div>
    </form>
    <div class="zalo"><button type="button"><a href="logout.php">Zapisz się</a></button></div>
   
    
   
    
    
    </body>
</html>
