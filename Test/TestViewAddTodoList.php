<?php 

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

add_todo_list("Mohammad");
add_todo_list("Ricky");
add_todo_list("Sanjaya");

view_add_todo_list();

show_todo_list();

view_add_todo_list();

show_todo_list();