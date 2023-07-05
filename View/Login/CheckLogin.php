<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: http://localhost/macaco/view/login/formlogin.php');
}
?>