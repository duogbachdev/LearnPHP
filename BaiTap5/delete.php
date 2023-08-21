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
        echo "Lỗi khi xóa học viên: " . $conn->error;
    }
} else {
    echo "ID học viên không hợp lệ.";
}

$conn->close();
