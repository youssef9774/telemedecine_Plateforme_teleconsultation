<?php
    session_start();
    if(!isset($_SESSION["username"])) {
        header("Location: patient_cnx.php");
        exit();
    }
?>