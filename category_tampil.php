<br>
<?php
$category = new App\Category();

$rows = $category->tampil();

?>

<h2>Data Kategori</h2>

<a href="index.php?page=category_input">Tambah</a>
	<table>
		<tr>
            <th>NO</th>
			<th>CATEGORY NAME</th>
			<th>TEXT</th>
			<th>EDIT</th>
		</tr>

		<?php foreach ($rows as $row) { ?>

			<tr>
				<td><?php echo $row['cat_id']; ?></td>
				<td><?php echo $row['cat_name']; ?></td>
				<td><?php echo $row['cat_text']; ?></td>
				<td><a href="index.php?page=category_edit&id=<?php echo $row['cat_id']; ?>">Edit</a></td>
			</tr>

		<?php } ?>
	</table>