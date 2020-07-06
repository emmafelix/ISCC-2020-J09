<?php

session_start();

echo $_POST['login'];
echo '<br>';
echo $_POST['password'];
echo '<br>';

if ($_POST['password']=='2020'){
    $_SESSION['id']=$_POST['login'];
    
header('Location:http://localhost:8888/ISSC%20-%202020/ISCC-2020-J09/EX-01/mini-site-routing.php?page=1');

}
elseif($_POST['password'] !='2020'){
    echo 'Mauvais couple identifiant / mot de passe.<br>';
    echo '<a href="http://localhost:8888/ISSC%20-%202020/ISCC-2020-J09/EX-01/mini-site-routing.php?page=connexion">Connexion</a>';
}

$cleid = array_keys($_SESSION);
if(array_key_exists('id',$_SESSION)==true){
  setcookie ($cleid[0],$_SESSION['id']);
}

?>