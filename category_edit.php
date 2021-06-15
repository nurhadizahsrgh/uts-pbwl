<?php

$category = new App\Category();

$id = $_GET['id'];

$row = $category->edit($id);

?>

<br>
<h2>Edit Category</h2>
<form action="category_proses.php" method="POST">
<input type="hidden" name="i_cat_id" value="<?php echo $id; ?>">
    <table>
        <tr>
            <td>CATEGORY NAME</td>
            <td><input type="text" name="i_cat_name" value="<?php echo $row['cat_name']; ?>"></td>
        </tr>

        <tr>
            <td>TEXT</td>
            <td><input type="text" name="i_cat_text" value="<?php echo $row['cat_text']; ?>"></td>
        </tr>

        <tr>
            <td</td>
            <td><input type="submit" name="t_edit" value="UPDATE"></td>
        </tr>
    </table>
</form>