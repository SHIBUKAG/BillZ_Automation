<?php

session_start();

if($_SERVER["REQUEST_METHOD"]){
    include 'db_connect.php';

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM `registration_table` WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($result);

    if($numrows == 1)
    {
        $row = mysqli_fetch_assoc($result);
        if($pass == $row['password'])
        {
            $_SESSION['loggedin'] = "true";
            $_SESSION['email'] = $email;
            $_SESSION['bname'] = $row['business_name'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['city'] = $row['city'];
            $_SESSION['state'] = $row['state'];
            $_SESSION['pincode'] = $row['pincode'];

            header("Location: /BillZ_Automation");

        }
    }
}
?>