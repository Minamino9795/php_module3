<h2>EDIT PRODUCT:</h2>
<form action="index.php?controller=product&action=update&id=<?= $r['id']; ?>" method="post" enctype="multipart/form-data">
    <div>
        Name: <br>
        <input type="text" name="product_name" value="<?php echo $r['product_name']; ?>" required>
    </div>
    <div>
        Category:<br>
        <select name="category_id" class="form-control">
            <?php foreach ($rows as $categorie) : ?>
                <option value="<?php echo $categorie['id']; ?>" <?php if ($categorie['id'] == $r['category_id']) echo "selected"; ?>><?php echo $categorie['category_name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        Price:<br>
        <input type="number" name="price" value="<?php echo $r['price']; ?>" required>
    </div>
    <div>
        Quantity:<br>
        <input type="number" name="stock_quantity" value="<?php echo $r['stock_quantity']; ?>"required>
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
<style>
   
    /* Style cho form */
form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    font-weight: bolder;
}

/* Style cho input và select */
input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
}

/* Style cho input file */
input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    outline: none;
}

/* Style cho nút submit */
input[type="submit"] {
    background-color: green;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

</style>
