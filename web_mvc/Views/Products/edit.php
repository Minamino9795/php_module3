<form action="index.php?action=update&id=<?= $r['id']; ?>" method="post" enctype="multipart/form-data">
    <div>
        Name: <br>
        <input type="text" name="product_name" value="<?php echo $r['product_name']; ?>">
    </div>
    <div>
        Category:<br>
        <select name="category_id" class="form-control">
            <?php foreach ($categories as $categorie) : ?>
                <option value="<?php echo $categorie['id']; ?>" <?php if ($categorie['id'] == $r['category_id']) echo "selected"; ?>><?php echo $categorie['category_name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        Price:<br>
        <input type="number" name="price" value="<?php echo $r['price']; ?>">
    </div>
    <div>
        Quantity:<br>
        <input type="number" name="stock_quantity" value="<?php echo $r['stock_quantity']; ?>">
    </div>
    <div>
        Image:<br>
        <input type="file" name="image_url"> <br>
        <?php if (!empty($r['image_url'])) : ?>
            <img src="<?= 'http://localhost/web_mvc/' . htmlspecialchars($r['image_url']); ?>" alt="<?= htmlspecialchars($r['id']); ?>" style="max-width: 200px;">
        <?php endif; ?>
        <br>
    </div>
    <input type="submit" value="Update">
</form>