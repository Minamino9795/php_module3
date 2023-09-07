<?php
// echo '<br>'.__FILE__;
?>
<h2>ADD CUSTOMER:</h2>
<form action="index.php?controller=customer&action=store" method="post">
<label for="name">First_name:</label><br>
    <input type="text" name="first_name" required > <br>
    <br>
    <label for="name">Last_name:</label><br>
    <input type="text" name="last_name" required> <br>
    <br>
    <label for="name">Email:</label><br>
    <input type="email" name="email" required> <br>
    <br>
<label for="name">Phone number:</label><br>
     <input type="number" name="phone_number" required> <br>
    <br>
    <label for="name">Address:</label><br>
    <input type="text" name="address" required> <br>
    <br>
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