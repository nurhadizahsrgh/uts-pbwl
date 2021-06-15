<?php

$category = new App\Category();
$rows = $category->tampil();

?>

<br>
<h2>Tambah Data Post</h2>
<form action="post_proses.php" method="POST">
    <table>
        <tr>
            <td>POST DATE</td>
            <td><input type="date" name="i_post_date"></td>
        </tr>

        <tr>
            <td>SLUG</td>
            <td><input type="text" name="i_slug"></td>
        </tr>

        <tr>
            <td>POST TITLE</td>
            <td><input type="text" name="i_post_title"></td>
        </tr>

        <tr>
            <td>POST TEXT</td>
            <td><input type="text" name="i_text_post"></td>
        </tr>

        <tr>
            <td>POST CATEGORY</td>
            <td>
            <select name="i_post_cat_id">
            <?php foreach ($rows as $row) { ?>
                    <option value="cat_id"><?php echo $row['cat_name']; ?></option>
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