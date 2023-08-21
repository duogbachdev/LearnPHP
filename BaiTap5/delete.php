<?php
include 'db_connect.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $studentId = $_GET['id'];

    // Truy vấn để xóa học viên
    $sql = "DELETE FROM tbl_users WHERE id = $studentId";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Điều hướng đến trang danh sách sinh viên
        exit();
    } else {
        echo "Error deleting student " . $studentId;
    }
} else {
    echo "ID student false";
}

$conn->close();
