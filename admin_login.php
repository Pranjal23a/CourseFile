<?php
session_start();
include "_dbconnect_admin.php";

if(isset($_POST['uname']) && isset($_POST['password']))
{
    function validate($data)
    {
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
}
$uname= validate($_POST['uname']);
$pass= validate($_POST['password']);

// $username= 201;
// $password= 'tt201';


// if(empty($username))
// {
//     header("Location: admin.php?error=User Name is required");
//     exit();
// }
// else if(empty($password))
// {
//     header("Location: admin.php?error=Password is required");
//     exit();
// }

$sql= "SELECT * FROM teacher WHERE teacher_ID='$uname' AND password='$pass' AND coordinator=1";

$result= mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1)
{
    $row= mysqli_fetch_assoc($result);
    if($row['teacher_ID'] === $uname && $row['password'] === $pass)
    {
        echo "Logged In!";
        $_SESSION['teacher_ID'] = $row['teacher_ID'];
        $_SESSION['teacher_name'] = $row['teacher_name'];
        $_SESSION['department'] = $row['department'];
        // $_SESSION['gender'] = $row['gender'];
        // $_SESSION['hostal_room_no'] = $row['hostal_room_no'];
        $_SESSION['image_link'] = $row['image_link'];

        header("Location: admin_dashboard.php");
        exit();
    }
    else
    {
        echo("<script>window.location = 'index.php';</script>");
        header("Location: index.php?error=Incorrect User Name or Password");
        exit();
    }
}
else
{
    echo("<script>alert('Incorrect User ID or Password!')</script>");
    echo("<script>window.location = 'index.php';</script>");
    // header("Location: index.html");
    exit();
}
