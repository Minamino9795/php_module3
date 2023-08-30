<?php
// echo '<br>'.__FILE__;
?>
<h2>ADD CATEGORY</h2>
<form action="index.php?action=store" method="post">
<label for="name">Category name:</label><br>
    <input type="text" name="NAME"> <br>
    <br>
<label for="name">Description:</label><br>
     <input type="text" name="DESCRIPTION"> <br>
    <br>
    <input type="submit" value="Add">
</form>