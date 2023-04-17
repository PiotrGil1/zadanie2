<?php
$l = 'admin';
$h = 'test';


$msg='';

if(!isset($_POST['log'])){
    $msg = ''; 
}
else{
    $haslo = $_POST['haslo'];
    $login = $_POST['login'];
    if(empty($login) || empty($haslo)){
        $msg='brak loginu lub hasła';
    }
    else{
        if($haslo==$h && $login == $l){
            $msg='zalogowałeś się';
        }
        else{
            if($login!= $l){
                $msg = 'niepoprawny login';
            }
            else{
                $msg = 'niepoprawne hasło';
            }
        }
        
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekran logowania</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name='login' placeholder="login">
    <input type="text" name='haslo' placeholder="hasło">
    <input type="submit" name='log' value="zaloguj się">
    <p><?=$msg;?></p>
</form>
</body>
</html>