<?php 

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function view_add_todo_list()
{
  echo "Menambah todo " . PHP_EOL;

  $todo = input("Todo (x untuk batal) ");

  if ($todo == "x") {
    echo "Perintah dibatalkan!";
  } else {
    add_todo_list($todo);
  }
}