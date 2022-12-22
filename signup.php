<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Signup Form</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background: #e6e6fa;
    }

    .form {
        height: 100%;
        width: 600px;
        margin: auto;
        margin-top: 5%;
        border: 3px solid grey;
        background: white;
        border-radius: 5px;
        opacity: 0.9;
        box-shadow: 0 0 100px rgba(0, 0, 0, 0.5);
    }

    .form form {
        padding: 30px;
    }

    .alert {
        margin: auto;
        margin-top: 10px;
        width: 800px;
    }

    .reg {
        text-decoration: none;
    }

    .reg:hover {
        color: red;
        text-decoration: none;
    }

    .form h1 {
        margin-top: 30px;
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="alert">
        <?php
        if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true")
            {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> Now you can login.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                ';
            } 
        else if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false")
            {
                $error = $_GET['error'];
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>'.$error.'</strong> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    ';
            }
            
        ?>

    </div>
    <div class="form">
        <h1><a href="signup.php" class="reg">Registration Form</a></h1>
        <form action="signuphandle.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="pass">
                </div>
            </div>
            <div class="form-group">
                <label for="businessName">Business Name</label>
                <input type="text" class="form-control" id="businessName" placeholder="XYZ" name="bname">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"
                    name="address">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="city">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" class="form-control" name="state">
                        <option selected>Choose...</option>
                        <option>Andaman and Nicobar Islands</option>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chandigarh</option>
                        <option>Chhattisgarh</option>
                        <option>Dadra and Nagar Haveli</option>
                        <option>Daman and Diu</option>
                        <option>Delhi</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Haryana</option>
                        <option>Himachal Pradesh</option>
                        <option>Jammu and Kashmir</option>
                        <option>Jharkhand</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Ladakh</option>
                        <option>Lakshadweep</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Puducherry</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Telangana</option>
                        <option>Tripura</option>
                        <option>Uttar Pradesh</option>
                        <option>Uttarakhand</option>
                        <option>West Bengal</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputPin">Pincode</label>
                    <input type="text" class="form-control" id="inputPin" name="pincode">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="signups">Sign Up</button>
            <button type="submit" class="btn btn-primary" name="signups"><a href="login.php"
                    style="text-decoration: none; color:white;">Already have
                    account</a></button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>