<?php
include 'lib/Cart/Db/cart_db.php';
include 'lib/Cart/App/cart_app.php';
include 'lib/Cart/View/cart_view.php';
include 'lib/Cart/Auth/cart_auth.php';

use function Cart\View\display;
use function Cart\Auth\require_login;

$view_vars = \Cart\App\get_item($cart, $_GET['id'] ?? 0);

require_login();
?>


<!doctype html>
<html>
<head><title>Shopping Cart</title>
     <link rel="icon" type="image/png"  href="img/shopping_cart_grey.png">
  <link href="css/main.css" rel="stylesheet" type="text/css">
<body>
<?= display('links');?>
<h1>Shopping Cart</h1>
<p>You are logged in as <?= $_SESSION['username'] ?></p><br>
<?php echo display('item', $view_vars); ?>

</body>
</html>
