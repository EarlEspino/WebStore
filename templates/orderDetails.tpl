{extends file="layout.tpl"}

{block name="localstyle"}
<style type="text/css">
.action {
  display: inline-block;
  margin: 10px 0;
  border: solid 1px black;
  padding: 15px;
}
.super {
  display: inline-block;
  margin: 10px 0;
  padding: 10px;
  border: solid 2px red;
}
.super form {
  display: inline-block;
  margin: 0 10px;
}
#message {
  color: red;
}
</style>
{/block}

{block name="main"}
    <h2>Order Details</h2>
    
    <table>
        <tr>
            <th>Product</th>
            <th>Unit Price</th>
            <th>Quantity</th>
        </tr>
        {foreach $orderproduct_info as $info}
            <tr>
                <td>{$helper->getProduct($info->product_id)->name}</td>
                <td>${number_format($helper->getProduct($info->product_id)->price,2)}</td>
                <td>{$info->quantity}</td>
    
            </tr>
                
        {/foreach}
        
        <tr><th>Total Paid: ${number_format($total,2)}</th></tr>
        
        
        {if $is_admin}
        <tr>
        <form action="processOrder.php" method="post">
            <th><input type='hidden' name='order_id' value="{$order_id}" />
            <input type='hidden' name='remove_sure' value="{$remove_sure}" />
            <div class='super'><button type="submit" name="process">Process</button></th></div>
        </form>
        </tr>
        {/if}
        
    </table>
        
    <h3 id="message">{$message}</h3>
{/block}