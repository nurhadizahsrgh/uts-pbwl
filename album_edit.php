<?php

$album = new App\Album();

$id = $_GET['id'];

$row = $album->edit($id);

?>

<br>
<h2>Edit Album</h2>
<form action="album_proses.php" method="POST">
<input type="hidden" name="i_album_id" value="<?php echo $id; ?>">
    <table>
    <tr>

        <tr>
            <td>ALBUM NAME</td>
            <td><input type="text" name="i_album_name" value="<?php echo $row['album_name']; ?>"></td>
        </tr>

        <tr>
            <td>TEXT</td>
            <td><input type="text" name="i_album_text" value="<?php echo $row['album_text']; ?>"></td>
        </tr>

        <tr>
            <td>ALBUM PHOTOS</td>
            <td>
            <select name="i_album_photos_id">
            <?php foreach ($rows as $row) { ?>
                    <option value="photos_id"><?php echo $row['photos_id']; ?></option>
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