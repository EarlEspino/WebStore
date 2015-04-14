{extends file="layout.tpl"}

{block name="main"}
    <h2>Modify Product</h2>
    
    <h3 style="color:red">{$message}</h3>
    
    <form action="{$smarty.server.PHP_SELF}" method="post">
    <table>
        <tr>
            <td>ID: </td>
            <td>{$product->id}</td>
        </tr>
        <tr>
            <td>Product Name: </td>
            <td>{$product->name}</td>
        </tr> 
        <tr>
            <td>Category: </td>
            <td>{$category_name}</td>
        </tr>
        <form action="{$smarty.server.PHP_SELF}" method="post">
        <tr>
            <td>Price: </td>
            <td>$<input type='text' name='price' value="{$product->price}"/></td>
        </tr>
        <tr>
            <td>Description: </td>
            <td><textarea rows=35 cols=80 name="description" value="{($product->description)}"></textarea></td>
        </tr>
        <tr>
            <td>Image: </td>
            <td><input type='text' name='image' value="{$product->image}" /></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="submit">Submit</button></td>  
        </tr>
        
        
    </table>
    </form>    
{/block}