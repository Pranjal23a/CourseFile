<?php
session_start();
include "_dbconnect_admin.php";

if (isset($_SESSION['teacher_ID']) && isset($_SESSION['teacher_name']) && isset($_SESSION['image_link'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css">
        <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
        <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script> -->
        <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
        <title>Course File Generator</title>
        <link rel="icon" type="image/x-icon" href="Favicon.png">
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Ubuntu&display=swap" rel="stylesheet">







        <style type="text/css">
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
            }

            .vertical-nav {
                min-width: 17rem;
                width: 17rem;
                height: 100vh;
                position: fixed;
                top: 0;
                left: 0;
                box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
                transition: all 0.4s;
            }

            .page-content {
                width: calc(100% - 17rem);
                margin-left: 17rem;
                transition: all 0.4s;
            }

            /* for toggle behavior */

            #sidebar.active {
                margin-left: -17rem;
            }

            #content.active {
                width: 100%;
                margin: 0;
            }

            @media (max-width: 768px) {
                #sidebar {
                    margin-left: -17rem;
                }

                #sidebar.active {
                    margin-left: 0;
                }

                #content {
                    width: 100%;
                    margin: 0;
                }

                #content.active {
                    margin-left: 17rem;
                    width: calc(100% - 17rem);
                }
            }

            body {
                background: #599fd9;
                background: -webkit-linear-gradient(to right, #599fd9, #c2e59c);
                background: linear-gradient(to right, #599fd9, #c2e59c);
                min-height: 100vh;
                overflow-x: hidden;
            }

            .separator {
                margin: 3rem 0;
                border-bottom: 1px dashed #fff;
            }

            .text-uppercase {
                letter-spacing: 0.1em;
            }

            .text-gray {
                color: #aaa;
            }

            .btn-primary {
                padding: 6px 12px;
                font-size: 14px;
                font-weight: 400;
                cursor: pointer;
                border: 1px solid transparent;
                border-radius: 4px;
                background-color: #337ab7;
                color: #fff;
            }

            .form-control {
                width: 100%;
                height: 34px;
                padding: 6px 12px;
                font-size: 14px;
                color: #555;
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            .container {
                margin-left: 2%;
                width: 400px;
                margin-top: 5%;
            }

            label {
                font-size: 18px;
            }

            .success {
                margin: 5px auto;
                border-radius: 5px;
                border: 3px solid #fff;
                background: #33CC00;
                color: #fff;

                padding: 10px;
                box-shadow: 10px 5px 5px grey;
            }
        </style>






    </head>

    <body>




        <!-- <script>
            $(function() {
                // Sidebar toggle behavior
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar, #content').toggleClass('active');
                });
            });
        </script> -->


        <!-- Show Files Modal -->
        <div class="modal fade" id="demo1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="padding: 5px; border: 7px double #182747; border-radius: 10px;background-color: aliceblue; background-size: cover; ">


                    <div class="modal-body">
                        <button type="button" style="margin-left: 95%;" class="btn-close" data-bs-dismiss="modal"></button>
                        <p style=" color: black;">Note: <br> <span style="color: green;"> Green- PDF Created</span> &nbsp&nbsp ||&nbsp&nbsp <span style="color: red;"> Red- PDF Not Created</span></p>



                        <!-- 1 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Closing Report' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                1
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                1
                            </button>
                        <?php } ?>



                        <!-- 2 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Attainment' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                2
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                2
                            </button>
                        <?php } ?>



                        <!-- 3 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Survey' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                3
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                3
                            </button>
                        <?php } ?>



                        <!-- 4 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='End Term Attainment' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                4
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                4
                            </button>
                        <?php } ?>



                        <!-- 5 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='TA Attainment' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                5
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                5
                            </button>
                        <?php } ?>



                        <!-- 6 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='LN3' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px;">
                                6
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px;">
                                6
                            </button>
                        <?php } ?>



                        <!-- 7 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='T2 Attainment' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                7
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                7
                            </button>
                        <?php } ?>



                        <!-- 8 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Assignment' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                8
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                8
                            </button>
                        <?php } ?>



                        <!-- 9 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='LN2' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                9
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                9
                            </button>
                        <?php } ?>



                        <!-- 10 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='T1 Attainment' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                10
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                10
                            </button>
                        <?php } ?>


                        <!-- 11 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='T1' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                11
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                11
                            </button>
                        <?php } ?>


                        <!-- 12 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='LN1' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                12
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                12
                            </button>
                        <?php } ?>



                        <!-- 13 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Assessment' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                13
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                13
                            </button>
                        <?php } ?>



                        <!-- 14 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Lecture Plan' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                14
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                14
                            </button>
                        <?php } ?>



                        <!-- 15 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Opening Report' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                15
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                15
                            </button>
                        <?php } ?>



                        <!-- 16 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Closing Report Previous' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                16
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                16
                            </button>
                        <?php } ?>



                        <!-- 17 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Course Description' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                17
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                17
                            </button>
                        <?php } ?>



                        <!-- 18 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='PEO' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                18
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                18
                            </button>
                        <?php } ?>



                        <!-- 19 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Vision' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                19
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                19
                            </button>
                        <?php } ?>



                        <!-- 20 -->
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql = "SELECT checked FROM checks WHERE name='Mission' AND ids='$id'";
                        $result = mysqli_query($conn, $sql);
                        while ($info = $result->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 1) {
                        ?>
                            <button style="background-color: green; padding: 0px 20px; margin: 5px;">
                                20
                            </button>
                        <?php } else {
                        ?>
                            <button style="background-color: red; padding: 0px 20px; margin: 5px;">
                                20
                            </button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>


        <!-- Download & Merge -->



        <section class="top">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="teacher_dashboard.php" style="color: white; ">
                            <p style="font-size: 80%; margin-left: 250px;">🆂🅷🅸🅿🆁🅰🆂🅷</p>
                        </a>
                    </div>
                    <h2 class="" style="color: white;">JIIT - Course File Generator</h2>
                    <button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#demo1" style="margin-right: -8%;">
                        File Status
                    </button>


                    <form action="admin_pdf.php" target="_blank" method="POST">
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $name = $_SESSION['teacher_name'];
                        ?>
                        <input type="hidden" name="ids" value="<?php echo $id; ?>">
                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                        <input type="submit" name="submit_merges" value="Merge & Download" class="btn btn-secondary btn-sm" style="margin-right: 10%;">
                    </form>
                    <!-- <button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#demo2" style="margin-right: -10%;">
                        Merge & Download
                    </button> -->
                    <a href="logout.php" class="btn btn-secondary btn-sm" role="button">Log Out</a>
                </div>
            </nav>
        </section>
        <section>
            <!-- Vertical navbar -->
            <div class="vertical-nav bg-white" id="sidebar">
                <div class="py-4 px-3 mb-4 bg-light">
                    <div class="media d-flex align-items-center"><img src="<?php echo $_SESSION['image_link']; ?>" alt="Profile" width="120" class="mr-3 rounded-circle img-thumbnail shadow-sm">
                        <div class="media-body">
                            <h4 class="m-0"><?php echo $_SESSION['teacher_name']; ?></h4>
                            <p class="font-weight-light text-muted mb-0">Coordinator</p>
                        </div>
                    </div>
                </div>

                <div style="max-height: 480px; overflow-y: scroll;">
                    <!-- 1 -->
                    <div class="accordion" id="accordionExample" style="overflow: visible;">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    <strong>1.&nbsp&nbsp</strong> Closing Report
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t1" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Report
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">

                                    <strong>2.&nbsp&nbsp</strong> Attainment
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t2" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Attainment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">

                                    <strong>3.&nbsp</strong> Course Exit Survey
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t3" id="" class="nav-link text-dark m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Survey
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                    <strong>4.&nbsp&nbsp</strong> End Term Attainment
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t4" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> End Term Attainment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    <strong>5.&nbsp&nbsp</strong> TA Attainment
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t5" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> TA Attainment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                    <strong>6.&nbsp&nbsp</strong> LN3 & T3 Solution
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t6" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Lecture Notes-3 & T3 Solution
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 7 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                    <strong>7.&nbsp&nbsp</strong> T2 Attainment
                                </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t7" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> T2 Attainment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 8 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                    <strong>8.&nbsp&nbsp</strong> Assignments
                                </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t8" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Assignments
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 9 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                    <strong>9.&nbsp&nbsp</strong> LN2 & T2 Solution
                                </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t9" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Lecture Notes-2 & T2 Solution
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 10 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                    <strong>10.&nbsp&nbsp</strong> T1 Attainment
                                </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t10" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> T1 Attainment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 11 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                    <strong>11.&nbsp&nbsp</strong> T1 Solution
                                </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t11" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> T1 Solution
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- 12 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading12">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                    <strong>12.&nbsp&nbsp</strong> LN1
                                </button>
                            </h2>
                            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t12" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Lecture Notes-1
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- 13 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading13">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="true" aria-controls="collapse13">
                                    <strong>13.&nbsp&nbsp</strong> Assessment Tools
                                </button>
                            </h2>
                            <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t13" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Assessment Tools
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 14 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading14">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="true" aria-controls="collapse14">
                                    <strong>14.&nbsp&nbsp</strong> Lecture Plan
                                </button>
                            </h2>
                            <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t14" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Lecture Plan
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- 15 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading15">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="true" aria-controls="collapse15">
                                    <strong>15.&nbsp&nbsp</strong> Opening Report
                                </button>
                            </h2>
                            <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t15" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Opening Report
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- 16 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading16">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="true" aria-controls="collapse16">
                                    <strong>16.&nbsp&nbsp</strong> Closing Report(Prev.)
                                </button>
                            </h2>
                            <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t16" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Closing Report(Prev.)
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- 17 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading17">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="true" aria-controls="collapse17">
                                    <strong>17.&nbsp&nbsp</strong> Course Description
                                </button>
                            </h2>
                            <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t17" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Course Description
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- 18 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading18">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="true" aria-controls="collapse18">
                                    <strong>18.&nbsp&nbsp</strong> PEO-PO-PSO
                                </button>
                            </h2>
                            <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t18" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> PEO-PO-PSO
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <!-- 19 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading19">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="true" aria-controls="collapse19">
                                    <strong>19.&nbsp&nbsp</strong> Vision_CSE
                                </button>
                            </h2>
                            <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t19" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Vision_CSE
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 20 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading20">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="true" aria-controls="collapse20">
                                    <strong>20.&nbsp&nbsp</strong> Mission_Vision_JIIT
                                </button>
                            </h2>
                            <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column bg-white mb-0">
                                        <li class="nav-item">
                                            <a href="#t20" id="" class="nav-link text-dark  m-1" data-bs-toggle="tab" style="border:1px solid black;">
                                                <!-- <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> -->
                                                <img src="listimage2.png" alt="image" style="margin-right: 4px;"> Mission_Vision_JIIT
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>






                    </div>
                </div>
            </div>

            <!-- Toggle button -->
            <!-- <div class="page-content p-2" id="content">
                <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold  m-2" style="font-size: 30px;">≡</small></button>
            </div> -->


            <div class="page-content tab-content p-2" id="content">

                <!-- 1 -->
                <div id="t1" class="container-sm tab-pane fade">
                    <h3 style="text-align: center; color: red;">Closing Report Updated!! Proceed Further</h3>
                    <hr>
                    <h6> <strong>!. Program Name: M.Tech (AIML)</strong></h6>
                    <h6> <strong>2. Semester: I</strong></h6>
                    <h6> <strong>3. Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                    <h6><strong>4. Course Coordinator: Dr. Ankit Vidyarthi</strong></h6>
                    <br>
                    <h5><strong>5. <u>Course Outcomes:</u></strong></h5>
                    <p>At the Completion of the course, student will be able to,</p>
                    <?php
                    $nam = $_SESSION['teacher_name'];
                    $id == $_SESSION['teacher_ID'];
                    $sql = "SELECT * FROM descriptionfull";
                    $result1 = mysqli_query($conn, $sql);
                    while ($info = $result1->fetch_assoc()) {
                        $d1 = $info['d1'];
                        $d2 = $info['d2'];
                        $d3 = $info['d3'];
                        $d4 = $info['d4'];
                        $d5 = $info['d5'];
                        $l1 = $info['l1'];
                        $l2 = $info['l2'];
                        $l3 = $info['l3'];
                        $l4 = $info['l4'];
                        $l5 = $info['l5'];
                        $file = $info['file'];
                    }

                    ?>
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th style="width: 10%;">
                                    S.No
                                </th>
                                <th style="width: 50%;">
                                    Description
                                </th>
                                <th style="width: 40%;">
                                    Cognitive Level (Blooms Taxonomy)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $name = $_SESSION['teacher_name'];
                            $sql1 = "SELECT * FROM description WHERE teacher_name='$name'";
                            $result1 = mysqli_query($conn, $sql1);
                            while ($info = $result1->fetch_assoc()) {
                                $cos = $info['co'];
                                $codes = $info['code'];
                            }
                            $x = 1;
                            $y = 11;
                            while ($x <= $cos) {
                                echo "<tr>";
                                echo "<td> $codes.$x </td>";
                                if ($x == 1) {
                            ?><td> <?php echo $d1; ?></td>
                                    <td> <?php echo $l1; ?></td> <?php
                                                                } elseif ($x == 2) {
                                                                    ?><td> <?php echo $d2; ?></td>
                                    <td> <?php echo $l2; ?></td><?php

                                                                } elseif ($x == 3) {
                                                                ?><td> <?php echo $d3; ?></td>
                                    <td> <?php echo $l3; ?></td><?php

                                                                } elseif ($x == 4) {
                                                                ?><td> <?php echo $d4; ?></td>
                                    <td> <?php echo $l4; ?></td><?php
                                                                } elseif ($x == 5) {
                                                                ?><td> <?php echo $d5; ?></td>
                                    <td> <?php echo $l5; ?></td><?php
                                                                }
                                                                ?>
                            <?php
                                $x++;
                                $y++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <h5><strong>6. <u>CO-PO and CO-PSO Mapping</u></strong></h5>
                    <table style="width: 50%;">
                        <tbody>
                            <tr>
                                <th style="width: 6%;">COs</th>
                                <th style="width: 6%;">PO1</th>
                                <th style="width: 6%;">PO2</th>
                                <th style="width: 6%;">PO3</th>
                                <th style="width: 6%;">PSO1</th>
                                <th style="width: 6%;">PSO2</th>
                            </tr>
                            <?php
                            $sql = "SELECT * FROM copo";
                            $result = mysqli_query($conn, $sql);

                            while ($info = $result->fetch_assoc()) {
                                $cos = $info['cos'];
                                $p1 = $info['po1'];
                                $p2 = $info['po2'];
                                $p3 = $info['po3'];
                                $p4 = $info['pso1'];
                                $p5 = $info['pso2'];
                            ?>
                                <tr>
                                    <td style="width: 6%;"><?php if ($cos == 'C161') {
                                                                echo 'Avg.';
                                                            } else {
                                                                echo $cos;
                                                            } ?></td>
                                    <td style="width: 6%;"><?php echo $p1; ?></td>
                                    <td style="width: 6%;"><?php echo $p2; ?></td>
                                    <td style="width: 6%;"><?php echo $p3; ?></td>
                                    <td style="width: 6%;"><?php echo $p4; ?></td>
                                    <td style="width: 6%;"><?php echo $p5;  ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <h5><strong>7. <u>CO Attainments in 2022-23:</u></strong></h5>
                    <table style="width: 50%;">
                        <tbody>
                            <tr>
                                <th style="width: 6%;">C161.1</th>
                                <th style="width: 6%;">C161.2</th>
                                <th style="width: 6%;">C161.3</th>
                                <th style="width: 6%;">C161.4</th>
                                <th style="width: 6%;">C161.5</th>
                            </tr>
                            <?php
                            $id = $_SESSION['teacher_ID'];
                            $sql = "SELECT * FROM average_co WHERE id='all'";
                            $result = mysqli_query($conn, $sql);
                            $x = 1;
                            while ($info = $result->fetch_assoc()) {
                                if ($x == 1) {
                                    $p1 = $info['final'];
                                } elseif ($x == 2) {
                                    $p2 = $info['final'];
                                } elseif ($x == 3) {
                                    $p3 = $info['final'];
                                } elseif ($x == 4) {
                                    $p4 = $info['final'];
                                } elseif ($x == 5) {
                                    $p5 = $info['final'];
                                }
                                $x++;
                            }

                            ?>
                            <tr>
                                <td style="width: 6%;"><?php echo $p1; ?></td>
                                <td style="width: 6%;"><?php echo $p2; ?></td>
                                <td style="width: 6%;"><?php echo $p3; ?></td>
                                <td style="width: 6%;"><?php echo $p4; ?></td>
                                <td style="width: 6%;"><?php echo $p5;  ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <h5><strong>8. <u>PO-PSO Attainments in 2022-23:</u></strong></h5>
                    <table style="width: 50%;">
                        <tbody>
                            <tr>
                                <th style="width: 6%;"></th>
                                <th style="width: 6%;">PO 1</th>
                                <th style="width: 6%;">PO 2</th>
                                <th style="width: 6%;">PO 3</th>
                                <th style="width: 6%;">PSO 1</th>
                                <th style="width: 6%;">PSO 2</th>
                            </tr>
                            <?php
                            $id = $_SESSION['teacher_ID'];
                            $sql = "SELECT * FROM popso WHERE id='all'";
                            $result = mysqli_query($conn, $sql);

                            while ($info = $result->fetch_assoc()) {
                                $p1 = $info['po1'];
                                $p2 = $info['po2'];
                                $p3 = $info['po3'];
                                $p4 = $info['pso1'];
                                $p5 = $info['pso2'];
                            ?>
                                <tr>
                                    <td style="width: 6%;"><?php echo 'Attainment'; ?></td>
                                    <td style="width: 6%;"><?php echo $p1; ?></td>
                                    <td style="width: 6%;"><?php echo $p2; ?></td>
                                    <td style="width: 6%;"><?php echo $p3; ?></td>
                                    <td style="width: 6%;"><?php echo $p4; ?></td>
                                    <td style="width: 6%;"><?php echo $p5;  ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <br>
                    <h5><strong>9. <u>Summary of Result Analysis:</u></strong></h5>
                    <table style="width: 90%;">
                        <tbody>
                            <tr>
                                <th style="width: 6%;"></th>
                                <th style="width: 6%;">Grade A+</th>
                                <th style="width: 6%;">Grade A</th>
                                <th style="width: 6%;">Grade B+</th>
                                <th style="width: 6%;">Grade B</th>
                                <th style="width: 6%;">Grade C+</th>
                                <th style="width: 6%;">Grade C</th>
                                <th style="width: 6%;">Grade D</th>
                                <th style="width: 6%;">Grade F</th>
                                <th style="width: 6%;">Grade I</th>
                            </tr>
                            <tr>
                                <td style="width: 6%;"><?php echo '%age of Students'; ?></td>
                                <td style="width: 6%;"><?php echo '0'; ?></td>
                                <td style="width: 6%;"><?php echo '7.14'; ?></td>
                                <td style="width: 6%;"><?php echo '14.28'; ?></td>
                                <td style="width: 6%;"><?php echo '57.14'; ?></td>
                                <td style="width: 6%;"><?php echo '14.28'; ?></td>
                                <td style="width: 6%;"><?php echo '0'; ?></td>
                                <td style="width: 6%;"><?php echo '7.14'; ?></td>
                                <td style="width: 6%;"><?php echo '0'; ?></td>
                                <td style="width: 6%;"><?php echo '0'; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <h5><strong>10. Innovative Teaching and Learning Method used (if any):</strong></h5>
                    <p>Project with pre known titles</p>
                    <p>Implementation of the code from scratch</p>
                    <br>
                    <h5><strong>11. Innovative Evaluation Stategy used (if any):</strong></h5>
                    <p>Surprise Tests and Onboard problem solving</p>
                    <br>
                    <h5><strong><u>12. Action Taken for Improvement in CO Attainments:</u></strong></h5>
                    <table>
                        <tbody style="font-size: 13px;">
                            <tr>
                                <th style="width: 10%">COs</th>
                                <th style="width: 15%">Attainments in 2021-22</th>
                                <th style="width: 29%">Action(s) taken in 2022-23 to improve CO attainment</th>
                                <th style="width: 22%">Proof Document(s) attached in Course File</th>
                                <th style="width: 5%">PO 1</th>
                                <th style="width: 5%">PO 2</th>
                                <th style="width: 5%">PO 3</th>
                                <th style="width: 5%">PSO 1</th>
                                <th style="width: 5%">PSO 2</th>
                            </tr>
                            <tr>
                                <th>C161.1</th>
                                <th>NA</th>
                                <th>NO action required</th>
                                <th>NA</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>C161.2</th>
                                <th>NA</th>
                                <th>NO action required</th>
                                <th>NA</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>C161.3</th>
                                <th>NA</th>
                                <th>NO action required</th>
                                <th>NA</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>C161.4</th>
                                <th>NA</th>
                                <th>NO action required</th>
                                <th>NA</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr>
                                <th>C161.5</th>
                                <th>NA</th>
                                <th>NO action required</th>
                                <th>NA</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <h5><strong><u>13. Action Taken for Improvement in PO-PSO Attainments:</u>&nbsp;&nbsp;N/A</strong></h5>
                    <table>
                        <tbody>
                            <tr>
                                <th style="width: 10%">PO-PSOs</th>
                                <th style="width: 15%">Attainments in 2021-22</th>
                                <th style="width: 29%">Action(s) taken in 2022-23 to improve CO attainment</th>
                                <th style="width: 22%">Proof Document(s) attached in Course File</th>
                            </tr>
                            <tr style="height: 15px">
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr style="height: 15px">
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr style="height: 15px">
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr style="height: 15px">
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                            <tr style="height: 15px">
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <h5><strong>14. Suggestions for Improvement:&nbsp;&nbsp;N/A</strong></h5>
                    <table>
                        <tbody>
                            <tr>
                                <th style="width: 10%">SN</th>
                                <th style="width: 15%">Suggestion</th>
                                <th style="width: 29%">Relevance to CO</th>
                                <th style="width: 22%">Relevance to PO/PSO</th>
                            </tr>
                            <tr style="height: 15px">
                                <td>1.</td>
                                <td>Students need the few classes on
                                    basic introduction of AI life cycle
                                </td>
                                <td>CO1</td>
                                <td>PO1,PO3</td>
                            </tr>
                            <tr style="height: 15px">
                                <td>2.</td>
                                <td>Some more realistic examples need to
                                    be discussed
                                </td>
                                <td>CO3</td>
                                <td>PO2,PO3</td>
                            </tr>
                            <tr style="height: 15px">
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <h5><strong>15. Action taken for weak students:</strong></h5>
                    <table style="width: 70%">
                        <tbody>
                            <tr>
                                <th style="width: 40%">Action taken for weak students</th>
                                <th style="width: 30%">Proof Document(s) attached in Course File</th>
                            </tr>
                            <tr style="height: 15px">
                                <td>Extra Assignment was given and extra lecture
                                    devoted to discuss the problems</td>
                                <td>Yes</td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <h5><strong>16. Action taken for bright sudents:</strong></h5>
                    <table style="width: 70%">
                        <tbody>
                            <tr>
                                <th style="width: 40%">Action taken for bright students</th>
                                <th style="width: 30%">Proof Document(s) attached in Course File</th>
                            </tr>
                            <tr style="height: 15px">
                                <td>PBL with pre known problem statement</td>
                                <td>Project Dumps available</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <br><br>

                    <h6><strong> Signature:</strong></h6>
                    <h6><strong>Module Coordinator:</strong></h6>
                    <br>
                    <h6><strong> Signature:</strong></h6>
                    <h6><strong>Course Coordinator:</strong></h6>
                    <hr>
                </div>


                <!-- 2 -->
                <div id="t2" class="container-sm tab-pane fade">
                    <h3 style="text-align: center; color: red;">Final Attainment Updated</h3>
                    <hr>
                    <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                    <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                    <h6><strong>NBA Code: C161</strong></h6>
                    <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                    <h6><strong>Course Coordinator: Dr. Ankit Vidyarthi</strong></h6>
                    <hr>
                    <h6 style="text-align: center;">Average CO-Attainment</h6>
                    <table style="width: 100%;">
                        <tbody>
                            <tr>
                                <th style="width: 6%;">COs</th>
                                <th style="width: 6%;">T1</th>
                                <th style="width: 6%;">T2</th>
                                <th style="width: 6%;">END</th>
                                <th style="width: 6%;">A1</th>
                                <th style="width: 6%;">A2</th>
                                <th style="width: 6%;">A3</th>
                                <th style="width: 6%;">A4</th>
                                <th style="width: 6%;">A5</th>
                                <th style="width: 6%;">Project</th>
                                <th style="width: 6%;">Direct Attainment</th>
                                <th style="width: 6%;">Student Feedback</th>
                                <th style="width: 6%;">Final(80% Direct + 20% Indirect)</th>
                                <th style="width: 6%;" rowspan="6"></th>
                                <th style="width: 6%;">CIE</th>
                                <th style="width: 6%;">SEE</th>
                            </tr>
                            <?php
                            $id = $_SESSION['teacher_ID'];
                            $sql1 = "SELECT * FROM average_co WHERE id='all'";
                            $result = mysqli_query($conn, $sql1);
                            $row_count = mysqli_num_rows($result);
                            $x = 1;
                            while ($info = $result->fetch_assoc()) {
                                $count = 0;
                                $value = 0;
                                $value1 = 0;
                                $count1 = 0;
                                $cos = $info['cos'];
                                $t1 = $info['t1'];
                                if ($t1 <> NULL) {
                                    $count1++;
                                    $value1 += $t1;
                                }
                                $t2 = $info['t2'];
                                if ($t2 <> NULL) {
                                    $count1++;
                                    $value1 += $t2;
                                }
                                $end = $info['end'];
                                if ($end <> NULL) {
                                    $count++;
                                    $value += $end;
                                }
                                $a1 = $info['a1'];
                                if ($a1 <> NULL) {
                                    $count++;
                                    $value += $a1;
                                    $count1++;
                                    $value1 += $a1;
                                }
                                $a2 = $info['a2'];
                                if ($a2 <> NULL) {
                                    $count++;
                                    $value += $a2;
                                    $count1++;
                                    $value1 += $a2;
                                }
                                $a3 = $info['a3'];
                                if ($a3 <> NULL) {
                                    $count++;
                                    $value += $a3;
                                    $count1++;
                                    $value1 += $a3;
                                }
                                $a4 = $info['a4'];
                                if ($a4 <> NULL) {
                                    $count++;
                                    $value += $a4;
                                    $count1++;
                                    $value1 += $a4;
                                }
                                $a5 = $info['a5'];
                                if ($a5 <> NULL) {
                                    $count++;
                                    $value += $a5;
                                    $count1++;
                                    $value1 += $a5;
                                }
                                $project = $info['project'];
                                $da = $value / $count;
                                $cie = $value1 / $count1;
                                $see = $end;
                                $co = "";

                                if ($x = 1) {
                                    $co = "C161.1";
                                } elseif ($x = 2) {
                                    $co = "C161.2";
                                } elseif ($x = 3) {
                                    $co = "C161.3";
                                } elseif ($x = 4) {
                                    $co = "C161.4";
                                } elseif ($x = 5) {
                                    $co = "C161.5";
                                }
                                $ia = 3;
                                $final = (0.8 * $da) + (0.2 * $ia);
                                $sql1 = "UPDATE average_co SET da='$da', final='$final', cie='$cie', see='$see' WHERE id='all' and cos='$co'";
                                $result11 = mysqli_query($conn, $sql1);

                            ?>
                                <tr>
                                    <td style="width: 6%;"><?php echo $cos; ?></td>
                                    <td style="width: 6%;"><?php echo $t1; ?></td>
                                    <td style="width: 6%;"><?php echo $t2; ?></td>
                                    <td style="width: 6%;"><?php echo $end; ?></td>
                                    <td style="width: 6%;"><?php echo $a1; ?></td>
                                    <td style="width: 6%;"><?php echo $a2; ?></td>
                                    <td style="width: 6%;"><?php echo $a3; ?></td>
                                    <td style="width: 6%;"><?php echo $a4; ?></td>
                                    <td style="width: 6%;"><?php echo $a5; ?></td>
                                    <td style="width: 6%;"><?php echo $project; ?></td>
                                    <td style="width: 6%;"><?php echo $da; ?></td>
                                    <td style="width: 6%;"><?php echo $ia; ?></td>
                                    <td style="width: 6%;"><?php echo $final; ?></td>
                                    <td style="width: 6%;"><?php echo $cie; ?></td>
                                    <td style="width: 6%;"><?php echo $see; ?></td>
                                </tr>

                            <?php
                                $x++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <br>
                    <hr>
                    <h6>CO-PO-PSO Mapping</h6>
                    <table style="width: 60%;">
                        <tbody>
                            <tr>
                                <th style="width: 14%;" colspan="2">CO Attainments</th>
                                <th style="width: 7%;">PO1</th>
                                <th style="width: 7%;">PO2</th>
                                <th style="width: 7%;">PO3</th>
                                <th style="width: 7%;">PSO1</th>
                                <th style="width: 7%;">PSO2</th>
                            </tr>
                            <?php
                            $id = $_SESSION['teacher_ID'];
                            $sql1 = "SELECT * FROM average_co WHERE id='all'";
                            $result1 = mysqli_query($conn, $sql1);
                            $row_count1 = mysqli_num_rows($result1);
                            $sql2 = "SELECT * FROM copo";
                            $result2 = mysqli_query($conn, $sql2);
                            $row_count2 = mysqli_num_rows($result2);
                            $x = 1;
                            $a1 = 0;
                            $a2 = 0;
                            $a3 = 0;
                            $a4 = 0;
                            $a5 = 0;
                            $y1 = 0;
                            $y2 = 0;
                            $y3 = 0;
                            $y4 = 0;
                            $y5 = 0;
                            while ($info1 = $result1->fetch_assoc() and $info2 = $result2->fetch_assoc()) {
                                $final = $info1['final'];
                                $cos = $info1['cos'];
                                $po1 = $info2['po1'];
                                $a1 += $po1;
                                $y1 += $final * $po1;
                                $po2 = $info2['po2'];
                                $a2 += $po2;
                                $y2 += $final * $po2;
                                $po3 = $info2['po3'];
                                $a3 += $po3;
                                $y3 += $final * $po3;
                                $pso1 = $info2['pso1'];
                                $a4 += $pso1;
                                $y4 += $final * $pso1;
                                $pso2 = $info2['pso2'];
                                $a5 += $pso2;
                                $y5 += $final * $pso2;

                            ?>
                                <tr>
                                    <td style="width: 7%;"><?php echo $cos; ?></td>
                                    <td style="width: 7%;"><?php echo $final; ?></td>
                                    <td style="width: 7%;"><?php echo $po1; ?></td>
                                    <td style="width: 7%;"><?php echo $po2; ?></td>
                                    <td style="width: 7%;"><?php echo $po3; ?></td>
                                    <td style="width: 7%;"><?php echo $pso1; ?></td>
                                    <td style="width: 7%;"><?php echo $pso2; ?></td>
                                </tr>

                            <?php
                                $x++;
                            }
                            $y1 = round(($y1 / $a1), 1);
                            $y2 = round(($y2 / $a2), 1);
                            $y3 = round(($y3 / $a3), 1);
                            $y4 = round(($y4 / $a4), 1);
                            $y5 = round(($y5 / $a5), 1);
                            $id = $_SESSION['teacher_ID'];
                            $sql1 = "UPDATE popso SET po1='$y1', po2='$y2', po3='$y3', pso1='$y4', pso2='$y5' Where id='all'";
                            $result = mysqli_query($conn, $sql1);
                            ?>
                            <tr>
                                <th style="text-align: center;" colspan="2"><strong>C161</strong></th>
                                <?php
                                $a1 = round($a1 / 5);
                                $a2 = round($a2 / 5);
                                $a3 = round($a3 / 5);
                                $a4 = round($a4 / 5);
                                $a5 = round($a5 / 5);
                                ?>
                                <th style="width: 7%;"><?php echo $a1; ?></th>
                                <th style="width: 7%;"><?php echo $a2; ?></th>
                                <th style="width: 7%;"><?php echo $a3; ?></th>
                                <th style="width: 7%;"><?php echo $a4; ?></th>
                                <th style="width: 7%;"><?php echo $a5; ?></th>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <hr>
                    <h6>PO-PSO Attainment</h6>
                    <table style="width: 60%;">
                        <tbody>
                            <tr>
                                <th style="width: 7%;">Course</th>
                                <th style="width: 7%;">PO1</th>
                                <th style="width: 7%;">PO2</th>
                                <th style="width: 7%;">PO3</th>
                                <th style="width: 7%;">PSO1</th>
                                <th style="width: 7%;">PSO2</th>
                            </tr>
                            <?php
                            $id = $_SESSION['teacher_ID'];
                            $sql2 = "SELECT * FROM popso WHERE id='all'";
                            $result2 = mysqli_query($conn, $sql2);
                            $row_count2 = mysqli_num_rows($result2);
                            $x = 1;
                            while ($info2 = $result2->fetch_assoc()) {
                                $c = $info2['course'];
                                $p1 = $info2['po1'];
                                $p2 = $info2['po2'];
                                $p3 = $info2['po3'];
                                $p4 = $info2['pso1'];
                                $p5 = $info2['pso2'];
                            ?>
                                <tr>
                                    <td style="width: 7%;"><?php echo $c; ?></td>
                                    <td style="width: 7%;"><?php echo $p1; ?></td>
                                    <td style="width: 7%;"><?php echo $p2; ?></td>
                                    <td style="width: 7%;"><?php echo $p3; ?></td>
                                    <td style="width: 7%;"><?php echo $p4; ?></td>
                                    <td style="width: 7%;"><?php echo $p5; ?></td>
                                </tr>

                            <?php
                                $x++;
                            }
                            ?>
                        </tbody>
                    </table>
                    <hr>
                    <hr>


                </div>

                <!-- 3 -->
                <div id="t3" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">Course Exit Survey</h2>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql1 = "SELECT checked FROM checks WHERE name='Survey' AND ids='$id'";
                    $result1 = mysqli_query($conn, $sql1);
                    while ($info = $result1->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <h6> <strong>Course Exit Survey</strong></h6>
                        <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                        <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                        <h6><strong>NBA Code: C161</strong></h6>
                        <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                        <h6><strong>Course Coordinator: Ankit Vidyarthi</strong></h6>
                        <hr>
                        <?php
                        if (isset($_POST['submit_form3'])) {
                            $id = $_SESSION['teacher_ID'];
                            $sql1 = "SELECT * FROM student WHERE teacher_ID='$id'";
                            $result1 = mysqli_query($conn, $sql1);
                            $row_count = mysqli_num_rows($result1);
                            $x = 1;
                            $y = 11;
                            $z = 111;
                            $a = 1111;
                            $b = 11111;
                            while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                $ids = $info['enroll'];
                                $x1 = $_POST[$x];
                                $y1 = $_POST[$y];
                                $z1 = $_POST[$z];
                                $a1 = $_POST[$a];
                                $b1 = $_POST[$b];
                                $sql = "UPDATE survey SET c1='$x1', c2='$y1', c3='$z1', c4='$a1', c5='$b1' WHERE enroll='$ids'";
                                $result = mysqli_query($conn, $sql);
                                $x++;
                                $y++;
                                $z++;
                                $a++;
                                $b++;
                                $row_count--;
                            }
                            $id = $_SESSION['teacher_ID'];
                            $nam = "Survey";
                            $bol = 1;
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully Course Exit Survey Details Updated!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <table style="width: 90%;">
                            <tbody>
                                <tr>
                                    <th style="width: 5%;">Sno</th>
                                    <th style="width: 10%;">Enroll</th>
                                    <th style="width: 10%;">Name</th>
                                    <th style="width: 13%;">CO1</th>
                                    <th style="width: 13%;">CO2</th>
                                    <th style="width: 13%;">CO3</th>
                                    <th style="width: 13%;">CO4</th>
                                    <th style="width: 13%;">CO5</th>
                                </tr>
                                <tr>
                                    <form method="POST">
                                        <?php
                                        $id = $_SESSION['teacher_ID'];
                                        $sql1 = "SELECT * FROM student WHERE teacher_ID='$id'";
                                        $result1 = mysqli_query($conn, $sql1);
                                        $row_count = mysqli_num_rows($result1);
                                        $x = 1;
                                        $y = 11;
                                        $z = 111;
                                        $a = 1111;
                                        $b = 11111;
                                        while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                            $enrol = $info['enroll'];
                                            $name = $info['name'];
                                        ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $enrol; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><input type="number" step="any" name=<?php echo $x; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $y; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $z; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $a; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $b; ?> class="form-control" required></td>
                                </tr>
                            <?php
                                            $x++;
                                            $y++;
                                            $z++;
                                            $a++;
                                            $b++;
                                            $row_count--;
                                        }
                            ?>
                            </tr>
                        </table>
                        <br>
                        <input type="submit" name="submit_form3" value="Submit" class="btn-primary">
                        </form>
                        <hr>
                    <?php } else {
                    ?>
                        <hr>
                        <h3 style="text-align: center; color: red;">Course Exit Survey Updated!! Proceed Further</h3>
                        <hr>
                        <h6> <strong>Course Exit Survey</strong></h6>
                        <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                        <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                        <h6><strong>NBA Code: C161</strong></h6>
                        <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                        <h6><strong>Course Coordinator: Ankit Vidyarthi</strong></h6>
                        <hr>
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <th style="width: 5%;">Sno</th>
                                    <th style="width: 10%;">Enroll</th>
                                    <th style="width: 10%;">Name</th>
                                    <th style="width: 13%;">CO1</th>
                                    <th style="width: 13%;">CO2</th>
                                    <th style="width: 13%;">CO3</th>
                                    <th style="width: 13%;">CO4</th>
                                    <th style="width: 13%;">CO5</th>
                                </tr>
                                <tr>
                                    <?php
                                    $count1 = 0;
                                    $count2 = 0;
                                    $count3 = 0;
                                    $count4 = 0;
                                    $count5 = 0;
                                    $id = $_SESSION['teacher_ID'];
                                    $sql1 = "SELECT * FROM student";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $sql2 = "SELECT * FROM Survey";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $row_count = mysqli_num_rows($result1);
                                    $row_counts = $row_count;
                                    $x = 1;
                                    while ($row_count > 0 and $info1 = $result1->fetch_assoc() and $info2 = $result2->fetch_assoc()) {
                                        $enrol = $info1['enroll'];
                                        $name = $info1['name'];
                                        $c1 = $info2['c1'];
                                        $c2 = $info2['c2'];
                                        $c3 = $info2['c3'];
                                        $c4 = $info2['c4'];
                                        $c5 = $info2['c5'];
                                        if ($c1 >= 3) {
                                            $count1++;
                                        }
                                        if ($c2 >= 3) {
                                            $count2++;
                                        }
                                        if ($c3 >= 3) {
                                            $count3++;
                                        }
                                        if ($c4 >= 3) {
                                            $count4++;
                                        }
                                        if ($c5 >= 3) {
                                            $count5++;
                                        }
                                    ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $enrol; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $c1; ?></td>
                                    <td><?php echo $c2; ?></td>
                                    <td><?php echo $c3; ?></td>
                                    <td><?php echo $c4; ?></td>
                                    <td><?php echo $c5; ?></td>
                                </tr>
                            <?php
                                        $x++;
                                        $row_count--;
                                    }
                            ?>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right;">No. of Students Scored > = Target %</td>
                                <td><?php echo $count1; ?></td>
                                <td><?php echo $count2; ?></td>
                                <td><?php echo $count3; ?></td>
                                <td><?php echo $count4; ?></td>
                                <td><?php echo $count5; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right;">% of Students Scored > = Target %</td>
                                <td><?php $perc1 = ($count1 / $row_counts) * 100;
                                    echo $perc1; ?></td>
                                <td><?php $perc2 = ($count2 / $row_counts) * 100;
                                    echo $perc2; ?></td>
                                </td>
                                <td><?php $perc3 = ($count3 / $row_counts) * 100;
                                    echo $perc3; ?></td>
                                </td>
                                <td><?php $perc4 = ($count4 / $row_counts) * 100;
                                    echo $perc4; ?></td>
                                </td>
                                <td><?php $perc5 = ($count5 / $row_counts) * 100;
                                    echo $perc5; ?></td>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right;">CO Attainment Level</td>
                                <td><?php if ($perc1 >= 80) {
                                        echo '3';
                                    } elseif ($perc1 >= 60 and $perc1 < 80) {
                                        echo '2';
                                    } elseif ($perc1 >= 40 and $perc1 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc2 >= 80) {
                                        echo '3';
                                    } elseif ($perc2 >= 60 and $perc2 < 80) {
                                        echo '2';
                                    } elseif ($perc2 >= 40 and $perc2 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc3 >= 80) {
                                        echo '3';
                                    } elseif ($perc3 >= 60 and $perc3 < 80) {
                                        echo '2';
                                    } elseif ($perc3 >= 40 and $perc3 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc4 >= 80) {
                                        echo '3';
                                    } elseif ($perc4 >= 60 and $perc4 < 80) {
                                        echo '2';
                                    } elseif ($perc4 >= 40 and $perc4 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc5 >= 80) {
                                        echo '3';
                                    } elseif ($perc5 >= 60 and $perc5 < 80) {
                                        echo '2';
                                    } elseif ($perc5 >= 40 and $perc5 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right;">Total Students</td>
                                <td><?php echo $row_counts; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: right;">No. of Students filled the survey</td>
                                <td><?php echo $row_counts; ?></td>
                            </tr>
                        </table>
                        <hr>
                    <?php } ?>
                </div>


                <!-- 4 -->
                <div id="t4" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">End Term Attainment</h2>
                    <hr>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql1 = "SELECT checked FROM checks WHERE name='End Term Attainment' AND ids='$id'";
                    $result1 = mysqli_query($conn, $sql1);
                    while ($info = $result1->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <h6> <strong>End Examination</strong></h6>
                        <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                        <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                        <h6><strong>NBA Code: C161</strong></h6>
                        <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                        <h6><strong>Course Coordinator: Dr. Ankit Vidyarthi</strong></h6>
                        <hr>
                        <?php
                        if (isset($_POST['submit_form4'])) {
                            $id = $_SESSION['teacher_ID'];
                            $sql1 = "SELECT * FROM student";
                            $result1 = mysqli_query($conn, $sql1);
                            $row_count = mysqli_num_rows($result1);
                            $x = 1;
                            $y = 11;
                            $z = 111;
                            $a = 1111;
                            $b = 11111;

                            while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                $ids = $info['enroll'];
                                $x1 = $_POST[$x];
                                $y1 = $_POST[$y];
                                $z1 = $_POST[$z];
                                $a1 = $_POST[$a];
                                $b1 = $_POST[$b];
                                $total = $x1 + $y1 + $z1 + $a1 + $b1;
                                $q1 = round(($b1 / 7) * 100);
                                $q2 = round(($a1 / 7) * 100);
                                $q3 = round(($z1 / 7) * 100);
                                $q4 = round(($x1 / 7) * 100);
                                $q5 = round(($y1 / 7) * 100);
                                $sql = "UPDATE t3_attainment SET c1='$x1', c2='$y1', c3='$z1', c4='$a1', c5='$b1',total='$total', t1='$q1', t2='$q2', t3='$q3', t4='$q4', t5='$q5' WHERE enroll='$ids'";
                                $result = mysqli_query($conn, $sql);
                                $x++;
                                $y++;
                                $z++;
                                $a++;
                                $b++;
                                $row_count--;
                            }
                            $id = $_SESSION['teacher_ID'];
                            $nam = "End Term Attainment";
                            $bol = 1;
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully End Term Attainment Updated!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <table style="width: 90%;">
                            <tbody>
                                <tr>
                                    <th style="width: 5%;">Slno.</th>
                                    <th style="width: 10%;">Enrollment No.</th>
                                    <th style="width: 10%;">Student Name</th>
                                    <th style="width: 10%;">CO4 (7)</th>
                                    <th style="width: 10%;">CO5 (7)</th>
                                    <th style="width: 10%;">CO3 (7)</th>
                                    <th style="width: 10%;">CO2 (7)</th>
                                    <th style="width: 10%;">CO1 (7)</th>
                                    <!-- <th style="width: 10%;">Total (20)</th>
                    <th style="width: 10%;">CO1</th>
                    <th style="width: 10%;">CO2</th> -->
                                </tr>
                                <tr>
                                    <form method="POST">
                                        <?php
                                        $id = $_SESSION['teacher_ID'];
                                        $sql1 = "SELECT * FROM student WHERE teacher_ID='$id'";
                                        $result1 = mysqli_query($conn, $sql1);
                                        $row_count = mysqli_num_rows($result1);
                                        $x = 1;
                                        $y = 11;
                                        $z = 111;
                                        $a = 1111;
                                        $b = 11111;
                                        while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                            $enrol = $info['enroll'];
                                            $name = $info['name'];
                                        ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $enrol; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><input type="number" step="any" name=<?php echo $x; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $y; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $z; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $a; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $b; ?> class="form-control" required></td>
                                </tr>
                            <?php
                                            $x++;
                                            $y++;
                                            $z++;
                                            $a++;
                                            $b++;
                                            $row_count--;
                                        }
                            ?>
                            </tr>
                        </table>
                        <br>
                        <input type="submit" name="submit_form4" value="Submit" class="btn-primary">
                        </form>
                        <hr>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">End Term Attainment Updated!! Proceed Further</h3>
                        <hr>
                        <h6> <strong>End Term Examination</strong></h6>
                        <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                        <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                        <h6><strong>NBA Code: C161</strong></h6>
                        <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                        <h6><strong>Course Coordinator: Dr. Ankit Vidyarthi</strong></h6>
                        <hr>
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <th style="width: 5%;">Slno.</th>
                                    <th style="width: 10%;">Enrollment No.</th>
                                    <th style="width: 10%;">Student Name</th>
                                    <th style="width: 10%;">CO4 (7)</th>
                                    <th style="width: 10%;">CO5 (7)</th>
                                    <th style="width: 10%;">CO3 (7)</th>
                                    <th style="width: 10%;">CO2 (7)</th>
                                    <th style="width: 10%;">CO1 (7)</th>
                                    <th style="width: 5%;">Total(35)</th>
                                    <th style="width: 5%;">CO1</th>
                                    <th style="width: 5%;">CO2</th>
                                    <th style="width: 5%;">CO3</th>
                                    <th style="width: 5%;">CO4</th>
                                    <th style="width: 5%;">CO5</th>
                                </tr>
                                <tr>
                                    <?php
                                    $count1 = 0;
                                    $count2 = 0;
                                    $count3 = 0;
                                    $count4 = 0;
                                    $count5 = 0;
                                    $row_counts = 0;
                                    $id = $_SESSION['teacher_ID'];
                                    $sql1 = "SELECT * FROM student";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $sql2 = "SELECT * FROM t3_attainment";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $row_count = mysqli_num_rows($result1);
                                    $row_counts = $row_count;
                                    $x = 1;
                                    while ($row_count > 0 and $info1 = $result1->fetch_assoc() and $info2 = $result2->fetch_assoc()) {
                                        $enrol = $info1['enroll'];
                                        $name = $info1['name'];
                                        $c1 = $info2['c1'];
                                        $c2 = $info2['c2'];
                                        $c3 = $info2['c3'];
                                        $c4 = $info2['c4'];
                                        $c5 = $info2['c5'];
                                        $total = $info2['total'];
                                        $t1 = $info2['t1'];
                                        $t2 = $info2['t2'];
                                        $t3 = $info2['t3'];
                                        $t4 = $info2['t4'];
                                        $t5 = $info2['t5'];
                                        if ($t1 >= 50) {
                                            $count1++;
                                        }
                                        if ($t2 >= 50) {
                                            $count2++;
                                        }
                                        if ($t3 >= 50) {
                                            $count3++;
                                        }
                                        if ($t4 >= 50) {
                                            $count4++;
                                        }
                                        if ($t5 >= 50) {
                                            $count5++;
                                        }
                                    ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $enrol; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $c1; ?></td>
                                    <td><?php echo $c2; ?></td>
                                    <td><?php echo $c3; ?></td>
                                    <td><?php echo $c4; ?></td>
                                    <td><?php echo $c5; ?></td>
                                    <td><?php echo $total; ?></td>
                                    <td><?php echo $t1; ?></td>
                                    <td><?php echo $t2; ?></td>
                                    <td><?php echo $t3; ?></td>
                                    <td><?php echo $t4; ?></td>
                                    <td><?php echo $t5; ?></td>
                                </tr>
                            <?php
                                        $x++;
                                        $row_count--;
                                    }
                            ?>
                            </tr>

                            <tr>
                                <td colspan="9" style="text-align: right;">No. of Students Scored >= 50%</td>
                                <td><?php echo $count1; ?></td>
                                <td><?php echo $count2; ?></td>
                                <td><?php echo $count3; ?></td>
                                <td><?php echo $count4; ?></td>
                                <td><?php echo $count5; ?></td>
                            </tr>
                            <tr>
                                <td colspan="9" style="text-align: right;">% of Students Scored >= 50%</td>
                                <td><?php $perc1 = ($count1 / $row_counts) * 100;
                                    echo round(($perc1), 2); ?></td>
                                <td><?php $perc2 = ($count2 / $row_counts) * 100;
                                    echo round(($perc2), 2); ?></td>
                                </td>
                                <td><?php $perc3 = ($count3 / $row_counts) * 100;
                                    echo round(($perc3), 2); ?></td>
                                </td>
                                <td><?php $perc4 = ($count4 / $row_counts) * 100;
                                    echo round(($perc4), 2); ?></td>
                                </td>
                                <td><?php $perc5 = ($count5 / $row_counts) * 100;
                                    echo round(($perc5), 2); ?></td>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="9" style="text-align: right;">CO Attainment Level</td>
                                <td><?php if ($perc1 >= 80) {
                                        echo '3';
                                    } elseif ($perc1 >= 60 and $perc1 < 80) {
                                        echo '2';
                                    } elseif ($perc1 >= 40 and $perc1 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc2 >= 80) {
                                        echo '3';
                                    } elseif ($perc2 >= 60 and $perc2 < 80) {
                                        echo '2';
                                    } elseif ($perc2 >= 40 and $perc2 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc3 >= 80) {
                                        echo '3';
                                    } elseif ($perc3 >= 60 and $perc3 < 80) {
                                        echo '2';
                                    } elseif ($perc3 >= 40 and $perc3 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc4 >= 80) {
                                        echo '3';
                                    } elseif ($perc4 >= 60 and $perc4 < 80) {
                                        echo '2';
                                    } elseif ($perc4 >= 40 and $perc4 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc5 >= 80) {
                                        echo '3';
                                    } elseif ($perc5 >= 60 and $perc5 < 80) {
                                        echo '2';
                                    } elseif ($perc5 >= 40 and $perc5 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <td colspan="9" style="text-align: right;">Total Students</td>
                                <td><?php echo $row_counts; ?></td>
                            </tr>
                            <tr>
                                <td colspan="9" style="text-align: right;">No. of Students Appeared in End Term</td>
                                <td><?php echo $row_counts; ?></td>
                            </tr>
                        </table>
                        <hr>
                    <?php } ?>
                </div>


                <!-- 5 -->
                <div id="t5" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">TA Attainment Sheet</h2>

                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql1 = "SELECT checked FROM checks WHERE name='TA Attainment' AND ids='$id'";
                    $result1 = mysqli_query($conn, $sql1);
                    while ($info = $result1->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <h6> <strong>TA Examination</strong></h6>
                        <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                        <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                        <h6><strong>NBA Code: C161</strong></h6>
                        <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                        <h6><strong>Course Coordinator: Ankit Vidyarthi</strong></h6>
                        <hr>
                        <?php
                        if (isset($_POST['submit_form5'])) {
                            $id = $_SESSION['teacher_ID'];
                            $sql1 = "SELECT * FROM student WHERE teacher_ID='$id'";
                            $result1 = mysqli_query($conn, $sql1);
                            $row_count = mysqli_num_rows($result1);
                            $x = 1;
                            $y = 11;
                            $z = 111;
                            $a = 1111;
                            $b = 11111;
                            $c = 111111;
                            while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                $ids = $info['enroll'];
                                $x1 = $_POST[$x];
                                $y1 = $_POST[$y];
                                $z1 = $_POST[$z];
                                $a1 = $_POST[$a];
                                $b1 = $_POST[$b];
                                $c1 = $_POST[$c];
                                $total = $x1 + $y1 + $z1 + $a1 + $b1 + $c1;
                                $q1 = round(($x1 / 3) * 100);
                                $q2 = round(($y1 / 3) * 100);
                                $q3 = round(($z1 / 3) * 100);
                                $q4 = round(($a1 / 3) * 100);
                                $q5 = round((($b1 + $c1) / 8) * 100);
                                $sql = "UPDATE student SET A1='$x1', A2='$y1', A3='$z1', A4='$a1', A5='$b1', PBL='$c1',total='$total', C1='$q1', C2='$q2', C3='$q3', C4='$q4', C5='$q5' WHERE enroll='$ids'";
                                $result = mysqli_query($conn, $sql);
                                $x++;
                                $y++;
                                $z++;
                                $a++;
                                $b++;
                                $c++;
                                $row_count--;
                            }
                            $id = $_SESSION['teacher_ID'];
                            $nam = "TA Attainment";
                            $bol = 1;
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully TA Attainment Updated Added!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <table style="width: 90%;">
                            <tbody>
                                <tr>
                                    <th style="width: 5%;"></th>
                                    <th style="width: 10%;"></th>
                                    <th style="width: 10%;"></th>
                                    <th style="width: 13%;">CO1</th>
                                    <th style="width: 13%;">CO2</th>
                                    <th style="width: 13%;">CO3</th>
                                    <th style="width: 13%;">CO4</th>
                                    <th style="width: 13%;">CO5</th>
                                    <th style="width: 12%;">CO5</th>
                                </tr>
                                <tr>
                                    <th style="width: 5%;">Slno.</th>
                                    <th style="width: 10%;">Enrollment No.</th>
                                    <th style="width: 10%;">Student Name</th>
                                    <th style="width: 10%;">Assignment-1 (3)</th>
                                    <th style="width: 10%;">Assignment-2 (3)</th>
                                    <th style="width: 10%;">Assignment-3 (3)</th>
                                    <th style="width: 10%;">Assignment-4 (3)</th>
                                    <th style="width: 10%;">Assignment-5 (3)</th>
                                    <th style="width: 10%;">PBL (5)</th>
                                </tr>
                                <tr>
                                    <form method="POST">
                                        <?php
                                        $id = $_SESSION['teacher_ID'];
                                        $sql1 = "SELECT * FROM student WHERE teacher_ID='$id'";
                                        $result1 = mysqli_query($conn, $sql1);
                                        $row_count = mysqli_num_rows($result1);
                                        $x = 1;
                                        $y = 11;
                                        $z = 111;
                                        $a = 1111;
                                        $b = 11111;
                                        $c = 111111;
                                        while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                            $enrol = $info['enroll'];
                                            $name = $info['name'];
                                        ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $enrol; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><input type="number" step="any" name=<?php echo $x; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $y; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $z; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $a; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $b; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $c; ?> class="form-control" required></td>
                                </tr>
                            <?php
                                            $x++;
                                            $y++;
                                            $z++;
                                            $a++;
                                            $b++;
                                            $c++;
                                            $row_count--;
                                        }
                            ?>
                            </tr>
                        </table>
                        <br>
                        <input type="submit" name="submit_form5" value="Submit" class="btn-primary">
                        </form>
                        <hr>
                    <?php } else {
                    ?>
                        <hr>
                        <h3 style="text-align: center; color: red;">TA Attainment Updated!! Proceed Further</h3>
                        <hr>
                        <h6> <strong>TA Examination</strong></h6>
                        <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                        <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                        <h6><strong>NBA Code: C161</strong></h6>
                        <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                        <h6><strong>Course Coordinator: Ankit Vidyarthi</strong></h6>
                        <hr>
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <th style="width: 5%;"></th>
                                    <th style="width: 10%;"></th>
                                    <th style="width: 10%;"></th>
                                    <th style="width: 8%;">CO1</th>
                                    <th style="width: 8%;">CO2</th>
                                    <th style="width: 8%;">CO3</th>
                                    <th style="width: 8%;">CO4</th>
                                    <th style="width: 8%;">CO5</th>
                                    <th style="width: 8%;">CO5</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th style="width: 5%;">Slno.</th>
                                    <th style="width: 10%;">Enrollment No.</th>
                                    <th style="width: 10%;">Student Name</th>
                                    <th style="width: 8%;">A-1 (3)</th>
                                    <th style="width: 8%;">A-2 (3)</th>
                                    <th style="width: 8%;">A-3 (3)</th>
                                    <th style="width: 8%;">A-4 (3)</th>
                                    <th style="width: 8%;">A-5 (3)</th>
                                    <th style="width: 5%;">PBL (5)</th>
                                    <th style="width: 5%;">Total(20)</th>
                                    <th style="width: 5%;">CO1</th>
                                    <th style="width: 5%;">CO2</th>
                                    <th style="width: 5%;">CO3</th>
                                    <th style="width: 5%;">CO4</th>
                                    <th style="width: 5%;">CO5</th>
                                </tr>
                                <tr>
                                    <?php
                                    $count1 = 0;
                                    $count2 = 0;
                                    $count3 = 0;
                                    $count4 = 0;
                                    $count5 = 0;
                                    $row_counts = 0;
                                    $id = $_SESSION['teacher_ID'];
                                    $sql1 = "SELECT * FROM student";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $row_count = mysqli_num_rows($result1);
                                    $row_counts = $row_count;
                                    $x = 1;
                                    $y = 11;
                                    $z = 111;
                                    $a = 1111;
                                    $b = 11111;
                                    $c = 111111;
                                    while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                        $enrol = $info['enroll'];
                                        $name = $info['name'];
                                        $as1 = $info['A1'];
                                        $as2 = $info['A2'];
                                        $as3 = $info['A3'];
                                        $as4 = $info['A4'];
                                        $as5 = $info['A5'];
                                        $as6 = $info['PBL'];
                                        $as7 = $info['total'];
                                        $as8 = $info['C1'];
                                        $as9 = $info['C2'];
                                        $as10 = $info['C3'];
                                        $as11 = $info['C4'];
                                        $as12 = $info['C5'];
                                        if ($as8 >= 50) {
                                            $count1++;
                                        }
                                        if ($as9 >= 50) {
                                            $count2++;
                                        }
                                        if ($as10 >= 50) {
                                            $count3++;
                                        }
                                        if ($as11 >= 50) {
                                            $count4++;
                                        }
                                        if ($as12 >= 50) {
                                            $count5++;
                                        }
                                    ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $enrol; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $as1; ?></td>
                                    <td><?php echo $as2; ?></td>
                                    <td><?php echo $as3; ?></td>
                                    <td><?php echo $as4; ?></td>
                                    <td><?php echo $as5; ?></td>
                                    <td><?php echo $as6; ?></td>
                                    <td><?php echo $as7; ?></td>
                                    <td><?php echo $as8; ?></td>
                                    <td><?php echo $as9; ?></td>
                                    <td><?php echo $as10; ?></td>
                                    <td><?php echo $as11; ?></td>
                                    <td><?php echo $as12; ?></td>
                                </tr>
                            <?php
                                        $x++;
                                        $y++;
                                        $z++;
                                        $a++;
                                        $b++;
                                        $c++;
                                        $row_count--;
                                    }
                            ?>
                            </tr>

                            <tr>
                                <td colspan="10" style="text-align: right;">No. of Students Scored >= 50%</td>
                                <td><?php echo $count1; ?></td>
                                <td><?php echo $count2; ?></td>
                                <td><?php echo $count3; ?></td>
                                <td><?php echo $count4; ?></td>
                                <td><?php echo $count5; ?></td>
                            </tr>
                            <tr>
                                <td colspan="10" style="text-align: right;">% of Students Scored >= 50%</td>
                                <td><?php $perc1 = ($count1 / $row_counts) * 100;
                                    echo round(($perc1), 2); ?></td>
                                <td><?php $perc2 = ($count2 / $row_counts) * 100;
                                    echo round(($perc2), 2); ?></td>
                                </td>
                                <td><?php $perc3 = ($count3 / $row_counts) * 100;
                                    echo round(($perc3), 2); ?></td>
                                </td>
                                <td><?php $perc4 = ($count4 / $row_counts) * 100;
                                    echo round(($perc4), 2); ?></td>
                                </td>
                                <td><?php $perc5 = ($count5 / $row_counts) * 100;
                                    echo round(($perc5), 2); ?></td>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="10" style="text-align: right;">CO Attainment Level</td>
                                <td><?php if ($perc1 >= 80) {
                                        echo '3';
                                    } elseif ($perc1 >= 60 and $perc1 < 80) {
                                        echo '2';
                                    } elseif ($perc1 >= 40 and $perc1 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc2 >= 80) {
                                        echo '3';
                                    } elseif ($perc2 >= 60 and $perc2 < 80) {
                                        echo '2';
                                    } elseif ($perc2 >= 40 and $perc2 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc3 >= 80) {
                                        echo '3';
                                    } elseif ($perc3 >= 60 and $perc3 < 80) {
                                        echo '2';
                                    } elseif ($perc3 >= 40 and $perc3 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc4 >= 80) {
                                        echo '3';
                                    } elseif ($perc4 >= 60 and $perc4 < 80) {
                                        echo '2';
                                    } elseif ($perc4 >= 40 and $perc4 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc5 >= 80) {
                                        echo '3';
                                    } elseif ($perc5 >= 60 and $perc5 < 80) {
                                        echo '2';
                                    } elseif ($perc5 >= 40 and $perc5 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <td colspan="10" style="text-align: right;">Total Students</td>
                                <td><?php echo $row_counts; ?></td>
                            </tr>
                            <tr>
                                <td colspan="10" style="text-align: right;">No. of Students Appeared in TA</td>
                                <td><?php echo $row_counts; ?></td>
                            </tr>
                        </table>
                        <hr>
                    <?php } ?>
                </div>


                <!-- 6 -->
                <div id="t6" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">Lecture Notes-3</h2>
                    <hr>
                    <br>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql = "SELECT checked FROM checks WHERE name='LN3' AND ids='$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($info = $result->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        if (isset($_POST['submit_form6'])) {
                            $fname = $_POST['files'];
                            $sql1 = "UPDATE uploads SET filename='$fname' WHERE module='6'";
                            $result1 = mysqli_query($conn, $sql1);
                            $nam = "LN3";
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully File Uploaded!')</script>");
                            echo ("<script>window.location = admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                            <div class="col-lg-4 col-md-4 btn-magin">
                                <form method="POST" style="border: 2px solid black;  padding: 15px; border-radius: 10px;">
                                    <label style="display: block;">Upload Lecture Notes-3*</label>
                                    <input type="file" name="files" style="display: block; margin-bottom: 15px; cursor: pointer;">
                                    <input type="submit" name="submit_form6" value="Send" class="btn-primary">
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                        </div>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">File Uploaded!! Proceed Further</h3>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql1 = "SELECT filename FROM uploads where module='6'";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($info = $result1->fetch_assoc()) {
                            $PDF = $info['filename'];
                        }
                        ?>
                        <embed src="<?php echo $PDF; ?>" width="100%" height="600px" />
                    <?php } ?>
                </div>


                <!-- 7 -->
                <div id="t7" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">T2 Attainment</h2>
                    <hr>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql1 = "SELECT checked FROM checks WHERE name='T2 Attainment' AND ids='$id'";
                    $result1 = mysqli_query($conn, $sql1);
                    while ($info = $result1->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <h6> <strong>T2 Examination</strong></h6>
                        <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                        <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                        <h6><strong>NBA Code: C161</strong></h6>
                        <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                        <h6><strong>Course Coordinator: Dr. Ankit Vidyarthi</strong></h6>
                        <hr>
                        <?php
                        if (isset($_POST['submit_form7'])) {
                            $id = $_SESSION['teacher_ID'];
                            $sql1 = "SELECT * FROM student WHERE teacher_ID='$id'";
                            $result1 = mysqli_query($conn, $sql1);
                            $row_count = mysqli_num_rows($result1);
                            $x = 1;
                            $y = 11;
                            $z = 111;
                            $a = 1111;
                            while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                $ids = $info['enroll'];
                                $x1 = $_POST[$x];
                                $y1 = $_POST[$y];
                                $z1 = $_POST[$z];
                                $a1 = $_POST[$a];
                                $total = $x1 + $y1 + $z1 + $a1;
                                $q1 = round((($x1 + $y1) / 10) * 100);
                                $q2 = round((($z1 + $a1) / 10) * 100);
                                $sql = "UPDATE t2_attainment SET c1='$x1', c2='$y1', c3='$z1', c4='$a1' ,total='$total', t1='$q1', t2='$q2' WHERE enroll='$ids'";
                                $result = mysqli_query($conn, $sql);
                                $x++;
                                $y++;
                                $z++;
                                $a++;
                                $row_count--;
                            }
                            $id = $_SESSION['teacher_ID'];
                            $nam = "T2 Attainment";
                            $bol = 1;
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully T2 Attainment Updated!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <table style="width: 90%;">
                            <tbody>
                                <tr>
                                    <th style="width: 5%;">Slno.</th>
                                    <th style="width: 10%;">Enrollment No.</th>
                                    <th style="width: 10%;">Student Name</th>
                                    <th style="width: 10%;">CO3 (5)</th>
                                    <th style="width: 10%;">CO3 (5)</th>
                                    <th style="width: 10%;">CO4 (5)</th>
                                    <th style="width: 10%;">CO5 (5)</th>
                                    <!-- <th style="width: 10%;">Total (20)</th>
                    <th style="width: 10%;">CO1</th>
                    <th style="width: 10%;">CO2</th> -->
                                </tr>
                                <tr>
                                    <form method="POST">
                                        <?php
                                        $id = $_SESSION['teacher_ID'];
                                        $sql1 = "SELECT * FROM student WHERE teacher_ID='$id'";
                                        $result1 = mysqli_query($conn, $sql1);
                                        $row_count = mysqli_num_rows($result1);
                                        $x = 1;
                                        $y = 11;
                                        $z = 111;
                                        $a = 1111;
                                        while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                            $enrol = $info['enroll'];
                                            $name = $info['name'];
                                        ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $enrol; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><input type="number" step="any" name=<?php echo $x; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $y; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $z; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $a; ?> class="form-control" required></td>
                                </tr>
                            <?php
                                            $x++;
                                            $y++;
                                            $z++;
                                            $a++;
                                            $row_count--;
                                        }
                            ?>
                            </tr>
                        </table>
                        <br>
                        <input type="submit" name="submit_form7" value="Submit" class="btn-primary">
                        </form>
                        <hr>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">T2 Attainment Updated!! Proceed Further</h3>
                        <hr>
                        <h6> <strong>T2 Examination</strong></h6>
                        <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                        <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                        <h6><strong>NBA Code: C161</strong></h6>
                        <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                        <h6><strong>Course Coordinator: Dr. Ankit Vidyarthi</strong></h6>
                        <hr>
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <th style="width: 5%;">Slno.</th>
                                    <th style="width: 10%;">Enrollment No.</th>
                                    <th style="width: 10%;">Student Name</th>
                                    <th style="width: 8%;">CO3 (5)</th>
                                    <th style="width: 8%;">CO3 (5)</th>
                                    <th style="width: 8%;">CO4 (5)</th>
                                    <th style="width: 8%;">CO4 (5)</th>
                                    <th style="width: 5%;">Total(20)</th>
                                    <th style="width: 5%;">CO3</th>
                                    <th style="width: 5%;">CO4</th>
                                </tr>
                                <tr>
                                    <?php
                                    $id = $_SESSION['teacher_ID'];
                                    $count1 = 0;
                                    $count2 = 0;
                                    $row_counts = 0;
                                    $sql1 = "SELECT * FROM student";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $sql2 = "SELECT * FROM t2_attainment";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $row_count = mysqli_num_rows($result1);
                                    $row_counts = $row_count;
                                    $x = 1;
                                    while ($row_count > 0 and $info1 = $result1->fetch_assoc() and $info2 = $result2->fetch_assoc()) {
                                        $enrol = $info1['enroll'];
                                        $name = $info1['name'];
                                        $c1 = $info2['c1'];
                                        $c2 = $info2['c2'];
                                        $c3 = $info2['c3'];
                                        $c4 = $info2['c4'];
                                        $total = $info2['total'];
                                        $t1 = $info2['t1'];
                                        if ($t1 >= 50) {
                                            $count1++;
                                        }
                                        $t2 = $info2['t2'];
                                        if ($t2 >= 50) {
                                            $count2++;
                                        }
                                    ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $enrol; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $c1; ?></td>
                                    <td><?php echo $c2; ?></td>
                                    <td><?php echo $c3; ?></td>
                                    <td><?php echo $c4; ?></td>
                                    <td><?php echo $total; ?></td>
                                    <td><?php echo $t1; ?></td>
                                    <td><?php echo $t2; ?></td>
                                </tr>
                            <?php
                                        $x++;
                                        $row_count--;
                                    }
                            ?>
                            </tr>

                            <tr>
                                <td colspan="8" style="text-align: right;">No. of Students Scored >= 50%</td>
                                <td><?php echo $count1; ?></td>
                                <td><?php echo $count2; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: right;">% of Students Scored >= 50%</td>
                                <td><?php $perc1 = ($count1 / $row_counts) * 100;
                                    echo round(($perc1), 2); ?></td>
                                <td><?php $perc2 = ($count2 / $row_counts) * 100;
                                    echo round(($perc2), 2); ?></td>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: right;">CO Attainment Level</td>
                                <td><?php if ($perc1 >= 80) {
                                        echo '3';
                                    } elseif ($perc1 >= 60 and $perc1 < 80) {
                                        echo '2';
                                    } elseif ($perc1 >= 40 and $perc1 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc2 >= 80) {
                                        echo '3';
                                    } elseif ($perc2 >= 60 and $perc2 < 80) {
                                        echo '2';
                                    } elseif ($perc2 >= 40 and $perc2 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: right;">Total Students</td>
                                <td><?php echo $row_counts; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: right;">No. of Students Appeared in T2</td>
                                <td><?php echo $row_counts; ?></td>
                            </tr>
                        </table>
                        <hr>
                    <?php } ?>
                </div>


                <!-- 8 -->
                <div id="t8" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">Assignments</h2>
                    <hr>
                    <br>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql = "SELECT checked FROM checks WHERE name='Assignment' AND ids='$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($info = $result->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        if (isset($_POST['submit_form8'])) {
                            $fname = $_POST['files'];
                            $sql1 = "UPDATE uploads SET filename='$fname' WHERE module='8'";
                            $result1 = mysqli_query($conn, $sql1);
                            $nam = "Assignment";
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully File Uploaded!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                            <div class="col-lg-4 col-md-4 btn-magin">
                                <form method="POST" style="border: 2px solid black;  padding: 15px; border-radius: 10px;">
                                    <label style="display: block;">Upload All Assignments*</label>
                                    <input type="file" name="files" style="display: block; margin-bottom: 15px; cursor: pointer;">
                                    <input type="submit" name="submit_form8" value="Send" class="btn-primary">
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                        </div>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">File Uploaded!! Proceed Further</h3>
                        <hr>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql1 = "SELECT filename FROM uploads where module='8'";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($info = $result1->fetch_assoc()) {
                            $PDF = $info['filename'];
                        }
                        ?>
                        <embed src="<?php echo $PDF; ?>" width="100%" height="600px" />
                    <?php } ?>

                </div>


                <!-- 9 -->
                <div id="t9" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">Lecture Notes-2</h2>
                    <hr>
                    <br>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql = "SELECT checked FROM checks WHERE name='LN2' AND ids='$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($info = $result->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        if (isset($_POST['submit_form9'])) {
                            $fname = $_POST['files'];
                            $sql1 = "UPDATE uploads SET filename='$fname' WHERE module='9'";
                            $result1 = mysqli_query($conn, $sql1);
                            $nam = "LN2";
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully File Uploaded!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                            <div class="col-lg-4 col-md-4 btn-magin">
                                <form method="POST" style="border: 2px solid black;  padding: 15px; border-radius: 10px;">
                                    <label style="display: block;">Upload Lecture Notes-2*</label>
                                    <input type="file" name="files" style="display: block; margin-bottom: 15px; cursor: pointer;">
                                    <input type="submit" name="submit_form9" value="Send" class="btn-primary">
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                        </div>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">File Uploaded!! Proceed Further</h3>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql1 = "SELECT filename FROM uploads where module='9'";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($info = $result1->fetch_assoc()) {
                            $PDF = $info['filename'];
                        }
                        ?>
                        <embed src="<?php echo $PDF; ?>" width="100%" height="600px" />
                    <?php } ?>
                </div>


                <!-- 10 -->
                <div id="t10" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">T1 Attainment</h2>
                    <hr>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql1 = "SELECT checked FROM checks WHERE name='T1 Attainment' AND ids='$id'";
                    $result1 = mysqli_query($conn, $sql1);
                    while ($info = $result1->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <h6> <strong>T1 Examination</strong></h6>
                        <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                        <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                        <h6><strong>NBA Code: C161</strong></h6>
                        <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                        <h6><strong>Course Coordinator: Dr. Ankit Vidyarthi</strong></h6>
                        <hr>
                        <?php
                        if (isset($_POST['submit_form10'])) {
                            $id = $_SESSION['teacher_ID'];
                            $sql1 = "SELECT * FROM student WHERE teacher_ID='$id'";
                            $result1 = mysqli_query($conn, $sql1);
                            $row_count = mysqli_num_rows($result1);
                            $x = 1;
                            $y = 11;
                            $z = 111;
                            $a = 1111;
                            while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                $ids = $info['enroll'];
                                $x1 = $_POST[$x];
                                $y1 = $_POST[$y];
                                $z1 = $_POST[$z];
                                $a1 = $_POST[$a];
                                $total = $x1 + $y1 + $z1 + $a1;
                                $q1 = round((($x1 + $y1) / 10) * 100);
                                $q2 = round((($z1 + $a1) / 10) * 100);
                                $sql = "UPDATE t1_attainment SET c1='$x1', c2='$y1', c3='$z1', c4='$a1' ,total='$total', t1='$q1', t2='$q2' WHERE enroll='$ids'";
                                $result = mysqli_query($conn, $sql);
                                $x++;
                                $y++;
                                $z++;
                                $a++;
                                $row_count--;
                            }
                            $id = $_SESSION['teacher_ID'];
                            $nam = "T1 Attainment";
                            $bol = 1;
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully T1 Attainment Updated!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <table style="width: 90%;">
                            <tbody>
                                <tr>
                                    <th style="width: 5%;">Slno.</th>
                                    <th style="width: 10%;">Enrollment No.</th>
                                    <th style="width: 10%;">Student Name</th>
                                    <th style="width: 10%;">CO1 (5)</th>
                                    <th style="width: 10%;">CO1 (5)</th>
                                    <th style="width: 10%;">CO2 (5)</th>
                                    <th style="width: 10%;">CO2 (5)</th>
                                    <!-- <th style="width: 10%;">Total (20)</th>
                    <th style="width: 10%;">CO1</th>
                    <th style="width: 10%;">CO2</th> -->
                                </tr>
                                <tr>
                                    <form method="POST">
                                        <?php
                                        $id = $_SESSION['teacher_ID'];
                                        $sql1 = "SELECT * FROM student WHERE teacher_ID='$id'";
                                        $result1 = mysqli_query($conn, $sql1);

                                        $sql = "SELECT * FROM student WHERE teacher_ID='$id'";
                                        $result = mysqli_query($conn, $sql);
                                        $row_count = mysqli_num_rows($result);
                                        $x = 1;
                                        $y = 11;
                                        $z = 111;
                                        $a = 1111;
                                        while ($row_count > 0 and $info = $result1->fetch_assoc()) {
                                            $enrol = $info['enroll'];
                                            $name = $info['name'];
                                        ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $enrol; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><input type="number" step="any" name=<?php echo $x; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $y; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $z; ?> class="form-control" required></td>
                                    <td><input type="number" step="any" name=<?php echo $a; ?> class="form-control" required></td>
                                </tr>
                            <?php
                                            $x++;
                                            $y++;
                                            $z++;
                                            $a++;
                                            $row_count--;
                                        }
                            ?>
                            </tr>
                        </table>
                        <br>
                        <input type="submit" name="submit_form10" value="Submit" class="btn-primary">
                        </form>
                        <hr>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">T1 Attainment Updated!! Proceed Further</h3>
                        <hr>
                        <h6> <strong>T1 Examination</strong></h6>
                        <h6> <strong>Academic Year : 2022-23 (ODD Semester)</strong></h6>
                        <h6> <strong>Semester/Branch: M.Tech-I (CSE&AIML)</strong></h6>
                        <h6><strong>NBA Code: C161</strong></h6>
                        <h6> <strong>Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
                        <h6><strong>Course Coordinator: Dr. Ankit Vidyarthi</strong></h6>
                        <hr>
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <th style="width: 5%;">Sno.</th>
                                    <th style="width: 10%;">Enrollment No.</th>
                                    <th style="width: 10%;">Student Name</th>
                                    <th style="width: 8%;">CO1 (5)</th>
                                    <th style="width: 8%;">CO1 (5)</th>
                                    <th style="width: 8%;">CO2 (5)</th>
                                    <th style="width: 8%;">CO2 (5)</th>
                                    <th style="width: 5%;">Total(20)</th>
                                    <th style="width: 5%;">CO1</th>
                                    <th style="width: 5%;">CO2</th>
                                </tr>

                                <tr>
                                    <?php
                                    $count1 = 0;
                                    $count2 = 0;
                                    $row_counts = 0;
                                    $id = $_SESSION['teacher_ID'];
                                    $sql1 = "SELECT * FROM student";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $sql2 = "SELECT * FROM t1_attainment";
                                    $result2 = mysqli_query($conn, $sql2);
                                    $row_count = mysqli_num_rows($result1);
                                    $row_counts = $row_count;
                                    $x = 1;
                                    $y = 11;
                                    while ($row_count > 0 and $info1 = $result1->fetch_assoc() and $info2 = $result2->fetch_assoc()) {
                                        $enrol = $info1['enroll'];
                                        $name = $info1['name'];
                                        $c1 = $info2['c1'];
                                        $c2 = $info2['c2'];
                                        $c3 = $info2['c3'];
                                        $c4 = $info2['c4'];
                                        $total = $info2['total'];
                                        $t1 = $info2['t1'];
                                        if ($t1 >= 50) {
                                            $count1++;
                                        }
                                        $t2 = $info2['t2'];
                                        if ($t2 >= 50) {
                                            $count2++;
                                        }
                                    ?>
                                <tr>
                                    <td><?php echo $x; ?></td>
                                    <td><?php echo $enrol; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $c1; ?></td>
                                    <td><?php echo $c2; ?></td>
                                    <td><?php echo $c3; ?></td>
                                    <td><?php echo $c4; ?></td>
                                    <td><?php echo $total; ?></td>
                                    <td><?php echo $t1; ?></td>
                                    <td><?php echo $t2; ?></td>
                                </tr>
                            <?php
                                        $x++;
                                        $row_count--;
                                    }
                            ?>
                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: right;">No. of Students Scored >= 50%</td>
                                <td><?php echo $count1; ?></td>
                                <td><?php echo $count2; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: right;">% of Students Scored >= 50%</td>
                                <td><?php $perc1 = ($count1 / $row_counts) * 100;
                                    echo round(($perc1), 2); ?></td>
                                <td><?php $perc2 = ($count2 / $row_counts) * 100;
                                    echo round(($perc2), 2); ?></td>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: right;">CO Attainment Level</td>
                                <td><?php if ($perc1 >= 80) {
                                        echo '3';
                                    } elseif ($perc1 >= 60 and $perc1 < 80) {
                                        echo '2';
                                    } elseif ($perc1 >= 40 and $perc1 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                                <td><?php if ($perc2 >= 80) {
                                        echo '3';
                                    } elseif ($perc2 >= 60 and $perc2 < 80) {
                                        echo '2';
                                    } elseif ($perc2 >= 40 and $perc2 < 60) {
                                        echo '1';
                                    } else {
                                        echo '0';
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: right;">Total Students</td>
                                <td><?php echo $row_counts; ?></td>
                            </tr>
                            <tr>
                                <td colspan="8" style="text-align: right;">No. of Students Appeared in T1</td>
                                <td><?php echo $row_counts; ?></td>
                            </tr>
                        </table>
                        <hr>
                    <?php } ?>
                </div>



                <!-- 11 -->
                <div id="t11" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">T1 Solution</h2>
                    <hr>
                    <br>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql = "SELECT checked FROM checks WHERE name='T1' AND ids='$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($info = $result->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        if (isset($_POST['submit_form11'])) {
                            $fname = $_POST['files'];
                            $sql1 = "UPDATE uploads SET filename='$fname' WHERE module='11'";
                            $result1 = mysqli_query($conn, $sql1);
                            $nam = "T1";
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully File Uploaded!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <div class="row">


                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                            <div class="col-lg-4 col-md-4 btn-magin">
                                <form method="POST" style="border: 2px solid black;  padding: 15px; border-radius: 10px;">
                                    <label style="display: block;">Upload T1 Solution*</label>
                                    <input type="file" name="files" style="display: block; margin-bottom: 15px; cursor: pointer;">
                                    <input type="submit" name="submit_form11" value="Upload" class="btn-primary">
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                        </div>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">File Uploaded!! Proceed Further</h3>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql1 = "SELECT filename FROM uploads where module='11'";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($info = $result1->fetch_assoc()) {
                            $PDF = $info['filename'];
                        }
                        ?>
                        <embed src="<?php echo $PDF; ?>" width="100%" height="600px" />
                    <?php } ?>
                </div>

                <!-- 12 -->
                <div id="t12" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">Lecture Notes-1</h2>
                    <hr>
                    <br>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql = "SELECT checked FROM checks WHERE name='LN1' AND ids='$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($info = $result->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    ?>
                    <?php
                    if ($check == 0) {
                        $id = $_SESSION['teacher_ID'];
                        if (isset($_POST['submit_form12'])) {
                            $fname = $_POST['files1'];
                            $sql1 = "UPDATE uploads SET filename='$fname' WHERE module='12'";
                            $result1 = mysqli_query($conn, $sql1);
                            $nam = "LN1";
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully File Uploaded!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                    ?>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                            <div class="col-lg-4 col-md-4 btn-magin">
                                <form method="POST" style="border: 2px solid black;  padding: 15px; border-radius: 10px;">
                                    <label style="display: block;">Upload Lecture Notes-1*</label>
                                    <input type="file" name="files1" style="display: block; margin-bottom: 15px; cursor: pointer;">
                                    <input type="submit" name="submit_form12" value="Upload" class="btn-primary">
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                        </div>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">File Uploaded!! Proceed Further</h3>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql1 = "SELECT filename FROM uploads where module='12'";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($info = $result1->fetch_assoc()) {
                            $PDF = $info['filename'];
                        }
                        ?>
                        <embed src="<?php echo $PDF; ?>" width="100%" height="600px" />
                    <?php
                    } ?>
                </div>

                <!-- 13 -->
                <div id="t13" class="container-sm tab-pane fade">
                    <br>
                    <div style="margin: 0px 30px; width: 90%;">
                        <hr>
                        <h3 style="text-align: center;">Assessment Tools</h3>
                        <hr>
                        <?php
                        if (isset($_POST['submit_form13'])) {
                            $z = $_SESSION['teacher_ID'];
                            $x = 1;
                            $y = 111;
                            while ($x <= 5) {
                                $y1 = $_POST[$y];
                                $sql = "INSERT INTO assessment(Sno, DA) VALUES('$x','$y1')";
                                $result = mysqli_query($conn, $sql);
                                $x++;
                                $y++;
                            }
                            $id = $_SESSION['teacher_ID'];
                            $nam = "Assessment";
                            $bol = 1;
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully Assessment Tools Added!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql1 = "SELECT checked FROM checks WHERE name='Assessment' AND ids='$id'";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($info = $result1->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 0) {
                        ?>
                            <table style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th colspan="4" style="text-align: center;"><strong>Advances in AI (21M71CS112)</strong></th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <th>
                                        </th>
                                        <th>
                                            Course Outcome
                                        </th>
                                        <th>
                                            Direct Assessment Tools (80%)
                                        </th>
                                        <th>
                                            In-Direct Assessment Tools (20%)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <form method="POST">
                                        <?php
                                        $name = $_SESSION['teacher_name'];
                                        $sql1 = "SELECT * FROM description WHERE teacher_name='$name'";
                                        $result1 = mysqli_query($conn, $sql1);
                                        while ($info = $result1->fetch_assoc()) {
                                            $cos = $info['co'];
                                            $codes = $info['code'];
                                        }
                                        $sql = "SELECT * FROM descriptionfull WHERE coordinator='$name'";
                                        $result = mysqli_query($conn, $sql);
                                        while ($info = $result->fetch_assoc()) {
                                            $d1 = $info['d1'];
                                            $d2 = $info['d2'];
                                            $d3 = $info['d3'];
                                            $d4 = $info['d4'];
                                            $d5 = $info['d5'];
                                        }

                                        $x = 1;
                                        $y = 111;
                                        while ($x <= $cos) {
                                            echo "<tr>";
                                            echo "<td> $codes.$x </td>";
                                            $d;
                                            if ($x == 1) {
                                                $d = $d1;
                                            } elseif ($x == 2) {
                                                $d = $d2;
                                            } elseif ($x == 3) {
                                                $d = $d3;
                                            } elseif ($x == 4) {
                                                $d = $d4;
                                            } elseif ($x == 5) {
                                                $d = $d5;
                                            }
                                        ?>
                                            <td style="text-align: center;"> <?php echo $d; ?></td>
                                            <td> <input type="text" name="<?php echo $y; ?>" class="form-control"></td>
                                            <td>Course Exit Survey</td>
                                        <?php
                                            $x++;
                                            $y++;
                                        }
                                        ?>
                                </tbody>
                            </table>
                            <hr>
                            <input type="submit" name="submit_form13" value="Submit" class="btn-primary">
                            </form>
                        <?php } else {
                        ?>
                            <h3 style="text-align: center; color: red;">Assessment Tools Updated!! Proceed Further</h3>
                            <hr>
                            <table style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th colspan="4" style="text-align: center;"><strong>Advances in AI (21M71CS112)</strong></th>
                                    </tr>
                                </thead>
                                <thead>
                                    <tr>
                                        <th>
                                        </th>
                                        <th>
                                            Course Outcome
                                        </th>
                                        <th>
                                            Direct Assessment Tools (80%)
                                        </th>
                                        <th>
                                            In-Direct Assessment Tools (20%)
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $name = $_SESSION['teacher_name'];
                                    $sql1 = "SELECT * FROM description WHERE teacher_name='$name'";
                                    $result1 = mysqli_query($conn, $sql1);
                                    while ($info = $result1->fetch_assoc()) {
                                        $cos = $info['co'];
                                        $codes = $info['code'];
                                    }
                                    $id = $_SESSION['teacher_ID'];
                                    $sql = "SELECT * FROM descriptionfull";
                                    $result = mysqli_query($conn, $sql);
                                    while ($info = $result->fetch_assoc()) {
                                        $d1 = $info['d1'];
                                        $d2 = $info['d2'];
                                        $d3 = $info['d3'];
                                        $d4 = $info['d4'];
                                        $d5 = $info['d5'];
                                    }

                                    $x = 1;
                                    $y = 111;
                                    $sql1 = "SELECT * FROM assessment";
                                    $result1 = mysqli_query($conn, $sql1);
                                    while ($x <= $cos and $info = $result1->fetch_assoc()) {
                                        $DA = $info['DA'];
                                        echo "<tr>";
                                        echo "<td> $codes.$x </td>";
                                        $d;
                                        if ($x == 1) {
                                            $d = $d1;
                                        } elseif ($x == 2) {
                                            $d = $d2;
                                        } elseif ($x == 3) {
                                            $d = $d3;
                                        } elseif ($x == 4) {
                                            $d = $d4;
                                        } elseif ($x == 5) {
                                            $d = $d5;
                                        }
                                    ?>
                                        <td style="text-align: center;"> <?php echo $d; ?></td>
                                        <td><?php echo $DA; ?></td>
                                        <td>Course Exit Survey</td>
                                    <?php
                                        $x++;
                                        $y++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        <?php } ?>
                        <hr>
                    </div>

                </div>


                <!-- 14 -->
                <div id="t14" class="container-sm tab-pane fade">
                    <div style="margin-left: 30px;">
                        <hr>
                        <h3 style="text-align: center; margin-top: 10px;"> <strong> Department of CSE&IT</strong></h3>
                        <h4 style="text-align: center; margin-top: 10px;">AY: 2022-23 (ODD Semester)</h4>
                        <h5 style="text-align: center; margin-top: 10px; text-decoration: underline;"><strong>Lecture Plan</strong></h5>
                        <br>


                        <?php
                        $id = $_SESSION['teacher_ID'];
                        if (isset($_POST['submit_form14'])) {
                            $x = 1;
                            $y = 111;
                            while ($x <= 42) {
                                $x1 = $_POST[$x];
                                $y1 = $_POST[$y];
                                $sql = "INSERT INTO lectureplan(id, topic, date) VALUES('$x', '$x1', '$y1')";
                                $result = mysqli_query($conn, $sql);
                                $x++;
                                $y++;
                            }
                            $id = $_SESSION['teacher_ID'];
                            $nam = "Lecture Plan";
                            $bol = 1;
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully Lecture Plan Added!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql1 = "SELECT checked FROM checks WHERE name='Lecture Plan' AND ids='$id'";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($info = $result1->fetch_assoc()) {
                            $check = $info['checked'];
                        }
                        if ($check == 0) {
                        ?>
                            <h6> <strong> Programme Name: M.Tech (CSE and AI & ML)</strong></h6>
                            <h6> <strong> Semester: 1<sup>st</sup></strong></h6>
                            <h6> <strong> Course Name & Code: Advances in AI (21M71CS112) </strong></h6>
                            <br>
                            <hr>
                            <table style="width: 90%;">
                                <tbody>
                                    <tr>
                                        <th style="width: 10%;">SNO.</th>
                                        <th style="width: 40%;">Topic Covered</th>
                                        <th style="width: 25%;">Scheduled date</th>
                                        <th style="width: 25%;">Teaching Mode</th>
                                    </tr>
                                    <form method="POST">
                                        <?php
                                        $y = 111;
                                        $x = 1;
                                        while ($x <= 42) {
                                        ?>
                                            <tr>
                                                <td><?php echo $x; ?></td>
                                                <td><input type="text" name=<?php echo $x; ?> class="form-control" required></td>
                                                <td><input type="text" name=<?php echo $y; ?> class="form-control" required></td>
                                                <td>BB/PPT</td>
                                            </tr>
                                        <?php
                                            $x++;
                                            $y++;
                                        } ?>
                                </tbody>
                            </table>
                            <br>
                            <p>Total Lectures: 42 &nbsp;&nbsp;&nbsp; Scheduled: 42 &nbsp;&nbsp;&nbsp; Actual: 42</p>
                            <hr>
                            <input type="submit" name="submit_form14" value="Submit" class="btn-primary">
                            </form>
                        <?php } else {
                        ?>
                            <hr>
                            <h3 style="text-align: center; color: red;">Lecture Plan Updated!! Proceed Further</h3>
                            <hr>
                            <h6> <strong> Programme Name: M.Tech (CSE and AI & ML)</strong></h6>
                            <h6> <strong> Semester: 1<sup>st</sup></strong></h6>
                            <h6> <strong> Course Name & Code: Advances in AI (21M71CS112) </strong></h6>
                            <br>
                            <hr>
                            <table style="width: 90%;">
                                <tbody>
                                    <tr>
                                        <th style="width: 10%;">SNO.</th>
                                        <th style="width: 40%;">Topic Covered</th>
                                        <th style="width: 25%;">Scheduled date</th>
                                        <th style="width: 25%;">Teaching Mode</th>
                                    </tr>
                                    <?php
                                    $id = $_SESSION['teacher_ID'];
                                    $sql1 = "SELECT * FROM lectureplan";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $x = 1;
                                    while ($info = $result1->fetch_assoc()) {
                                        $topic = $info['topic'];
                                        $date = $info['date'];
                                    ?>
                                        <tr>
                                            <td><?php echo $x; ?></td>
                                            <td><?php echo $topic; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td>BB/PPT</td>
                                        </tr>
                                    <?php
                                        $x++;
                                    } ?>
                                </tbody>
                            </table>
                            <br>
                            <p>Total Lectures: 42 &nbsp;&nbsp;&nbsp; Scheduled: 42 &nbsp;&nbsp;&nbsp; Actual: 42</p>
                            <hr>
                        <?php } ?>
                    </div>
                </div>

                <!-- 15 -->
                <div id="t15" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">Opening Report</h2>
                    <hr>
                    <br>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql = "SELECT checked FROM checks WHERE name='Opening Report' AND ids='$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($info = $result->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    ?>
                    <?php
                    if ($check == 0) {
                        $id = $_SESSION['teacher_ID'];
                        if (isset($_POST['submit_form15'])) {
                            $fname = $_POST['files1'];
                            $sql1 = "UPDATE uploads SET filename='$fname' WHERE module='15'";
                            $result1 = mysqli_query($conn, $sql1);
                            $nam = "Opening Report";
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully File Uploaded!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                    ?>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                            <div class="col-lg-4 col-md-4 btn-magin">
                                <form method="POST" style="border: 2px solid black;  padding: 15px; border-radius: 10px;">
                                    <label style="display: block;">Opening Report</label>
                                    <input type="file" name="files1" style="display: block; margin-bottom: 15px; cursor: pointer;">
                                    <input type="submit" name="submit_form15" value="Upload" class="btn-primary">
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                        </div>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">File Uploaded!! Proceed Further</h3>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql1 = "SELECT filename FROM uploads where module='15'";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($info = $result1->fetch_assoc()) {
                            $PDF = $info['filename'];
                        }
                        ?>
                        <embed src="<?php echo $PDF; ?>" width="100%" height="600px" />
                    <?php
                    } ?>
                </div>



                <!-- 16 -->
                <div id="t16" class="container-sm tab-pane fade">
                    <h2 style="color: red; text-align: center; margin-top: 20%;">No Preveious Closing Report!!</h2>
                </div>

                <!-- 17 -->
                <div id="t17" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h3 style="text-align: center;">Detailed Syllabus</h3>
                    <hr>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql = "SELECT checked FROM checks WHERE name='Course Description' AND ids='$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($info = $result->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <div style="border: 2px solid black; padding: 5px;">
                            <?php

                            if (isset($_POST['submit_form'])) {
                                $name = $_SESSION['teacher_name'];
                                $cos = $_POST['co'];
                                $code = $_POST['code'];
                                $id = $_SESSION['teacher_ID'];
                                $sql1 = "INSERT INTO description(co, code, teacher_name) VALUES('$cos','$code', '$name')";
                                $sql2 = "UPDATE teacher SET Co_check='1' WHERE teacher_ID='$id'";
                                $result1 = mysqli_query($conn, $sql1);
                                $result2 = mysqli_query($conn, $sql2);
                                if ($result1) {
                                    echo ("<script>alert('Successfully CO's Added!')</script>");
                                    echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            if (isset($_POST['submit_form1'])) {
                                $codes = $_POST['codes'];
                                $subname = $_POST['subjectname'];
                                $credit = $_POST['credit'];
                                $hours = $_POST['hours'];
                                $coordinator = $_POST['coordinator'];
                                $teacher = $_POST['teacher'];
                                $files = $_POST['files'];
                                $x = 1;
                                $y = 11;
                                $d1;
                                $d2;
                                $d3;
                                $d4;
                                $d5;
                                $l1;
                                $l1;
                                $l3;
                                $l4;
                                $l5;
                                while ($x <= 5) {
                                    if ($x == 1) {
                                        $d1 = $_POST[$x];
                                        $l1 = $_POST[$y];
                                    } elseif ($x == 2) {
                                        $d2 = $_POST[$x];
                                        $l2 = $_POST[$y];
                                    } elseif ($x == 3) {
                                        $d3 = $_POST[$x];
                                        $l3 = $_POST[$y];
                                    } elseif ($x == 4) {
                                        $d4 = $_POST[$x];
                                        $l4 = $_POST[$y];
                                    } elseif ($x == 5) {
                                        $d5 = $_POST[$x];
                                        $l5 = $_POST[$y];
                                    }
                                    $x++;
                                    $y++;
                                }
                                $sql1 = "INSERT INTO descriptionfull(subcode, subname, credit, contact, coordinator, teachers, d1, d2, d3, d4, d5, l1,l2, l3, l4, l5, file) VALUES('$codes','$subname', '$credit', '$hours', '$coordinator', '$teacher', '$d1' ,'$d2' ,'$d3' ,'$d4' ,'$d5' ,'$l1' ,'$l2' ,'$l3' ,'$l4' ,'$l5', '$files')";
                                $id = $_SESSION['teacher_ID'];
                                $nam = "Course Description";
                                $bol = 1;
                                $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                                $result1 = mysqli_query($conn, $sql1);
                                $result2 = mysqli_query($conn, $sql2);
                                if ($result1 and $result2) {
                                    echo ("<script>alert('Successfully Description Added!')</script>");
                                    echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                    exit();
                                } else {
                                    echo "<script>alert('Unsuccessfull!')</script>";
                                    echo ("<script>window.location = 'admin_dashboard.php';</script>");
                                    exit();
                                }
                            }
                            ?>
                            <?php
                            $id = $_SESSION['teacher_ID'];
                            $sql1 = "SELECT Co_check FROM teacher WHERE teacher_ID='$id'";
                            $result1 = mysqli_query($conn, $sql1);
                            while ($info = $result1->fetch_assoc()) {
                                $check = $info['Co_check'];
                            }
                            if ($check == 0) {
                            ?>
                                <div class="container">
                                    <form method="POST" style="border: 2px solid black; padding: 15px; border-radius: 10px;">
                                        <label>Number of CO's</label>
                                        <input type="number" name="co" class="form-control" style="margin-bottom: 15px;" required>
                                        <label>NBA Code</label>
                                        <input type="text" name="code" class="form-control" style="margin-bottom: 15px;" required>
                                        <input type="submit" name="submit_form" value="Send" class="btn-primary">
                                    </form>
                                </div>
                            <?php } else { ?>
                                <form method="POST">
                                    <table style="width: 100%;">
                                        <tbody>
                                            <tr>
                                                <td colspan="2">
                                                    <p> <strong> Subject Code </strong></p>

                                                </td>
                                                <td colspan="3">
                                                    <input type="text" name="codes" required size="20">
                                                </td>
                                                <td colspan="3">
                                                    <p> <strong> Semester Even </strong></p>
                                                </td>
                                                <td colspan="5">
                                                    <strong>
                                                        <p>Semester M.Tech I</p>
                                                        <p>Session 2022-2023</p>
                                                        <p>Month from July-December</p>
                                                    </strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p><strong>
                                                            Subject Name
                                                        </strong>
                                                    </p>
                                                </td>
                                                <td colspan="11">
                                                    <input type="text" name="subjectname" required size="20">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p><strong>
                                                            Credits
                                                        </strong>
                                                    </p>
                                                </td>
                                                <td colspan="3">
                                                    <input type="number" name="credit" required size="25">
                                                </td>
                                                <td colspan="3">
                                                    <p><strong>
                                                            Contact Hours
                                                        </strong>
                                                    </p>
                                                </td>
                                                <td colspan="5">
                                                    <input type="number" name="hours" required size="25">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" rowspan="2">
                                                    <p><strong>
                                                            Faculty Names(s)
                                                        </strong>
                                                    </p>
                                                </td>
                                                <td colspan="3">
                                                    <p><strong>
                                                            Coordinators(s)
                                                        </strong>
                                                    </p>
                                                </td>
                                                <td colspan="8">
                                                    <input type="text" name="coordinator" required size="25">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3">
                                                    <p><strong>
                                                            Teacher(s) (Alphabetically)
                                                        </strong>
                                                    </p>
                                                </td>
                                                <td colspan="8">
                                                    <input type="text" name="teacher" required size="25">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <table style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%;">
                                                    S.No
                                                </th>
                                                <th style="width: 50%;">
                                                    Description
                                                </th>
                                                <th style="width: 40%;">
                                                    Cognitive Level (Blooms Taxonomy)
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $name = $_SESSION['teacher_name'];
                                            $sql1 = "SELECT * FROM description WHERE teacher_name='$name'";
                                            $result1 = mysqli_query($conn, $sql1);
                                            while ($info = $result1->fetch_assoc()) {
                                                $cos = $info['co'];
                                                $codes = $info['code'];
                                            }
                                            $x = 1;
                                            $y = 11;
                                            while ($x <= $cos) {
                                                echo "<tr>";
                                                echo "<td> $codes.$x </td>";
                                            ?>

                                                <td> <input type="text" name="<?php echo $x; ?>" required size="80" style="margin: 5px;"></td>
                                                <td> <input type="text" name="<?php echo $y; ?>" required size="60" style="margin: 5px;"></td>
                                            <?php
                                                $x++;
                                                $y++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <hr>
                                    <div style="text-align:center ; border: 2px solid black; margin: auto; width: 100%; padding: 10px;">
                                        <label style="display: block;">Upload Topic Modules*</label>
                                        <input type="file" name="files" style="display: block; margin-bottom: 15px; cursor: pointer;">
                                    </div>
                                    <hr>
                                    <div style="text-align:center ; border: 2px solid black; margin: auto; width: 100%; padding: 10px;">
                                        <hr> <input type="submit" name="submit_form1" value="Submit" class="btn-primary" style="height: 50px; width: 250px;">
                                        <hr>
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">Data Already Added!! Proceed Further</h3>
                        <br>
                        <?php
                        $nam = $_SESSION['teacher_name'];
                        $id == $_SESSION['teacher_ID'];
                        $sql = "SELECT * FROM descriptionfull";
                        $result1 = mysqli_query($conn, $sql);
                        while ($info = $result1->fetch_assoc()) {
                            $code = $info['subcode'];
                            $subname = $info['subname'];
                            $credits = $info['credit'];
                            $cont = $info['contact'];
                            $coord = $info['coordinator'];
                            $teach = $info['teachers'];
                            $d1 = $info['d1'];
                            $d2 = $info['d2'];
                            $d3 = $info['d3'];
                            $d4 = $info['d4'];
                            $d5 = $info['d5'];
                            $l1 = $info['l1'];
                            $l2 = $info['l2'];
                            $l3 = $info['l3'];
                            $l4 = $info['l4'];
                            $l5 = $info['l5'];
                            $file = $info['file'];
                        }

                        ?>
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <p> <strong> Subject Code </strong></p>

                                    </td>
                                    <td colspan="3">
                                        <p><?php echo $code; ?></p>
                                    </td>
                                    <td colspan="3">
                                        <p> <strong> Semester Even </strong></p>
                                    </td>
                                    <td colspan="5">
                                        <strong>
                                            <p>Semester M.Tech I</p>
                                            <p>Session 2022-2023</p>
                                            <p>Month from July-December</p>
                                        </strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p><strong>
                                                Subject Name
                                            </strong>
                                        </p>
                                    </td>
                                    <td colspan="11">
                                        <p><?php echo $subname; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p><strong>
                                                Credits
                                            </strong>
                                        </p>
                                    </td>
                                    <td colspan="3">
                                        <p><?php echo $credits; ?></p>
                                    </td>
                                    <td colspan="3">
                                        <p><strong>
                                                Contact Hours
                                            </strong>
                                        </p>
                                    </td>
                                    <td colspan="5">
                                        <p><?php echo $cont; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" rowspan="2">
                                        <p><strong>
                                                Faculty Names(s)
                                            </strong>
                                        </p>
                                    </td>
                                    <td colspan="3">
                                        <p><strong>
                                                Coordinators(s)
                                            </strong>
                                        </p>
                                    </td>
                                    <td colspan="8">
                                        <p><?php echo $coord; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <p><strong>
                                                Teacher(s) (Alphabetically)
                                            </strong>
                                        </p>
                                    </td>
                                    <td colspan="8">
                                        <p><?php echo $teach; ?></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <table style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="width: 10%;">
                                        S.No
                                    </th>
                                    <th style="width: 50%;">
                                        Description
                                    </th>
                                    <th style="width: 40%;">
                                        Cognitive Level (Blooms Taxonomy)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $name = $_SESSION['teacher_name'];
                                $sql1 = "SELECT * FROM description WHERE teacher_name='$name'";
                                $result1 = mysqli_query($conn, $sql1);
                                while ($info = $result1->fetch_assoc()) {
                                    $cos = $info['co'];
                                    $codes = $info['code'];
                                }
                                $x = 1;
                                $y = 11;
                                while ($x <= $cos) {
                                    echo "<tr>";
                                    echo "<td> $codes.$x </td>";
                                    if ($x == 1) {
                                ?><td> <?php echo $d1; ?></td>
                                        <td> <?php echo $l1; ?></td> <?php
                                                                    } elseif ($x == 2) {
                                                                        ?><td> <?php echo $d2; ?></td>
                                        <td> <?php echo $l2; ?></td><?php

                                                                    } elseif ($x == 3) {
                                                                    ?><td> <?php echo $d3; ?></td>
                                        <td> <?php echo $l3; ?></td><?php

                                                                    } elseif ($x == 4) {
                                                                    ?><td> <?php echo $d4; ?></td>
                                        <td> <?php echo $l4; ?></td><?php
                                                                    } elseif ($x == 5) {
                                                                    ?><td> <?php echo $d5; ?></td>
                                        <td> <?php echo $l5; ?></td><?php
                                                                    }
                                                                    ?>
                                <?php
                                    $x++;
                                    $y++;
                                }
                                ?>
                            </tbody>
                        </table>
                        <hr>
                        <embed src="<?php echo $file; ?>" width="100%" height="600px" />
                    <?php } ?>
                </div>

                <!-- 18 -->
                <div id="t18" class="container-sm tab-pane fade">
                    <br>
                    <hr>
                    <h2 style="text-align: center;">PEO-PO-PSO</h2>
                    <hr>
                    <br>
                    <?php
                    $id = $_SESSION['teacher_ID'];
                    $sql = "SELECT checked FROM checks WHERE name='PEO' AND ids='$id'";
                    $result = mysqli_query($conn, $sql);
                    while ($info = $result->fetch_assoc()) {
                        $check = $info['checked'];
                    }
                    if ($check == 0) {
                    ?>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        if (isset($_POST['submit_form18'])) {
                            $fname = $_POST['files'];
                            $sql1 = "UPDATE uploads SET filename='$fname' WHERE module='18'";
                            $result1 = mysqli_query($conn, $sql1);
                            $nam = "PEO";
                            $sql2 = "UPDATE checks SET checked='1' WHERE ids='$id' AND name='$nam'";
                            $result2 = mysqli_query($conn, $sql2);
                            echo ("<script>alert('Successfully File Uploaded!')</script>");
                            echo ("<script>window.location = 'admin_dashboard.php';</script>");
                            exit();
                        }
                        ?>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                            <div class="col-lg-4 col-md-4 btn-magin">
                                <form method="POST" style="border: 2px solid black;  padding: 15px; border-radius: 10px;">
                                    <label style="display: block;">Upload PEO-PO-PSO for your course*</label>
                                    <input type="file" name="files" style="display: block; margin-bottom: 15px; cursor: pointer;">
                                    <input type="submit" name="submit_form18" value="Upload" class="btn-primary">
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-4 btn-magin">
                            </div>

                        </div>
                    <?php } else {
                    ?>
                        <h3 style="text-align: center; color: red;">File Uploaded!! Proceed Further</h3>
                        <?php
                        $id = $_SESSION['teacher_ID'];
                        $sql1 = "SELECT filename FROM uploads where module='18'";
                        $result1 = mysqli_query($conn, $sql1);
                        while ($info = $result1->fetch_assoc()) {
                            $PDF = $info['filename'];
                        }
                        ?>
                        <embed src="<?php echo $PDF; ?>" width="100%" height="600px" />
                    <?php } ?>
                </div>

                <!-- 19 -->
                <div id="t19" class="container-sm tab-pane fade">
                    <?php
                    $sql1 = "SELECT location FROM static where ID='19'";
                    $result1 = mysqli_query($conn, $sql1);
                    while ($info = $result1->fetch_assoc()) {
                        $PDF = $info['location'];
                    }

                    ?>
                    <embed src="<?php echo $PDF; ?>" width="100%" height="600px" />
                </div>

                <!-- 20 -->
                <div id="t20" class="container-sm tab-pane fade">
                    <?php
                    $sql11 = "SELECT location FROM static WHERE ID='20'";
                    $result11 = mysqli_query($conn, $sql11);
                    while ($info = $result11->fetch_assoc()) {
                        $PDF = $info['location'];
                    }
                    ?>
                    <embed src="<?php echo $PDF; ?>" width="100%" height="600px" />
                </div>
            </div>
        </section>
    </body>

    </html>
<?php
} else {
    header("Location: teacher_login.php");
    exit();
}
?>