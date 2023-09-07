<H2>EDIT ORDER:</H2>
<form action="index.php?controller=order&action=update&id=<?= $r['id']; ?>" method="post" >
   
    <div>
        Customer:<br>
        <select name="customer_id" class="form-control" >
            <?php foreach ($row as $rows) : ?>
                <option value="<?php echo $rows['id']; ?>" <?php if ($rows['id'] == $r['customer_id']) echo "selected"; ?>><?php echo $rows['email']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        Order_date: <br>
        <input type="text" name="order_date" value="<?php echo $r['order_date']; ?>" required>
    </div>
    <div>
        Total_amount:<br>
        <input type="number" name="total_amount" value="<?php echo $r['total_amount']; ?>" required>
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