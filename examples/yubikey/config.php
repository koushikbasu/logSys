<?php
/**
 * For Development Purposes
 */
ini_set("display_errors", "on");

require __DIR__ . "/../class.logsys.php";
\Fr\LS::config(array(
  "db" => array(
    "host" => "localhost",
    "port" => 3306,
    "username" => "toto",
    "password" => "toto123",
    "name" => "project",
    "table" => "users"
  ),
  "yubi" => array(
    "clientid" => "28364",
    "secret" => "BvMBBDf/jZDmpMetO9JgM6BG1W0="
  ),
  "features" => array(
    "auto_init" => true,
    "remember_me" => false
  ),
  /**
   * These are my localhost paths, please change it to yours
   */
  "pages" => array(
    "no_login" => array(
      "/",
      "/Francium/logSys/examples/yubikey/reset.php",
      "/Francium/logSys/examples/yubikey/register.php",
      "/Francium/logSys/examples/yubikey/register_key.php"
    ),
    "login_page" => "/Francium/logSys/examples/yubikey/login.php",
    "home_page" => "/Francium/logSys/examples/yubikey/home.php"
  )
));
