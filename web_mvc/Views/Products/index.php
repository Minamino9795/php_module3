<?php
// echo '<br>'.__FILE__;
?>
<a href="index.php?action=create"> Create </a>
<table border="1">
    <tr>
        
        <th>Product_id</th>
        <th>Product_name</th>
        <th>Category_id</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>ACTION</th>
    </tr>
    <!-- Bắt đầu lặp -->
    <?php
    foreach ($items as $r) :
        // echo '<pre>';
        // print_r($r);
        // die();
    ?>
        <tr>
            <td><?php echo $r['product_id']; ?> </td>
            <td><?php echo $r['product_name']; ?> </td>
            <td><?php echo $r['category_id']; ?> </td>
            <td><?php echo $r['price']; ?> </td>
            <td><?php echo $r['stock_quantity']; ?> </td>
            <td><img width="100" src="<?php echo 'http://localhost/web_mvc' . $r['image_url']; ?>" alt=""></td>
           
            <td>
                <a href="index.php?action=edit&id=<?php echo $r['product_id']; ?>">Edit</a> |
                <a href="index.php?action=show&id=<?php echo $r['product_id'];?>">Show</a> |
                <a onclick=" return confirm('Are you sure ?'); " href="index.php?action=destroy&id=<?php echo $r['product_id']; ?>">Delete</a>
            </td>
        </tr>
        <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
</table>