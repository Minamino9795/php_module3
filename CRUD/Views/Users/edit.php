<?php

?>
<form action="index.php?action=update&id=<?= $row['id']; ?>" method="post" enctype="multipart/form-data">
    ten :<input type="text" name="name" value="<?= $row['name']; ?>"> <br>
    email: <input type="email" name="email" value="<?= $row['email']; ?>"> <br>
    password: <input type="text" name="password" value="<?= $row['password']; ?>"> <br>
    image: <input type="file" name="image"> <br>
    <?php if (!empty($row['image'])) : ?>
            <img src="<?= 'http://localhost/CRUD' . htmlspecialchars($row['image']); ?>" alt="<?= htmlspecialchars($row['id']); ?>" style="max-width: 200px;">
        <?php endif; ?>
       
    phone: <input type="number" name="phone" value="<?= $row['phone']; ?>"> <br>

    <input type="submit" value="sua">
</form>