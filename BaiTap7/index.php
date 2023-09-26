<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BaiTap7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar bg-primary-subtle px-5 ">
            <a class="navbar-brand" href="./index.php">DuogBachNek</a>
            <form class="d-flex" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </nav>
        <h1 class="text-uppercase text-center my-5">Danh sách sinh viên</h1>
        <p class="mb-5"><a class="text-uppercase fw-bold bg-primary  text-decoration-none text-white px-3 py-2 rounded-2 " href="./addnew.php">Thêm mới</a></p>
        <table class="table table-warning table-bordered border border-black">
            <thead class="table-primary  table-bordered border border-black">
                <tr class="text-center text-uppercase">
                    <th>Mã sinh viên</th>
                    <th>Tên Sinh viên</th>
                    <th>Ngày sinh</th>
                    <th>Điểm chuyên cân</th>
                    <th>Điểm giữa kỳ</th>
                    <th>Điểm cuối kỳ</th>
                    <th>Điểm trung bình</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include 'db_connect.php';

                // Thực hiện truy vấn để lấy dữ liệu từ cơ sở dữ liệu
                $searchQuery = '';
                if (isset($_GET['search'])) {
                    $searchQuery = $_GET['search'];
                    $sql = "SELECT MaSV, TenSV, NgaySinh, DiemChuyenCan, DiemGiuaKy, DiemCuoiKy, (0.1*DiemChuyenCan + 0.2*DiemGiuaKy+ 0.7*DiemCuoiKy) AS DiemTrungBinh FROM tbl_diem WHERE MaSV LIKE '%$searchQuery%' OR TenSV LIKE '%$searchQuery%'";
                } else {
                    $sql = "SELECT MaSV, TenSV, NgaySinh, DiemChuyenCan, DiemGiuaKy, DiemCuoiKy, 
                    (0.1*DiemChuyenCan + 0.2*DiemGiuaKy + 0.7*DiemCuoiKy) AS DiemTrungBinh FROM tbl_diem";
                }
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr class="text-center align-middle">';
                        echo '<td>' . $row['MaSV'] . '</td>';
                        echo '<td>' . $row['TenSV'] . '</td>';
                        // Chuyển đổi định dạng ngày tháng
                        $dateOfBirth = date("d/m/Y", strtotime($row['NgaySinh']));
                        echo '<td>' . $dateOfBirth . '</td>';
                        echo '<td>' . $row['DiemChuyenCan'] . '</td>';
                        echo '<td>' . $row['DiemGiuaKy'] . '</td>';
                        echo '<td>' . $row['DiemCuoiKy'] . '</td>';
                        echo '<td>' . number_format($row['DiemTrungBinh'], 2) . '</td>';
                        echo '<td>
                            <div class="d-flex justify-content-around">
                                <a href="./edit.php?MaSV=' . $row['MaSV'] . '" class="btn btn-secondary text-white text-uppercase ">Edit</a>
                                <a href="./delete.php?MaSV=' . $row['MaSV'] . '" class="btn btn-danger text-uppercase">Delete</a>
                            </div>
                        </td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="8" class="text-center">No records found</td></tr>';
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>