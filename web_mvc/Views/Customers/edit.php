<?php
// echo '<br>'.__FILE__;
?>
<h2>CUSTOMER EDIT</h2>
<form action="index.php?action=update&id=<?= $row['id']; ?>" method="post">
<label for="name">First_name:</label><br>
    <input type="text" name="first_name" value="<?= $row['first_name']; ?>"> <br>
    <br>
    <label for="name">Last_name:</label><br>
    <input type="text" name="last_name" value="<?= $row['last_name']; ?>"> <br>
    <br>
    <label for="name">Email:</label><br>
    <input type="email" name="email" value="<?= $row['email']; ?>"> <br>
    <br>
<label for="name">Phone number:</label><br>
     <input type="number" name="phone_number" value="<?= $row['phone_number']; ?>"> <br>
    <br>
    <label for="name">Address:</label><br>
    <input type="text" name="address" value="<?= $row['address']; ?>"> <br>
    <br>
    <input type="submit" value="Add">
</form>