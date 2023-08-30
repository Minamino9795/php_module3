<?php

?>
<h2>ADD PRODUCT</h2>
<form action="index.php?action=store" method="post" enctype="multipart/form-data">
    <div>
        Name: <br>
        <input type="text" name="product_name"> <br>
    </div>
    <div>
        Category:<br>
        <select name="category_id" class="form-control">
            <?php foreach ($rows as $row) : ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
            <?php endforeach; ?>
        </select><br>
    </div>
    <div>
        Price:<br>
        <input type="number" name="price"> <br>
    </div>
    <div>
        Quantity:<br>
        <input type="number" name="stock_quantity"> <br>
    </div>
    <div>
        Image:<br>
        <input type="file" name="image_url"> <br>
        <br>
    </div>
    <input type="submit" value="Add">
</form>