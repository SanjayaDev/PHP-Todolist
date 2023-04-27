<?php 

/**
 * Add todo list
 */
function add_todo_list(string $todo)
{
  global $todo_list;
  $number = sizeof($todo_list) + 1;

  $todo_list[$number] = $todo;
}