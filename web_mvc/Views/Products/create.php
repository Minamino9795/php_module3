<?php

?>
<h2>ADD PRODUCT:</h2>
<form action="index.php?controller=product&action=store" method="post" enctype="multipart/form-data">
    <div>
        Name: <br>
        <input type="text" name="product_name" required> <br>
    </div>
    <div>
        Category:<br>
        <select name="category_id" class="form-control" require>
            <?php foreach ($r as $row) : ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['category_name']; ?></option>
            <?php endforeach; ?>
        </select><br>
    </div>
    <div>
        Price:<br>
        <input type="number" name="price" required>VND<br>
    </div>
    <div>
        Quantity:<br>
        <input type="number" name="stock_quantity"required> SET<br>
    </div>
    <div>
    Image:<br>
    <input type="file" name="image_url" required> <br>
    <span class="file-name-display">No file selected</span>
    <br>
</div>

    <input type="submit" value="Add">
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
<script>
    // Thêm sự kiện cho input file
    document.querySelector('input[type="file"]').addEventListener('change', function () {
        const fileName = this.files[0].name;
        const fileNameDisplay = document.querySelector('.file-name-display');
        fileNameDisplay.textContent = fileName;
    });
</script>

