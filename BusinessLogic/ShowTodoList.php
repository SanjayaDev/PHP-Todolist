<?php 

/**
 * Show Todo List
 * 
 */
function show_todo_list()
{
  global $todo_list;

  echo "Todo List " . PHP_EOL;
  foreach ($todo_list as $number => $todo) {
    echo $number . " - " . $todo . PHP_EOL;
  }
}