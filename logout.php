<?php
session_start();
echo 'Logging you out please wait..........';
session_destroy();
header("Location: /BillZ_Automation");
?>