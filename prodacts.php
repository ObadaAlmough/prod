<?php


if(isset($_GET)){

session_start();


$prodacts = [
    0 => ['image'=>'https://imgur.com/edOjtEC.png' , 'price' => '22,495' , 'fuel' => '8.5/7.1'],
    1 => ['image'=> 'https://imgur.com/gUQNKPd.png', 'price' => '29,195' , 'fuel' => '8.4/2.1'],
    2 => ['image'=>'https://imgur.com/edOjtEC.png' , 'price' => '22,495' , 'fuel' => '8.5/7.1'],
    3 =>['image'=> 'https://imgur.com/gUQNKPd.png', 'price' => '29,195' , 'fuel' => '8.4/2.1'],
    4 => ['image'=> 'https://imgur.com/SKZolYE.png', 'price' =>'21,935' , 'fuel' => '8.2/6.1'],
    5 => ['image'=> 'https://imgur.com/SKZolYE.png', 'price' =>'21,935' , 'fuel' => '8.2/6.1'],


] ;


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






