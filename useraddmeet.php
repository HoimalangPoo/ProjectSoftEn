<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>ระบบจองห้องประชุม</title>


</head>

<body>
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
                    session_start();
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

                    <a href="logout.php" class="btn btn-primary" role="button">ออกจากระบบ</a>
                </div>

            </div>
        </div>
    </nav>

    <div id="title">
        <img src="https://wallpaperaccess.com/full/4012588.jpg" class="center-block img-fluid" id="title_img" alt="Responsive image">
        <div id="title_title">จองการประชุม</div>
    </div>
    <div class="container">
        <div style="height:50px;"></div>
        <div class="well">
            <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
            <div style="height:50px;"></div>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>รหัสการจอง</th>
                    <th>วาระประชุม</th>
                    <th>ประธานการประชุม</th>
                    <th>จำนวนผู้เข้าประชุม</th>
                    <th>ผู้เข้าร่วมประชุม</th>
                    <th>ห้องประชุม</th>
                    <th>วันเวลาเริ่มประชุม</th>
                    <th>วันเวลาสิ้นสุดการประชุม</th>
                    <th>อุปกรณ์เพิ่มเติม</th>
                    <th>หมายเหตุ</th>
                    <th>ไฟล์วาระประชุม</th>
                    <th>จัดการ</th>
                </thead>
                <tbody>
                    <?php
                    include('conn.php');

                    $query = mysqli_query($conn, "select * from events");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['head']; ?></td>
                            <td><?php echo $row['numattend']; ?></td>
                            <td><?php echo $row['listname']; ?></td>

                            <td><?php echo $row['roomid']; ?></td>

                            <td><?php echo $row['start']; ?></td>
                            <td><?php echo $row['end']; ?></td>
                            <td><?php echo $row['addequipment']; ?></td>
                            <td><?php echo $row['remark']; ?></td>
                            <td><a href="<?php echo $row['meetfile']; ?>">ดูไฟล์</a></td>
                            <td><a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                <a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                <?php include('meetaction.php'); ?>
                            </td>
                        </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
        <?php include('addmeet_view.php'); ?>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>