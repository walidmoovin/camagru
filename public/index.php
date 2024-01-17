<?php
session_start();

require '../config/dbconnect.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] === 'register') {
        require '../app/controllers/RegisterController.php';
    } elseif ($_GET['action'] === 'login') {
        require '../app/controllers/LoginController.php';
    }
} else {
    include '../app/views/home.php';
}
?>