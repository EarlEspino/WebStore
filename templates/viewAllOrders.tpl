{extends file="layout.tpl"}

{block name="main"}
    <h2>All Orders</h2>
    <h3>Click an Order ID to process order</h3>
    <table>
        <tr>
            <th>Order ID</th>
            <th>Time</th>
            <th>Username</th>
            <th>User Email</th>
        </tr>
        
        {foreach $order_info as $info}
            <tr>
                <td><a href="orderDetails.php?order_id={$info->id}">{$info->id}</a></td>
                <td>{$helper->getDate($info->created_at)}</td>
                <td>{$helper->getUser($info->user_id)->name}</td>
                <td>{$helper->getUser($info->user_id)->email}</td>
            </tr>
        {/foreach}
    </table>
{/block}