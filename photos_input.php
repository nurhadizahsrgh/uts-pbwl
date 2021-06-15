<?php

$post = new App\Post();
$rows = $post->tampil();

?>

<br>
<h2>Tambah Data Photos</h2>
<form action="photos_proses.php" method="POST">
    <table>
        <tr>
            <td>PHOTOS DATE</td>
            <td><input type="date" name="i_photos_date"></td>
        </tr>

        <tr>
            <td>PHOTOS TITLE</td>
            <td><input type="text" name="i_photos_title"></td>
        </tr>

        <tr>
            <td>PHOTOS TEXT</td>
            <td><input type="text" name="i_photos_text"></td>
        </tr>

        <tr>
            <td>POST PHOTOS</td>
            <td>
            <select name="i_photos_post_id">
            <?php foreach ($rows as $row) { ?>
                    <option value="post_id"><?php echo $row['post_id']; ?></option>
                    <?php } ?>
            </select>
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="b_input" value="SIMPAN"></td>
        </tr>
    </table>
</form>