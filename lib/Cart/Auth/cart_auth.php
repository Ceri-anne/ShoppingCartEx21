<?php
namespace Cart\Auth;
include_once 'lib/Cart/Db/cart_db.php';
use function Cart\Db\read_user;

session_start();

function login($users, $username, $password) {
	$user = read_user($users, $username, $password);

	if($user && password_verify($password, $user['password'])) {
		$_SESSION['username'] = $username;
                header('Location: upload.php');
                exit();
	} else {
		echo("Login details not recognised. Please try again");
	}
}

function logout() {
 session_destroy();
    
}

function require_login() {
 if (!isset($_SESSION['username'])) {
        header('Location: login.php');
        exit();
    }
}
