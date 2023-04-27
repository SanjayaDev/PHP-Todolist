<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

add_todo_list("Mohammad");
add_todo_list("Ricky");
add_todo_list("Sanjaya");

var_dump($todo_list);