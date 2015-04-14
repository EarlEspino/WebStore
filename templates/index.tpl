{extends file="layout.tpl"}

{block name="localstyle"}
<style type="text/css">
.price {
  text-align: right;
}
#form {
  margin: 15px 0;
}
#listing {
  margin-top: 15px;
}
</style>
{/block}

{block name="main"}
<h2>Products</h2>

<form action="{$smarty.server.PHP_SELF}" method="get">
<select name="category_id">
  {html_options options=$categories selected=$category_id}
</select>
<button type="submit" name="doit">Change category</button>
</form>

<table id="listing">
  <tr>
    <th><a href="?orderField=name">name</a></th>
    <th>category</th>
    <th class="price"><a href="?orderField=price">price</a></th>
  </tr>
  {foreach $products as $product}
  <tr>
    <td><a href="productInfo.php?product_id={$product->id}">{$product->name|escape: 'html'}</a></td>
    <td>{$product->category->name}</td>
    <td class="price">${number_format($product->price,2)}</td>
  </tr>
  {/foreach}
</table>
{/block}
