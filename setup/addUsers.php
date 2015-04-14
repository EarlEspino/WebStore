<?php
chdir(__DIR__);
require_once "../include/db.php";

echo "\n------------- ", DBProps::which, "\n\n";

// name, email, password, for simplicity password = name
$user_data = [
    array("john", "arachnid@oracle.com", "john"),
    array("kirsten", "buffalo@go.com", "kirsten"),
    array("bill", "digger@gmail.com", "bill"),
    array("mary", "elephant@wcupa.edu", "mary"),
    array("joan", "kangaroo@upenn.edu", "joan"),
    array("alice", "feline@yahoo.com", "alice"),
    array("carla", "badger@esu.edu", "carla"),
    array("dave", "warthog@temple.edu", "dave"),
];

R::begin();  // begin transaction

foreach ($user_data as $data) {
  list($username, $email, $password) = $data;
  $user = R::dispense('user');
  $user->name = $username;
  $user->email = $email;
  $user->password = hash('sha256', $password);
  try {
    $id = R::store($user);
    echo "#$id: $username\n";
  }
  catch (Exception $ex) {
    echo $ex->getMessage(), "\n";
  }
}

// Admins: choose a few selected ones
echo "\n";
foreach (['dave', 'carla'] as $name) {
  $user = R::findOne('user', 'name = ?', [$name]);
  $user->is_admin = true;
  R::store($user);
  echo "admin: $name\n";
}

R::commit(); // commit transaction
