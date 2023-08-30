<form action="index.php?action=update&id=<?= $r['id']; ?>" method="post" >
   
    <div>
        Customer:<br>
        <select name="customer_id" class="form-control">
            <?php foreach ($rows as $row) : ?>
                <option value="<?php echo $row['id']; ?>" <?php if ($row['id'] == $r['customer_id']) echo "selected"; ?>><?php echo $row['email']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        Order_date: <br>
        <input type="text" name="order_date" value="<?php echo $r['order_date']; ?>">
    </div>
    <div>
        Total_amount:<br>
        <input type="number" name="total_amount" value="<?php echo $r['total_amount']; ?>">
    </div>
   
   
    <input type="submit" value="Update">
</form>