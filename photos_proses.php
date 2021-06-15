<?php

require_once "inc/config.php";

$photos = new App\Photos();

if (isset($_POST['b_input'])) {
    $photos->input();
    header("location:index.php?page=photos_tampil");
}

if (isset($_POST['t_edit'])) {
    $photos->update();
    header("location:index.php ?page=photos_tampil");
}