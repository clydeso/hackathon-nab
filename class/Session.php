<?php

// Start Session
session_start();
$error = array();
 
$userinfo = array(
    'admin1' => 'password1',
    'admin2' => 'password2'
);
 
if (isset($_GET['logout'])) {
    $_SESSION['u'] = '';
    header('Location: ' . $_SERVER['PHP_SELF']);
} 

if (isset($_POST['u'])) { 
    if ($userinfo[$_POST['u']] == $_POST['p']) {
        $_SESSION['u'] = $_POST['u'];
    } else {
        //Invalid Login
        $error['message'] = 'Incorrect Login/Password';
    }
} 

$dashboard_url = BASE_URI.'dashboard';  
if ($_SESSION['u'] && $_SERVER['REQUEST_URI'] != $dashboard_url) {
    header('Location: ' . BASE_URL . BASE_URI . 'dashboard');
}   

?>