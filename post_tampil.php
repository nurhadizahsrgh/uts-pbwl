<br>
<?php
$post = new App\Post();

$rows = $post->tampil();

?>

<h2>Data Post</h2>

<a href="index.php?page=post_input">Tambah</a>
	<table>
		<tr>
            <th>NO</th>
			<th>DATE</th>
			<th>SLUG</th>
            <th>TITLE</th>
            <th>TEXT</th>
            <th>POST CATEGORY</th>
			<th>EDIT</th>
		</tr>

		<?php foreach ($rows as $row) { ?>

			<tr>
				<td><?php echo $row['post_id']; ?></td>
				<td><?php echo $row['post_date']; ?></td>
                <td><?php echo $row['slug']; ?></td>
                <td><?php echo $row['post_title']; ?></td>
                <td><?php echo $row['text_post']; ?></td>
                <td><?php echo $row['post_cat_id']; ?></td>
				<td><a href="index.php?page=post_edit&id=<?php echo $row['post_id']; ?>">Edit</a></td>
			</tr>

		<?php } ?>
	</table>