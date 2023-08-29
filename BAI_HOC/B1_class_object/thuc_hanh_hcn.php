<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])) {
    $width = $_GET['width'];
    $height = $_GET['height'];
    $action = $_GET['action'];

    $rect = new Rectangle($width, $height);

    if ($action === 'perimeter') {
        $result = "Perimeter: " . $rect->getPerimeter();
    } else {
        $result = "Area: " . $rect->getArea();
    }
}

class Rectangle
{

    function __construct(
        public int $width = 0,
        public int $height = 0
    ) {
    }

    // tinh dien tich
    function getArea(): int
    {
        return $this->width * $this->height;
    }

    //tinh chu vi
    function getPerimeter(): int
    {
        return (($this->width + $this->height) * 2);
    }

    function display(): string
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="GET">
        <label>Width:
            <input type="number" name="width" value="<?php echo $width ?? 0 ?>">
        </label>
        <label>Height:
            <input type="number" name="height" value="<?php echo $height ?? 0  ?>">
        </label>
        <select name="action" id="">
            <option <?php if (isset($action) && $action == 'perimeter') :  ?> selected <?php endif; ?> value="perimeter">Perimeter</option>
            <option <?php if (isset($action) && $action == 'area') :  ?> selected <?php endif; ?> value="area">Area</option>
        </select>
        <button type="submit">Result</button>
    </form>
    <?php
    if (isset($result)) {
        echo $result;
    }
    ?>
</body>

</html>