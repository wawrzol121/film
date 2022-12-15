<html>
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
 <header><h3>Logowanie</h3></header>
    <div class="nic"></div>
    
        <div class="logi">
            <form method="post">
            <p>login <input type="text" name="login"></p>
            <p>hasło <input type="text" name="password"></p>
    
         <?php
        $conn = new mysqli("localhost", "root", "", "move");

             if(isset($_POST["login"])){
            $sql= "SELECT * FROM user  WHERE login='".$_POST['login']."' AND password='".$_POST['password']."'";
            $res = $conn->query($sql);
            $row = $res->fetch_array();
            if(count($row)>0){
                setcookie("user_id",$row["id"]);
                header('location:move-search.php');
            }
             }
               

          

                


        ?>
        <input type="submit" value="Zaloguj">
                <button type="button"><a href="register.php">Zapisz się</a></button></form>
    </div>
    
    
   
    
   
    
    
    </body>
</html>
