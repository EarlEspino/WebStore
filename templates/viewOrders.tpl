{extends file="layout.tpl"}

{block name="main"}
    <h2>Pending Orders</h2>
    
    <table>
        
        {if $order_info}
        
        <tr>
            <th>Order ID</th>
            <th>Time</th>
        </tr>
        {foreach $order_info as $info}
        <tr>
            <td><a href="orderDetails.php?order_id={$info->id}">{$info->id}</a></td>
            <td>{$helper->getDate($info->created_at)}</td>
        </tr>
        {/foreach}
        {else}
            <h3>You have no orders placed</h3>
        {/if}
          
    </table>
{/block}