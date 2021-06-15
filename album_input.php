<?php

$photos = new App\Photos();
$rows =$photos->tampil();
?>

<br>
<h2>Tambah Data Album</h2>
<form action="album_proses.php" method="POST">
    <table>
        <tr>
            <td>ALBUM NAME</td>
            <td><input type="date" name="i_album_name"></td>
        </tr>

        <tr>
            <td>TEXT</td>
            <td><input type="text" name="i_album_text"></td>
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
            <td></td>
            <td><input type="submit" name="b_input" value="SIMPAN"></td>
        </tr>
    </table>
</form>