<?php
include "_dbconnect_admin.php";

if (isset($_POST['submit_merges'])) {
    $id = $_POST['ids'];
    $name = $_POST['name'];
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

            /* modal */
            .modal-full {
                min-width: 100%;
                margin: 0;
            }

            .modal-full .modal-content {
                min-height: 100vh;
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

        <!-- 1 -->
        <h2 style="text-align: center;">Course File</h2>
        <h3 style="text-align: center;">Jaypee Institute Of Information Technology</h3>
        <hr>
        <h4><u>Closing Report</u></h4>
        <br>
        <h6> <strong>1. Program Name: M.Tech (AIML)</strong></h6>
        <h6> <strong>2. Semester: I</strong></h6>
        <h6> <strong>3. Course Name & Code: Advances in AI (21M71CS112)</strong></h6>
        <h6><strong>4. Course Coordinator: Dr. Ankit Vidyarthi</strong></h6>
        <br>
        <h5><strong>5. <u>Course Outcomes:</u></strong></h5>
        <p>At the Completion of the course, student will be able to,</p>
        <?php
        $nam = $name;
        $id = $id;
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
                $name = $name;
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
                $id = $id;
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
                $id = $id;
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
        <br>

        <h6><strong> Signature:</strong></h6>
        <h6><strong>Module Coordinator:</strong></h6>
        <br>
        <h6><strong> Signature:</strong></h6>
        <h6><strong>Course Coordinator:</strong></h6>
        <hr>
        <br>


        <!-- 2 -->
        <h4><u>Attainment</u></h4>
        <br>
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
                $id = $id;
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
                $id = $id;
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
                $id = $id;
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
                $id = $id;
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
        <br>
        <h5><u>Course Exit Survey</u></h5>
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
                    $id = $id;
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
                    echo round(($perc1),2); ?></td>
                <td><?php $perc2 = ($count2 / $row_counts) * 100;
                    echo round(($perc2),2); ?></td>
                </td>
                <td><?php $perc3 = ($count3 / $row_counts) * 100;
                    echo round(($perc3),2); ?></td>
                </td>
                <td><?php $perc4 = ($count4 / $row_counts) * 100;
                    echo round(($perc4),2); ?></td>
                </td>
                <td><?php $perc5 = ($count5 / $row_counts) * 100;
                    echo round(($perc5),2); ?></td>
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
        <br>
        <h5><u>End Term Attainment</u></h5>
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
                    $id = $id;
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
                    echo round(($perc1),2); ?></td>
                <td><?php $perc2 = ($count2 / $row_counts) * 100;
                    echo round(($perc2),2); ?></td>
                </td>
                <td><?php $perc3 = ($count3 / $row_counts) * 100;
                    echo round(($perc3),2); ?></td>
                </td>
                <td><?php $perc4 = ($count4 / $row_counts) * 100;
                    echo round(($perc4),2); ?></td>
                </td>
                <td><?php $perc5 = ($count5 / $row_counts) * 100;
                    echo round(($perc5),2); ?></td>
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
                    ?>
                </td>
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
        <br>
        <h5><u>TA Attainment</u></h5>
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
                    $id = $id;
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
                    echo round(($perc1),2); ?></td>
                <td><?php $perc2 = ($count2 / $row_counts) * 100;
                    echo round(($perc2),2); ?></td>
                </td>
                <td><?php $perc3 = ($count3 / $row_counts) * 100;
                    echo round(($perc3),2); ?></td>
                </td>
                <td><?php $perc4 = ($count4 / $row_counts) * 100;
                    echo round(($perc4),2); ?></td>
                </td>
                <td><?php $perc5 = ($count5 / $row_counts) * 100;
                    echo round(($perc5),2); ?></td>
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
        <br>

        <?php
        $id = $id;
        $sql1 = "SELECT filename FROM uploads where module='6'";
        $result1 = mysqli_query($conn, $sql1);
        while ($info = $result1->fetch_assoc()) {
            $PDF = $info['filename'];
        }
        ?>
        <a target="_blank" href="<?php echo $PDF; ?>">
            <h5><u>Lecture Notes-3</u></h5>
        </a>
        <hr><br>
        <h5><u>T2 Attainment</u></h5>
        <h6> <strong>TA Examination</strong></h6>
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
                    $id = $id;
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
                    echo round(($perc1),2); ?></td>
                <td><?php $perc2 = ($count2 / $row_counts) * 100;
                    echo round(($perc2),2); ?></td>
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
        <br>
        <?php
        $id = $id;
        $sql1 = "SELECT filename FROM uploads where module='8'";
        $result1 = mysqli_query($conn, $sql1);
        while ($info = $result1->fetch_assoc()) {
            $PDF = $info['filename'];
        }
        ?>
        <a target="_blank" href="<?php echo $PDF; ?>">
            <h5><u>Assignments</u></h5>
        </a>

        <hr><br>
        <?php
        $id = $id;
        $sql1 = "SELECT filename FROM uploads where module='9'";
        $result1 = mysqli_query($conn, $sql1);
        while ($info = $result1->fetch_assoc()) {
            $PDF = $info['filename'];
        }
        ?>
        <a target="_blank" href="<?php echo $PDF; ?>">
            <h5><u>Lecture Notes-2</u></h5>
        </a>

        <hr><br>
        <h5><u>T1 Attainment</u></h5>
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
                    $id = $id;
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
                    echo round(($perc1),2); ?></td>
                <td><?php $perc2 = ($count2 / $row_counts) * 100;
                    echo round(($perc2),2); ?></td>
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
        <br>
        <?php
        $id = $id;
        $sql1 = "SELECT filename FROM uploads where module='11'";
        $result1 = mysqli_query($conn, $sql1);
        while ($info = $result1->fetch_assoc()) {
            $PDF = $info['filename'];
        }
        ?>
        <a target="_blank" href="<?php echo $PDF; ?>">
            <h5><u>T1 Solution</u></h5>
        </a>

        <hr><br>
        <?php
        $id = $id;
        $sql1 = "SELECT filename FROM uploads where module='12'";
        $result1 = mysqli_query($conn, $sql1);
        while ($info = $result1->fetch_assoc()) {
            $PDF = $info['filename'];
        }
        ?>
        <a target="_blank" href="<?php echo $PDF; ?>">
            <h5><u>Lecture Notes-1</u></h5>
        </a>

        <hr><br>
        <h5><u>Assessment Tools</u></h5>
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
                $name = $name;
                $sql1 = "SELECT * FROM description WHERE teacher_name='$name'";
                $result1 = mysqli_query($conn, $sql1);
                while ($info = $result1->fetch_assoc()) {
                    $cos = $info['co'];
                    $codes = $info['code'];
                }
                $id = $id;
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
        <hr>
        <br>
        <h5><u>Lecture Plan</u></h5>
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
                $id = $id;
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
        <br>
        <?php
        $id = $id;
        $sql1 = "SELECT filename FROM uploads where module='15'";
        $result1 = mysqli_query($conn, $sql1);
        while ($info = $result1->fetch_assoc()) {
            $PDF = $info['filename'];
        }
        ?>
        <a target="_blank" href="<?php echo $PDF; ?>">
            <h5><u>Opening Report</u></h5>
        </a>

        <hr><br>

        <h5 style="text-align: center; color: red;"><u>No Previous Closing Report!</u></h5>

        <hr><br>
        <h5><u>Course Description</u></h5>
        <?php
        $nam = $name;
        $id == $id;
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
                $name = $name;
                $sql1 = "SELECT * FROM description WHERE teacher_name='$name'";
                $result1 = mysqli_query($conn, $sql1);
                while ($info = $result1->fetch_assoc()) {
                    $cos = $info['co'];
                    $codes = $info['code'];
                }
                $x = 1;
                $y = 11;
                while ($x <= 5) {
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
        <a target="_blank" href="<?php echo $file; ?>">
            <h5><u>Course Description</u></h5>
        </a>

        <hr><br>
        <?php
        $id = $id;
        $sql1 = "SELECT filename FROM uploads where module='18'";
        $result1 = mysqli_query($conn, $sql1);
        while ($info = $result1->fetch_assoc()) {
            $PDF = $info['filename'];
        }
        ?>
        <a target="_blank" href="<?php echo $PDF; ?>">
            <h5><u>PEO-PO-PSO</u></h5>
        </a>
        <hr><br>
        <?php
        $id = $id;
        $sql11 = "SELECT location FROM static WHERE ID='20'";
        $result11 = mysqli_query($conn, $sql11);
        while ($info = $result11->fetch_assoc()) {
            $PDF = $info['location'];
        }
        ?>
        <a target="_blank" href="<?php echo $PDF; ?>">
            <h5><u>Vision_CSE</u></h5>
        </a>
        <hr><br>
        <?php
        $id = $id;
        $sql11 = "SELECT location FROM static WHERE ID='20'";
        $result11 = mysqli_query($conn, $sql11);
        while ($info = $result11->fetch_assoc()) {
            $PDF = $info['location'];
        }
        ?>
        <a target="_blank" href="<?php echo $PDF; ?>">
            <h5><u>Mission_Vision_JIIT</u></h5>
        </a>
        <hr><br>
    </body>

    </html>
<?php
}
?>