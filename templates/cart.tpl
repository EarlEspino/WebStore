{extends file="layout.tpl"}

{block name="localstyle"}
<style type="text/css">
  form {
    margin: 15px 0;
  }
  .super {
  display: inline-block;
  margin: 10px 0;
  padding: 10px;
  border: solid 2px black;
  }
</style>
{/block}

{block name="main"}
<h2>My Cart</h2>

<h4 style = "color:red">{$message}</h4>

<table id='cartListing'>
    
    
    {if $cart_info}
      <tr>
        <th>Product</th>
        <th>Unit Price</th>
        <th>Quantity</th>
      </tr>
      {foreach $cart_info as $info}
        <tr>  
          <td><a href="productInfo.php?product_id={$info->id}">{$info->name|escape: 'html'}</a></td>
          <td>${number_format($info->price,2)}</td>
          <td>{$info->quantity}</td>
          <br />
          
        </tr>
      {/foreach}
      
      <tr>
          <th>Total: ${number_format($total,2)}</th>
      </tr>
      
      <tr class="super">
        <td><form action="clearCart.php">
            <input type="submit" value="Clear Cart">
        </form></td>
      
      {if $valid}
         <td> <form action="placeOrder.php">
              <input type="submit" value="Place Order">
          </form></td>
        
      
      {/if}
      </tr>
    {else}
      <h3>Empty Cart</h3>
    {/if}
    
</table>
{/block}
