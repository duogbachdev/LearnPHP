<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_users WHERE id = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "No records found";
            exit();
        }
    } else {
        echo "Invalid request";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form và gọi hàm cập nhật dữ liệu vào CSDL
    $id = $_POST["id"];
    $namecode = $_POST["namecode"];
    $fullname = $_POST["fullname"];

    $dateInput = $_POST['datebirth'];
    $convertedDate = date('Y-m-d', strtotime($dateInput));

    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $class = $_POST["class"];
    $department = $_POST["department"];

    $sql = "UPDATE tbl_users SET namecode = '$namecode', fullname = '$fullname', datebirth = '$convertedDate', address = '$address', gender = $gender, class = '$class', department = '$department' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Điều hướng đến trang danh sách sinh viên sau khi cập nhật
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-uppercase text-center my-5">Edit Student</h1>
        <form action="./edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label for="exampleInputCode" class="form-label fw-bold text-uppercase">Student Code</label>
                <input type="text" class="form-control" id="exampleInputCode" name="namecode" value="<?php echo $row['namecode']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label fw-bold text-uppercase">Full Name</label>
                <input type="text" class="form-control" id="exampleInputName" name="fullname" value="<?php echo $row['fullname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputDate" class="form-label fw-bold text-uppercase">Date of Birth</label>
                <input type="date" class="form-control" id="exampleInputDate" name="datebirth" value="<?php echo $row['datebirth']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputAddress" class="form-label fw-bold text-uppercase">Address</label>
                <input type="text" class="form-control" id="exampleInputAddress" name="address" value="<?php echo $row['address']; ?>" required>
            </div>
            <label class="form-label fw-bold text-uppercase">Gender</label>
            <div class="mb-3 form-check d-flex gap-5">
                <div>
                    <input type="radio" class="form-check-input" id="maleRadio" name="gender" value="1" <?php if ($row['gender'] == 1) echo "checked"; ?>>
                    <label class="form-check-label" for="maleRadio">Male</label>
                </div>
                <div>
                    <input type="radio" class="form-check-input" id="femaleRadio" name="gender" value="0" <?php if ($row['gender'] == 0) echo "checked"; ?>>
                    <label class="form-check-label" for="femaleRadio">Female</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputClass" class="form-label fw-bold text-uppercase">Class</label>
                <input type="text" class="form-control" id="exampleInputClass" name="class" value="<?php echo $row['class']; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold text-uppercase">Department</label>
                <select class="form-select" name="department">
                    <option value="1" <?php if ($row['department'] == 1) echo "selected"; ?>>Công Nghệ Thông Tin</option>
                    <option value="2" <?php if ($row['department'] == 2) echo "selected"; ?>>Kế Toán</option>
                    <option value="3" <?php if ($row['department'] == 3) echo "selected"; ?>>Hệ Thống Thông Tin</option>
                </select>
            </div>
            <button type="submit" class="btn btn-outline-primary">Update</button>
            <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
        </form>
    </div>
</body>

</html>