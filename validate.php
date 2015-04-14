<?php
require_once "include/session.php";
require_once "include/db.php";

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

$username = trim($username);  // must be trimmed before using
$user = R::findOne("user", "name=?", [$username]);

if (!isset($user)) {
  $session->username = $username;
  $session->message = "Authentication Failed (username)";
  header( "location: login.php" );
}
elseif (hash('sha256', $password) === $user->password) { // OK
  $session->user = (object) [
      'id' => $user->id,
      'name' => $user->name,
      'is_admin' => $user->is_admin,
  ];
  header( "location: ." );
}
else {
  $session->username = $username;
  $session->message = "Authentication Failed (password)";
  header( "location: login.php" );
}
