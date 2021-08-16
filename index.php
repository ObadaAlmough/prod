<?php
session_start();


$prodacts = [
    0 => ['image' => 'https://imgur.com/edOjtEC.png', 'price' => '22,495', 'fuel' => '8.5/7.1'],
    1 => ['image' => 'https://imgur.com/gUQNKPd.png', 'price' => '29,195', 'fuel' => '8.4/2.1'],
    2 => ['image' => 'https://imgur.com/edOjtEC.png', 'price' => '22,495', 'fuel' => '8.5/7.1'],
    3 => ['image' => 'https://imgur.com/gUQNKPd.png', 'price' => '29,195', 'fuel' => '8.4/2.1'],
    4 => ['image' => 'https://imgur.com/gUQNKPd.png', 'price' => '29,195', 'fuel' => '8.4/2.1'],
    5 => ['image' => 'https://imgur.com/edOjtEC.png', 'price' => '22,495', 'fuel' => '8.5/7.1'],
    6 => ['image' => 'https://imgur.com/SKZolYE.png', 'price' => '21,935', 'fuel' => '8.2/6.1'],
    7 => ['image' => 'https://imgur.com/edOjtEC.png', 'price' => '22,495', 'fuel' => '8.5/7.1'],


];

if (isset($_SESSION['prodacts'] )) {
    $length = count($_SESSION['prodacts']);

} else {
    $length = 0 ; 


};

?>

<html>




<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div class=" pt-3">
                    <a name="" id="" class="btn btn-dark mx-5" href="proda.php" role="button">shopping basket - <?php echo $length?></a>
                    <a name="" id="" class="btn btn-dark mx-5" href="remove.php" role="button">Remove  basket</a>
          </div>
    <form action="prodacts.php" method="$_GET" enctype="multipart/form-data">
        <div class="container d-flex justify-content-center">
            <div class="row mt-3">

                <?php




                foreach ($prodacts as $ind =>  $val) {
                    $photo = $val['image'];
                    $price =  $val['price'];
                    $fuel =  $val['fuel'];

                    echo "<div class='col-sm-3'>
            <div class='card my-2'> 
            <img src='$photo' class='card-img-top' width='100%'>
                <div class='card-body pt-0 px-0'>
                    <div class='d-flex flex-row justify-content-between mb-0 px-3'> <small class='text-muted mt-1'>STARTING AT</small>
                        <h6>&dollar;$price&ast;</h6>
                    </div>
                    <hr class='mt-2 mx-3'>
                    <div class='d-flex flex-row justify-content-between px-3 pb-4'>
                        <div class='d-flex flex-column'><span class='text-muted'>Fuel Efficiency</span><small class='text-muted'>L/100KM&ast;</small></div>
                        <div class='d-flex flex-column'>
                            <h5 class='mb-0'>$fuel</h5><small class='text-muted text-right'>(city/Hwy)</small>
                        </div>
                    </div>
                
                    <div class='mx-3 mt-3 mb-2'><button type='submit' name='submite' value='$ind' class='btn btn-danger btn-block'><small>BUILD & PRICE</small></button></div> 
                </div>
            </div>
        </div>";
                };

                ?>
            </div>

        </div>
    </form>

      














    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>