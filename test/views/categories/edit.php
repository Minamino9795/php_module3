<form action="index.php?action=update&id=<?= $row['id'];?>" method="post">
    TENHANG :<input type="text" name="TENHANG" value="<?= $row['name'];?>"> <br>
    MÔ TẢ: <input type="text" name="MOTA" value="<?= $row['description'];?>"> <br>
  
    <input type="submit" value="Cap nhat">
</form>