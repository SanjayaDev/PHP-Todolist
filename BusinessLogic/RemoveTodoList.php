<?php 

/**
 * Remove todo list
 */
function remove_todo_list(int $number) : bool
{
  global $todo_list;

  if ($number > sizeof($todo_list)) {
    return FALSE;
  }

  for ($i = $number; $i < sizeof($todo_list); $i++) {
    $todo_list[$i] = $todo_list[$i + 1];
  }

  unset($todo_list[sizeof($todo_list)]);
  return TRUE;
}