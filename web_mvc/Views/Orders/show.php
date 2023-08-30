    <?php
        // echo "<pre>";
        // echo print_r($row);
        // echo "</pre>";
        ?>

<h2>SEE DETAILS:</h2>

<table border="1">
    <tr>
        <th>Id</th>
        <th>First_name</th>
        <th>Last_name</th>
        <th>Email</th>
        <th>Order_date</th>
        <th>Total_amount</th>
    </tr>
    <tr>
       
        <td><?= $row['id'];?></td>
        <td><?= $row['first_name'];?></td>
        <td><?= $row['last_name'];?></td>
        <td><?= $row['email'];?></td>
        <td><?= $row['order_date'];?></td>
        <td><?= $row['total_amount'];?></td>
    
    </tr>
    
   
</table>