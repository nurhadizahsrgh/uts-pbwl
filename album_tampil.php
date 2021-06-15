<br>
<?php
$album = new App\Album();

$rows = $album->tampil();

?>

<h2>Data Album</h2>

<a href="index.php?page=album_input">Tambah</a>
	<table>
		<tr>
            <th>NO</th>
			<th>ALBUM NAME</th>
            <th>TEXT</th>
            <th>ALBUM PHOTOS</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>

		<?php foreach ($rows as $row) { ?>

			<tr>
				<td><?php echo $row['album_id']; ?></td>
				<td><?php echo $row['album_name']; ?></td>
                <td><?php echo $row['album_text']; ?></td>
                <td><?php echo $row['album_photos_id']; ?></td>
				<td><a href="index.php?page=album_edit&id=<?php echo $row['album_id']; ?>">Edit</a></td>
				<td><a href="index.php?hapus=<?php echo $row['album_id']; ?>">Hapus</a></td>
			</tr>

		<?php } ?>
	</table>