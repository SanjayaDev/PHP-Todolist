<?php 

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

add_todo_list("Mohammad");
add_todo_list("Ricky");
add_todo_list("Sanjaya");

show_todo_list();

remove_todo_list(2);

show_todo_list();