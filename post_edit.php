<?php

$post = new App\Post();

$id = $_GET['id'];

$row = $post->edit($id);

?>

<br>
<h2>Edit Post</h2>
<form action="post_proses.php" method="POST">
<input type="hidden" name="i_post_id" value="<?php echo $id; ?>">
    <table>
        <tr>
            <td>POST DATE</td>
            <td><input type="date" name="i_post_date" value="<?php echo $row['post_date']; ?>"></td>
        </tr>

        <tr>
            <td>SLUG</td>
            <td><input type="text" name="i_slug" value="<?php echo $row['slug']; ?>"></td>
        </tr>

        <tr>
            <td>POST TITLE</td>
            <td><input type="text" name="i_post_title" value="<?php echo $row['post_title']; ?>"></td>
        </tr>

        <tr>
            <td>POST TEXT</td>
            <td><input type="text" name="i_text_post" value="<?php echo $row['text_post']; ?>"></td>
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
            <td</td>
            <td><input type="submit" name="t_edit" value="UPDATE"></td>
        </tr>
    </table>
</form>