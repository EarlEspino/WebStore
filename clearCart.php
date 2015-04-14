<?php
require_once "include/session.php";
unset($session->cart);
header("location: cart.php");