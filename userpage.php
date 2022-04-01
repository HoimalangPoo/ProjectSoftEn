<!doctype html>
<html lang="en">
<?php
session_start();
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/body.css">
    <title>ระบบจองห้องประชุม</title>


</head>

<body style="overflow-y:hidden">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- Just an image -->

            <a class="navbar-brand" href="userpage.php">
                <img src="img/logo.png" width="30" height="30" alt="">
            </a>

            <a class="navbar-brand" href="userpage.php">ระบบจองห้องประชุม</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">


                    <li class="nav-item ">
                        <a class="nav-link" href="usersearch.php">
                            ค้นหาห้องประชุม
                        </a>

                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="useraddmeet.php">
                            จองห้องประชุม
                        </a>

                    </li>

                </ul>

                <div class="ml-md-2 my-lg-0">

                    <?php
                    //check session 
                    if (isset($_SESSION['user'])) {
                        echo "<p style='color:white'>ยินดีต้อนรับ ";
                        echo $_SESSION['user'];
                        echo "</p>";
                    } else {
                        echo "<script>alert('คุณยังไม่ได้เข้าสู่ระบบ กลับไปยังหน้าเข้าสู่ระบบก่อน')</script>";
                        echo "<script>window.open('login.php','_self')</script>";
                    }
                    ?>

                    <a href="logout.php" class="btn btn-info" role="button">ออกจากระบบ</a>
                </div>

            </div>
        </div>
    </nav>
    <div id="title">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/1.jpg" class="center-block img-fluid" id="title_img" alt="Responsive image" style="height:100vh">
                    <div id="back_1"></div>
                </div>
                <div class="carousel-item">
                    <img src="img/2.jpg" class="center-block img-fluid" id="title_img" alt="Responsive image" style="height:100vh">
                    <div id="back_1"></div>
                </div>
                <div class="carousel-item">
                    <img src="img/3.jpg" class="center-block img-fluid" id="title_img" alt="Responsive image" style="height:100vh">
                    <div id="back_1"></div>
                </div>
            </div>
        </div>
        <div id="title_title">ระบบจองห้องประชุม</div>
    </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>