<?php

require_once "inc/config.php";

$post = new App\Post();

if (isset($_POST['b_input'])) {
    $post->input();
    header("location:index.php?page=post_tampil");
}

if (isset($_POST['t_edit'])) {
    $post->update();
    header("location:index.php ?page=post_tampil");
}