<?php
include 'lib/Cart/Auth/cart_auth.php';
include 'lib/Cart/View/cart_view.php';

use function Cart\View\display;
use function Cart\Auth\login;

?>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
    <?php login($users,$_POST['username'],$_POST['password']); ?>
<?php endif; ?>


<!doctype html>
<html>
<head>
    <title>Login</title>
    <?php  include 'header.php'; ?>
</head>
<body>
    
    <?= display('links');?>
    <h1>Login</h1>
    <p>Please log in here:</p>
    <?= display('loginform'); ?>
    
</body>
</html>
