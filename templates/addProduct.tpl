{extends file="layout.tpl"}

{block name="main"}
    <h2>Add a Product</h2>
    
    <h3 style="color:red">{$message}</h3>
    
    <form action="{$smarty.server.PHP_SELF}" method="post">
    <table>
        <tr>
            <td>Product Name: </td>
            <td><input type='text' name='name' /></td>
        </tr> 
        <tr>
            <td>Price: </td>
            <td>$<input type='text' name='price' /></td>
        </tr>
        <tr>
            <td>Category: </td>
            <td>
                <select name="category_id">
                    {html_options options=$categories selected=$category_id}
                </select>
            </td>
        </tr>
        <tr>
            <td>Description: </td>
            <td><textarea rows=35 cols=80 name="description"></textarea></td>
        </tr>
        <tr>
            <td>Image: </td>
            <td><input type='text' name='image' /></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" name="submit">Submit</button></td>  
        </tr>
        
        
    </table>
    </form>    
{/block}