<?php

?>
<form action="index.php?action=store" method="post">
    user_id :
    <select name="user_id" class="form-control">
                                    <?php foreach ($rows as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['email']; ?></option>
                                    <?php endforeach; ?>
                                </select><br>
    title: <input type="text" name="title"> <br>
    content: <input type="text" name="content"> <br>
   
    <input type="submit" value="Them">
</form>     