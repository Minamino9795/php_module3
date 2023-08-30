<?php

?>
<h2>ADD PRODUCT</h2>
<form action="index.php?action=store" method="post">
    <div>
        Customer_name:<br>
        <select name="customer_id" class="form-control">
            <?php foreach ($rows as $row) : ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></option>
            <?php endforeach; ?>
        </select><br>
    </div>
    <div>
        Order_date: <br>
        <input type="date" name="order_date"> <br>
    </div>
    <div>
        Total amount:<br>
        <input type="number" name="total_amount"> <br>
    </div>
    

    <input type="submit" value="Add">
</form>