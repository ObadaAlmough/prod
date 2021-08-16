<?php
session_start();
if ($_SESSION['prodacts'] != null ) {
    # code...
$newArray = $_SESSION['prodacts'];

} else{
    $newArray = [];
    header('location: index.php');

};

?>


<html>




<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid d-flex justify-content-center">
    <div class=" pt-3">
                    <a name="" id="" class="btn btn-dark mx-5" href="index.php" role="button">Home</a>
          </div>
        <div class="row mt-5">

            <?php




            foreach ($newArray as $ind =>  $val) {
                $photo = $val['image'];
                $price =  $val['price'];
                $fuel =  $val['fuel'];

                echo "<div class='col-sm-3'>
            <div class='card my-1'> 
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
                
                  
                </div>
            </div>
        </div>";
            };

            ?>
        </div>

    </div>
















    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>