<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <?php
    if($person){
        foreach($person as $person){
            echo "tên: " . $person->name . "\n";
            echo "tuổi: " . $person->age ."\n";
            echo "địa chỉ: " . $person->address ."\n";
            echo "<hr>";
        }
    }
    ?>
</body>
</html>