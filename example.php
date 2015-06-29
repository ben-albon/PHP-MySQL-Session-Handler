<?php
require_once('PostgreSQLSessionHandler.php');
$sessionHandler = new PostgreSQLSessionHandler('db_host', 'db_user', 'db_passswd', 'db_name');

session_set_save_handler($sessionHandler);
register_shutdown_function('session_write_close');

session_start();
?>
