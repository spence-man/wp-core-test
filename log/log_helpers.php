<?php

function log_print() {
  $open_log  = "";
  $open_log  = str_repeat("==========",10) . "\n";
  $open_log .= "[" . date('d-M-Y H:i:s e') . "]" . ": \n"; 
  $open_log .= "Logged OPENED from the " . realpath("wp-config.php") . " file \n";
  $open_log .= "Logged OPENED from the " . getcwd() . " directory \n";
  $open_log .= "Logged OPENED from the " . $_SERVER['SCRIPT_FILENAME'] . " server path \n";
  $open_log .= str_repeat("==========",10) . "\n";
  error_log($open_log, 3, __DIR__ . "/../public/wp-content/debug.log");
}

function log_is_closed() {
  $close_log  = "";
  $close_log  = str_repeat("==========",10) . "\n";
  $close_log .= "[" . date('d-M-Y H:i:s e') . "]" . ": \n"; 
  $close_log .= "Logged CLOSED from the " . realpath("wp-config.php") . " file \n";
  $close_log .= str_repeat("==========",10) . "\n";
  error_log($close_log, 3, __DIR__ . "/../public/wp-content/debug.log");
}

?>
