{extends file="layout.tpl"}

{block name="localstyle"}
<style type="text/css">
.cell {
  display: inline-block;
  vertical-align: top;
}
#quantity {
  background: #eee;
  margin: 10px 0;
  border: solid 1px red;
  padding: 5px 10px;
}
#product-content img {
  max-width:200px;
  float: right;
  margin: 0 0 10px 10px;
  
}
#descrip1 {
  max-width:300px;
  border-bottom: solid 1px black;
}
#after-product-content {
  clear: right;
  border-top: solid 1px black;
}
</style>
{/block}

{block name="main"}

  <h3>{$product->name|escape: 'html'}</h3>

  <div>
    Price: ${number_format($product->price,2)}
    <br />
    
    <h4 style = "color:red">{$message}</h4>
    
    <form id="quantity" class="cell"  
          action="productInfo.php?product_id={$product->id}" 
          method="post">
        <table>
            <tr>
                <td>Quantity</td>
                <td>Enter "0" to remove from Cart</td>
            </tr>
            <tr>
                <td><input type="text" name='quantityText'></td>
                <td><button type="submit" name="change">Update</button></td>
            </tr>
        </table>
    </form>
  </div>

  <div id="product-content">
    {if $product->image}
    <img src="img/products/{$product->image}" />
    {/if}

   {$product->description}
  </div>

  <div id="after-product-content">
      {if $is_admin}
      <form action="modifyProduct.php" method="post">
          <input type="hidden" name ="product_id" value="{$product->id}" />
          <input type="submit" name="modify" value="Modify" />
      </form>
          {/if}
  </div>

{/block}
