<?php
require_once "include/session.php";
unset($session->user);
header( "location: ." );
