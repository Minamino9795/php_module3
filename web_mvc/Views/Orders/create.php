<?php

?>
<h2>ADD ORDER:</h2>
<form action="index.php?controller=order&action=store" method="post">
    <div>
        Customer_name:<br>
        <select name="customer_id" class="form-control" required>
            <?php foreach ($r as $row) : ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></option>
            <?php endforeach; ?>
        </select><br>
    </div>
    <div>
        Order_date: <br>
        <input type="date" name="order_date" required> <br>
    </div>
    <div>
        Total amount:<br>
        <input type="number" name="total_amount" required>VND <br>
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