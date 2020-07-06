<html>
<head>
<title>mini-site-routing</title>
</head>
<body>
    <header>
<nav>
    <a href="http://localhost:8888/ISSC%20-%202020/ISCC-2020-J09/EX-01/mini-site-routing.php?page=1">Accueil</a>
    <a href="http://localhost:8888/ISSC%20-%202020/ISCC-2020-J09/EX-01/mini-site-routing.php?page=2">Page1</a>
    <a href="http://localhost:8888/ISSC%20-%202020/ISCC-2020-J09/EX-01/mini-site-routing.php?page=3">Page2</a>
    <a href="http://localhost:8888/ISSC%20-%202020/ISCC-2020-J09/EX-01/mini-site-routing.php?page=connexion">Connexion</a>
<?php 
session_start();
if (session_status() == PHP_SESSION_ACTIVE)
echo '<a href="http://localhost:8888/ISSC%20-%202020/ISCC-2020-J09/EX-01/mini-site-routing.php?page=admin">Admin</a>';
?>
</nav>
    </header>
    <h1>
        <?php

       
        if($_GET['page']==1){
            echo "Accueil !";
            include ('Accueil.php');
            
        }
        elseif($_GET['page']==2){
            echo "Page 2 !";
            include ('Page1.php');   }

        elseif($_GET['page']=='connexion'){
            echo "Connexion !";
            include ('Connexion.php') ;
        }
        elseif($_GET['page']=='admin'){
include('admin.php');
        }
        elseif($_GET['page']==3){
            echo "Page 3 !";
            include ('Page2.php');
        }
        ?>
    </h1>
    <p>
<?php
if(array_key_exists('id',$_SESSION)==true){
echo 'Login: '.$_SESSION['id'].'.';};

$cleid = array_keys($_SESSION);

if(array_key_exists('id',$_SESSION)==false){
    if (empty($_COOKIE["$cleid[0]"])==false){
$_COOKIE[$cleid[0]]=$_SESSION['login'];
$_COOKIE[$_SESSION['id']]=$_SESSION['id'];
    }
    else{
header('Location:http://localhost:8888/ISSC%20-%202020/ISCC-2020-J09/EX-01/mini-site-routing.php?page=connexion');
    }
}
?>


</p>
</body>
</html>