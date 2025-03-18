<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    

<?php
    $db = new mysqli('localhost', 'root', '', 'tanariKar');


        if (isset($_POST['submit'])) {

            $errors = array(); // a hibáknak létrehozok egy tömbböt amit majd kiíratok
            $success = true;

            if (empty($_POST['username'])) {
                $succes = false;
                array_push($errors, "A felhasználónév mező üres!");
            }

            if (empty($_POST['password'])) {
                $succes = false;
                array_push($errors, "A jelszó mező üres!");
            }

            if (empty($_POST['rePassword'])) {
                $succes = false;
                array_push($errors, "A jelszó megerősítése mező üres!");
            }

            if (!($_POST['password'] == $_POST['rePassword'])) {
                $succes = false;
                array_push($errors, "A jelszavask nem egyeznek meg!");            
            }


                if ($success) {
                    //regisztráció sikeres
                    $username = mysqli_real_escape_string($db, $_POST['username']);
                    $password = mysqli_real_escape_string($db, $_POST['password']);
                    $password = sha1($password); // átalakítjuk hexadecimálisra

                    $sql = "INSERT INTO users(name, password, date)
                    VALUES('$username', '$password', NOW())"; //NOW = aktuális dátummal kerül be

                    $db->query($sql);
                    session_start();
                    $_SESSION['name'] = $username;
                    header('location: home.php'); //átnavigál a home.php oldalra ami majd nálunk az index.php lesz!!!
                
                }     
        }
    
    $db->close();   

?>


    <form action="register.php" method="POST">
        username<input type="text" name="username">
        password<input type="password" name="password">
        repassword<input type="password" name="rePassword">
        <input value="Regisztráció" type="submit" name="submit">
    </form>

    <?php

        if (!empty($errors)) {
            foreach ($errors as $key) {
                echo $key."<br>";
            }
        } 

    ?>

</body>
</html>