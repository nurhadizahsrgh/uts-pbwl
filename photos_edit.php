<?php

$photos = new App\Photos();

$id = $_GET['id'];

$row = $photos->edit($id);

?>

<br>
<h2>Edit Photos</h2>
<form action="photos_proses.php" method="POST">
<input type="hidden" name="i_photos_id" value="<?php echo $id; ?>">
    <table>
    <tr>
            <td>PHOTOS DATE</td>
            <td><input type="date" name="i_photos_date" value="<?php echo $row['photos_date']; ?>"></td>
        </tr>

        <tr>
            <td>PHOTOS TITLE</td>
            <td><input type="text" name="i_photos_title" value="<?php echo $row['photos_title']; ?>"></td>
        </tr>

        <tr>
            <td>PHOTOS TEXT</td>
            <td><input type="text" name="i_photos_text" value="<?php echo $row['photos_text']; ?>"></td>
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
            <td</td>
            <td><input type="submit" name="t_edit" value="UPDATE"></td>
        </tr>
    </table>
</form>