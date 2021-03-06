<?php
namespace Cart\Auth;
include_once 'lib/Cart/Db/cart_db.php';
use function Cart\Db\read_user;

session_start();

function login($users, $username, $password) {
	$user = read_user($users, $username, $password);
        
        if (!in_array($user, $users)) {
            echo "User not recognised. Please try again";
        }
	else if($user && password_verify($password, $user['password'])) {
		$_SESSION['username'] = $username;
                header('Location: ' . $_SESSION['redirectURL']);
                exit();
	} else {
		echo "User not recognised. Please try again";
	}
}

function logout() {
 session_destroy();
    
}

function require_login() {
 if (!isset($_SESSION['username'])) {
        $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
        header('Location: login.php');
        exit();
    }
}
