<?php 

require_once "../Model/Todolist.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

add_todo_list("Mohammad");
add_todo_list("Ricky");
add_todo_list("Sanjaya");

show_todo_list();

view_remove_todo_list();

show_todo_list();