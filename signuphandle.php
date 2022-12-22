<?php
    $n=1;
    $showError = "false";
if($_SERVER["REQUEST_METHOD"]){
    include 'db_connect.php';

    
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $bname = $_POST['bname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];


    $check = "SELECT * FROM `registration_table` WHERE email='$email'";
    $result = mysqli_query($conn,$check);
    $numrows = mysqli_num_rows($result);

    if($pass == NULL || $email == NULL || $bname == NULL || $address == NULL || $city == NULL || $city == NULL || $pincode == NULL)
    {
        $n=0;
    }

    if($numrows>0){
        $showError = "Email Already in use";
    }
    else{
        if($n != 0)
        {
            $sql = "INSERT INTO `registration_table`(`email`, `password`, `business_name`, `address`, `city`, `state`, `pincode`) VALUES ('$email','$pass','$bname','$address','$city','$state','$pincode')";
            $result = mysqli_query($conn,$sql);
            if($result){
            header("Location: /BillZ_Automation/includes/signup.php?signupsuccess=true");
            exit();
        }
        }
        else{
        $showError = "Something Went Wrong! Try Again....";
        header("Location: /BillZ_Automation/includes/signup.php?signupsuccess=false&error=$showError");
      }
        }
    header("Location:/BillZ_Automation/includes/signup.php?signupsuccess=false&error=$showError");
}
?>