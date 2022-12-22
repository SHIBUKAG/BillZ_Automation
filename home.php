<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>BillZ</title>

</head>

<body>
    <?php include 'includes/nav.php';
    ?>
    <div class="container">
        <?php include 'includes/d_cards.php';
    ?>
</body>

</html>