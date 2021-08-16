<?php


if(isset($_GET)){

session_start();



$prodacts = json_decode($_SESSION['arrProdact'],true);


if($_SESSION['prodacts'] != null){
$newArray =$_SESSION['prodacts'];

}
else{
    $newArray = [];
}

array_push($newArray,$prodacts[$_GET['submite']]);

$_SESSION['prodacts']=$newArray;

header('location: index.php');
};
?>






