<li><a href=".">Home</a></li>
<li><a href="cart.php">Cart</a></li>

{if $session->user and $session->user->is_admin}
  <li><a href="addProduct.php">Add Product</a></li>
  <li><a href="viewAllOrders.php">View All Orders</a></li>  
{/if}

{if $session->user}
  <li><a href="viewOrders.php">View Orders</a></li>
  <li><a href="logout.php">Logout</a></li>
{else}
  <li><a href="login.php">Login</a></li>
{/if}
