<?php
    $user = "";
    $pwd ="";
    $salah = 0;

    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];

    if($user == ""){
        $salah = 1;
    } else {
        echo " isi dari field user : " .$user;
    }
    if($pwd == ""){
        $salah = 1;
    } else {
        echo " isi dari field password : " .$pwd;
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form dengan Metode POST </title>
</head>
<body>
    
<?php
    if($salah == 1){
        echo "<div style ='color : red'> User Name/ Password Masih Kosong </div>";
    }
?>
    <form method= "POST" action= "latihan2.php"> 
        <div>
            User Name 
            <input type ="text" name="txUSER">
        </div>
        <div>
            Password 
            <input type ="password" name="txPASS">
        </div>
        <div>
            <button type="submit"> Login </bottom>
        </div>
    </form>

</body>
</html>