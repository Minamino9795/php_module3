<?php
// echo '<br>'.__FILE__;

?>

<h2>Add product</h2>
<form action="index.php?action=store" method="post" enctype="multipart/form-data">
    <label for="name">Product_name:</label><br>
    <input type="text" name="product_name"> <br>
    <br>

    <label for="">Category_id:</label><br>
    <select name="category_id">
        <?php foreach ($categories as $row) : ?>
            <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label for="name">Price</label><br>
    <input type="number" name="price"> <br>
    <br>
    <label for="name">Quantity</label><br>
    <input type="number" name="quantity"> <br>
    <br>
    <label for="name">Image_url</label><br>
    <input type="file" name="image"> <br>
    <br>

    <input type="submit" value="Add">
</form>