<?php
// echo '<br>'.__FILE__;
?>
<a href="index.php?action=create"> Create </a>
<table border="1">
    <tr>
        
        <th>Id</th>
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
            <td><?php echo $r['id']; ?> </td>
            <td><?php echo $r['product_name']; ?> </td>
            <td><?php echo $r['category_name']; ?> </td>
            <td><?php echo $r['price']; ?> </td>
            <td><?php echo $r['stock_quantity']; ?> </td>
            <td><img width="100" src="<?php echo ROOT_URL . $r['image_url']; ?>" alt=""></td>
           
            <td>
            <a href="index.php?action=edit&id=<?php echo $r['id']; ?>">
                    <button type="button" class="btn btn-primary">Edit</button> |
                    <a href="index.php?action=show&id=<?php echo $r['id']; ?>">
                        <button type="button" class="btn btn-success">Show</button> |
                        <a onclick=" return confirm('Are you sure ?'); " href="index.php?action=destroy&id=<?php echo $r['id']; ?>">
                            <button type="button" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <!-- Kết thúc vòng lặp -->
    <?php endforeach; ?>
</table>