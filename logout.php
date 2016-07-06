<?php
include 'lib/Cart/Auth/cart_auth.php';
include 'lib/Cart/View/cart_view.php';

use function Cart\View\display;
use function Cart\Auth\logout;

logout()
?>

<!doctype html>
<html>
<head>
    <title>Logout</title>
     <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
<?= display('links');?>
<h1>Login</h1>
<p>You have successfully logged out</p>

</body>
</html>
