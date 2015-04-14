<?php
chdir(__DIR__);
require_once '../include/db.php';

echo "\n------------- ", DBProps::which, "\n\n";

foreach (['user', 'category', 'product', 'order', 'orderproduct'] as $table) {
  $sql = "drop table if exists `$table`";
  echo "$sql\n";
  R::exec($sql);

  $filename = sprintf("%s-%s.sql", $table, DBProps::which);
  $sql = file_get_contents("tables/$filename");
  echo "$sql\n";
  R::exec($sql);
}
