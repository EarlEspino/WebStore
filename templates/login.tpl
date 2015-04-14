{extends file="layout.tpl"}

{block name="main"}
  <h2>Login</h2>
  <p>Please enter username and password.</p>
  <form action="validate.php" method="post" autocomplete="off">
      <table>
          <tr>
              <th>user:</th>
              <td><input type="text" name="username" autofocus="on"
              value="{$username|escape:'html'}"</td>
          </tr>
          <tr>
              <th>password:</th>
              <td><input type="text" name="password" /></td>
          </tr>
          <tr>
              <td></td>
              <td><button type='submit'>Access</button></td>
          </tr>
      </table>
  
          <h3>{$message}</h3>
</form>
{/block}