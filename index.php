<?php
$msg='';

if(!isset($_POST['log'])){
    $msg = ''; 
}
else{
    if(empty($_POST['login']) || empty($_POST['haslo'])){
        $msg='brak loginu lub hasła';
    }
    else{
        if($_POST['haslo']=='test' && $_POST['login'] == 'admin'){
            $msg='zalogowałeś się';
        }
        else{
            if($_POST['login']!= 'admin'){
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