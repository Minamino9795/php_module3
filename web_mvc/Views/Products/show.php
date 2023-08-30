<h2>SEE DETAILS:</h2>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Product_name</th>
        <th>category</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
    </tr>
    <tr>
        <td><?= $row['id'];?></td>
        <td><?= $row['product_name'];?></td>
        <td><?= $row['category_name'];?></td>
        <td><?= $row['price'];?></td>
        <td><?= $row['stock_quantity'];?></td>
        <td><img width="100" src="<?php echo ROOT_URL . $row['image_url']; ?>" alt=""></td>
    </tr>
    
   
</table>