<?php 

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function view_show_todo_list()
{ 
  while (true) {
    show_todo_list();

    echo "MENU " . PHP_EOL;
    echo "1. Tambah Todolist " . PHP_EOL;
    echo "2. Hapus Todolist " . PHP_EOL;
    echo "X. keluar App " . PHP_EOL;
  
    $pilihan = input("Pilih");

    if ($pilihan == 1) {
      view_add_todo_list();
    } else if ($pilihan == 2) {
      view_remove_todo_list();
    } else if ($pilihan == "x") {
      break;
    } else {
      echo "Pilihan tidak ditemukan!" . PHP_EOL;
    }
  }

  echo "Sampai jumpa lagi!" . PHP_EOL;
}