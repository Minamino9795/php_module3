<?php
// echo "<pre>";
// echo print_r($row);
?>
<h2>SEE DETAILS:</h2>

<table border="1">
    <tr>
        <th>Stt</th>
        <th>user_id</th>
        <th>Title</th>
        <th>content</th>
    </tr>
    <tr>
        <td><?= $row['id'];?></td>
        <td><?= $row['user_email'];?></td>
        <td><?= $row['title'];?></td>
        <td><?= $row['content'];?></td>
    </tr>
    
   
</table>