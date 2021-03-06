<?php

use Caetsu\Core\App;
use Caetsu\Core\Database\Connection;
use Caetsu\Core\Database\QueryBuilder;
/**
 * This file is responsible to wrapp and init dependecies
 * 
 * @author Ricardo Lapa (ricardo.j.lapa@gmail.com)
 */

App::bind("config", require "config.php");

App::bind("database", new QueryBuilder(
    Connection::make(App::get('config')["database"])
));
