PHP PostgreSQL Session Handler
========================
WORK IN PROGRESS!

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
First you need to create a table in your database:

CREATE TABLE session_handler_table (
    session_id varchar(255) NOT NULL,
    session_data text NOT NULL,
    timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (session_id)
    );

Then see example.php
