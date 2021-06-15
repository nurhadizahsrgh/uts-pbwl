<br>
<?php
$photos = new App\Photos();

$rows = $photos->tampil();

?>

<h2>Data Photos</h2>

<a href="index.php?page=photos_input">Tambah</a>
	<table>
		<tr>
            <th>NO</th>
			<th>DATE</th>
            <th>TITLE</th>
            <th>TEXT</th>
            <th>POST PHOTOS</th>
			<th>EDIT</th>
		</tr>

		<?php foreach ($rows as $row) { ?>

			<tr>
				<td><?php echo $row['photos_id']; ?></td>
				<td><?php echo $row['photos_dates']; ?></td>
                <td><?php echo $row['photos_title']; ?></td>
                <td><?php echo $row['photos_text']; ?></td>
                <td><?php echo $row['photos_post_id']; ?></td>
				<td><a href="index.php?page=photos_edit&id=<?php echo $row['photos_id']; ?>">Edit</a></td>
			</tr>

		<?php } ?>
	</table>