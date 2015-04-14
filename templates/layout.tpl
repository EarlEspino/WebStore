<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, 
          maximum-scale=1.0, minimum-scale=1.0, user-scalable=0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>
      {$page_title|default: basename(dirname($smarty.server.PHP_SELF))}
    </title>
    <link rel="stylesheet" type="text/css" href="css/superfish.css" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" />
    <link rel="stylesheet" type="text/css" href="css/table-display.css" />
    {block name="localstyle"}{/block}
</head>
{load_session}
<body>
  <div id="container">
    <header>
      <img src="img/header.png" />
      <span class="caption">{$session->user->name|default}</span>
    </header>
    <nav>
      <ul class="sf-menu nav_h">
        {include file="links.tpl"}
      </ul>
      <ul class="sf-menu nav_v">
        <li>
          <a href="#" id="vMenuHeader" class="no-action">
            <img src="img/hamburger.png" />
          </a>
          <ul>
            {include file="links.tpl"}
          </ul>
        </li>
      </ul>
    </nav>
    <main>
      {block name="main"}{/block}
    </main>
  </div><!-- #container -->
<script type="text/javascript">window.onunload = function(){}</script>
</body>
</html>
