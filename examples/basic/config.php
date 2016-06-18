<?php
/**
 * For Development Purposes
 */
ini_set("display_errors", "on");

require __DIR__ . "/../../src/class.logsys.php";
\Fr\LS::config(array(
  "db" => array(
    "host" => "localhost",
    "port" => 3306,
    "username" => "root",
    "password" => "backstreetboys",
    "name" => "test",
    "table" => "users"
  ),
  "features" => array(
    "auto_init" => true
  ),
  /**
   * These are my localhost paths, please change it to yours
   */
  "pages" => array(
    "no_login" => array(
      "/Francium/logSys/",
      "/Francium/logSys/examples/basic/reset.php",
      "/Francium/logSys/examples/basic/register.php"
    ),
    "login_page" => "/Francium/logSys/examples/basic/login.php",
    "home_page" => "/Francium/logSys/examples/basic/home.php"
  )
));
