<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function view_remove_todo_list()
{
  echo "Menghapus Todo " . PHP_EOL;

  $pilihan = input("Nomor (x untuk batal) ");
  
  if ($pilihan == "x") {
    echo "Batal menghapus todo!" . PHP_EOL;
  } else {
    $success = remove_todo_list($pilihan);
    
    if ($success) {
      echo "Sukses menghapus todolist!" . PHP_EOL;
    } else {
      echo "Gagal menghapus todolist nomor $pilihan!" . PHP_EOL;
    }
  }
}