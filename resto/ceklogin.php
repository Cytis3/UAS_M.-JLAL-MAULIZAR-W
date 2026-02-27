<?php
session_start();
if (!isset($_SESSION['ses_username']) and !isset($_COOKIE['coo_username'])) {
    header("location:http://localhost/IS63/biodata/login.php");
}
