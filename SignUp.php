<?php

session_start();

if(isset($_POST['submitlog'])){

$login=$_POST['login'];
$Password=$_POST['password'];
$_SESSION['login']=$login;
$_SESSION['password']=$Password;
$db=new PDO('mysql:host=localhost;dbname=admin','root','');


$sql="SELECT * FROM user WHERE login='".$login."'";
$result=$db->prepare($sql);
$result->execute();

if($result->rowCount()>0){
    $data=$result->fetchAll();
    if($Password==$data[0]['password']){



    header('location:index2.php');
         /* echo "connecté";*/
        

    }
    
/*header("location:index_erreur.php");*/
  }
else{
     header('location:indexerror.php');
}
/*else{
$Password=password_hash($Password, PASSWORD_DEFAULT);
$sql="INSERT INTO user  VALUES ('$login','$Password') ";
$req=$db->prepare($sql);
$req->execute();
header('location:main.php');
}*/

}


?>