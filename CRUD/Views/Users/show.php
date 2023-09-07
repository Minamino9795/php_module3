<?php
// echo "<pre>";
// echo print_r($row);
?>
<h2>SEE DETAILS:</h2>

<table border="1">
    <tr>
        <th>Stt</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>image</th>
        <th>phone</th>
    </tr>
    <tr>
        <td><?= $row['id'];?></td>
        <td><?= $row['name'];?></td>
        <td><?= $row['email'];?></td>
        <td><?= $row['password'];?></td>
        <td><?= $row['image'];?></td>
        <td><?= $row['phone'];?></td>
    </tr>
    
   
</table>