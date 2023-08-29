<h2>CATEGORY EDIT</h2>

<form action="index.php?action=update&id=<?= $row['category_id']; ?>" method="post">
    <label for="name">Category name:</label><br>
    <input type="text" name="NAME" value="<?= $row['category_name']; ?>"> <br>

    <label for="name">Description:</label><br>
    <input type="text" name="DESCRIPTION" value="<?= $row['description']; ?>"> <br>

   
    <input type="submit" value="Update">
</form>