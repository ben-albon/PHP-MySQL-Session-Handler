PHP PostgreSQL Session Handler
========================

AS OF php5.4, this method of overriding SessionHandler is deprecated!
http://php.net/SessionHandler
Please use a PHP extension instead.

WORK IN PROGRESS!

Installation
----------------------------

First you need to create a table in your database:

CREATE TABLE session_handler_table (
    id varchar(255) NOT NULL,
    data text NOT NULL,
    timestamp int NOT NULL,
    PRIMARY KEY (id)
    );
