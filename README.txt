PHP PostgreSQL Session Handler
========================

Requirements
----------------------------
PHP >= 5.4

Reason for Forking (other than the obvious)
----------------------------
As of php 5.4, sprain's original  method of replacing the SessionHandler class is deprecated!
http://php.net/SessionHandler
Instead, we implement the SessionHandlerInterface, and override the individual methods
http://php.net/SessionHandlerInterface


Installation
----------------------------
Create the the session table in your database:

CREATE TABLE session (
    session_id varchar(255) NOT NULL,
    session_data text NOT NULL,
    timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (session_id)
    );

Include the following code to start your session (see example.php, or better yet: require_once('example.php'); so that you don't need to change database credentials in every php file if they ever change)

<?php
require_once('PostgreSQLSessionHandler.php');
// REPLACE WITH DATABASE CREDENTIALS
$sessionHandler = new PostgreSQLSessionHandler('db_host', 'db_user', 'db_passswd', 'db_name');

session_set_save_handler($sessionHandler);
register_shutdown_function('session_write_close');

session_start();
?>

