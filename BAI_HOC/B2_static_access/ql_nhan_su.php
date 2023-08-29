<?php
class Employee
{
    public string $lastName;
    public string $firstName;
    public string $birthDate;
    public string $address;
    public string $position;

    public function __construct($lastName, $firstName, $birthDate, $address, $position)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->birthDate = $birthDate;
        $this->address = $address;
        $this->position = $position;
    }
}

class EmployeeManager
{
    private static array $employees = [];

    public static function addEmployee(Employee $employee)
    {
        self::$employees[] = $employee;
    }

    public static function getEmployees()
    {
        return self::$employees;
    }

    public static function getEmployeeById($id)
    {
        return isset(self::$employees[$id]) ? self::$employees[$id] : null;
    }

    public static function deleteEmployee($id)
    {
        if (isset(self::$employees[$id])) {
            unset(self::$employees[$id]);
        }
    }

    public static function updateEmployee($id, Employee $employee)
    {
        if (isset(self::$employees[$id])) {
            self::$employees[$id] = $employee;
        }
    }
}

// Thêm form xử lý
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add"])) {
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $birthDate = $_POST["birthDate"];
        $address = $_POST["address"];
        $position = $_POST["position"];

        $newEmployee = new Employee($lastName, $firstName, $birthDate, $address, $position);
        EmployeeManager::addEmployee($newEmployee);
    }

    if (isset($_POST["update"])) {
        $updateId = $_POST["updateId"];
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $birthDate = $_POST["birthDate"];
        $address = $_POST["address"];
        $position = $_POST["position"];

        $updatedEmployee = new Employee($lastName, $firstName, $birthDate, $address, $position);
        EmployeeManager::updateEmployee($updateId, $updatedEmployee);
    }

    if (isset($_POST["delete"])) {
        $deleteId = $_POST["deleteId"];
        EmployeeManager::deleteEmployee($deleteId);
    }
}

// Hiển thị danh sách nhân sự
$employees = EmployeeManager::getEmployees();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
</head>

<body>
    <h1>Employee Management</h1>

    <!-- Form thêm nhân sự -->
    <h2>Add Employee</h2>
    <form action="" method="POST">
        <label>Last Name: <input type="text" name="lastName" required></label><br>
        <label>First Name: <input type="text" name="firstName" required></label><br>
        <label>Birth Date: <input type="text" name="birthDate" required></label><br>
        <label>Address: <input type="text" name="address" required></label><br>
        <label>Position: <input type="text" name="position" required></label><br>
        <button type="submit" name="add">Add Employee</button>
    </form>

    <!-- Danh sách nhân sự -->
    <h2>Employee List</h2>
    <ul>
        <?php foreach ($employees as $id => $employee) : ?>
            <li>
                Employee ID: <?php echo $id; ?><br>
                Name: <?php echo $employee->lastName . " " . $employee->firstName; ?><br>
                Position: <?php echo $employee->position; ?><br>
                <a href="?id=<?php echo $id; ?>">View Details</a> |
                <a href="?edit=<?php echo $id; ?>">Edit</a> |
                <form action="" method="POST" style="display:inline;">
                    <input type="hidden" name="deleteId" value="<?php echo $id; ?>">
                    <button type="submit" name="delete">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Hiển thị chi tiết nhân sự -->
    <?php if (isset($_GET["id"]) && isset($employees[$_GET["id"]])) : ?>
        <?php $employee = $employees[$_GET["id"]]; ?>
        <h2>Employee Details</h2>
        <p>
            Employee ID: <?php echo $_GET["id"]; ?><br>
            Name: <?php echo $employee->lastName . " " . $employee->firstName; ?><br>
            Birth Date: <?php echo $employee->birthDate; ?><br>
            Address: <?php echo $employee->address; ?><br>
            Position: <?php echo $employee->position; ?><br>
        </p>
    <?php endif; ?>

    <!-- Form sửa nhân sự -->
    <?php if (isset($_GET["edit"]) && isset($employees[$_GET["edit"]])) : ?>
        <?php $editEmployee = $employees[$_GET["edit"]]; ?>
        <h2>Edit Employee</h2>
        <form action="" method="POST">
            <input type="hidden" name="updateId" value="<?php echo $_GET["edit"]; ?>">
            <label>Last Name: <input type="text" name="lastName" value="<?php echo $editEmployee->lastName; ?>" required></label><br>
            <label>First Name: <input type="text" name="firstName" value="<?php echo $editEmployee->firstName; ?>" required></label><br>
            <label>Birth Date: <input type="text" name="birthDate" value="<?php echo $editEmployee->birthDate; ?>" required></label><br>
            <label>Address: <input type="text" name="address" value="<?php echo $editEmployee->address; ?>" required></label><br>
            <label>Position: <input type="text" name="position" value="<?php echo $editEmployee->position; ?>" required></label><br>
            <button type="submit" name="update">Update Employee</button>
        </form>
    <?php endif; ?>

</body>

</html>