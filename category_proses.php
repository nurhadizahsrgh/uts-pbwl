<?php

require_once "inc/config.php";

$category = new App\Category();

if (isset($_POST['b_input'])) {
    $category->input();
    header("location:index.php?page=category_tampil");
}

if (isset($_POST['t_edit'])) {
    $category->update();
    header("location:index.php ?page=category_tampil");
}