<?php

?>
<form action="index.php?action=store" method="post">
    user_id :
    <select name="user_id" class="form-control">
                                    <?php foreach ($users as $user) : ?>
                                        <option value="<?php echo $user['id']; ?>" <?php if ($user['id'] == $r['user_id']) echo "selected"; ?>><?php echo $user['email']; ?></option>
                                    <?php endforeach; ?>
                                </select>
    title: <input type="text" name="title" value="<?php echo $r['title']; ?>">
    content: <input type="text" name="content" value="<?php echo $r['content']; ?>">
   
    <input type="submit" value="sua">
</form>