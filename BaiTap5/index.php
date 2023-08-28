<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuogBachDev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar bg-primary-subtle px-5 ">
            <a class="navbar-brand" href="./index.php">DuogBachDev</a>
            <form class="d-flex" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </nav>
        <h1 class="text-uppercase text-center my-5">List Student</h1>
        <p class="mb-5"><a class="text-uppercase fw-bold bg-primary  text-decoration-none text-white px-3 py-2 rounded-2 " href="./addnew.php">Add New</a></p>
        <table class="table table-warning table-bordered border border-black">
            <thead class="table-primary  table-bordered border border-black">
                <tr class="text-center text-uppercase">
                    <th>Student Code</th>
                    <th>FullName</th>
                    <th>Date of birth</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Class</th>
                    <th>Department</th>
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
                    $sql = "SELECT * FROM tbl_users WHERE namecode LIKE '%$searchQuery%' OR fullname LIKE '%$searchQuery%'";
                } else {
                    $sql = "SELECT * FROM tbl_users";
                }
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr class="text-center align-middle">';
                        echo '<td>' . $row['namecode'] . '</td>';
                        echo '<td>' . $row['fullname'] . '</td>';
                        // Chuyển đổi định dạng ngày tháng
                        $dateOfBirth = date("d/m/Y", strtotime($row['datebirth']));
                        echo '<td>' . $dateOfBirth . '</td>';
                        echo '<td>' . $row['address'] . '</td>';
                        echo '<td>' . ($row['gender'] == 1 ? 'Male' : 'Female') . '</td>';
                        echo '<td>' . $row['class'] . '</td>';
                        echo '<td>' . ($row['department'] == 1 ? 'Công Nghệ Thông Tin' : ($row['department'] == 2 ? 'Kế Toán' : 'Hệ Thống Thông tin')) . '</td>';

                        echo '<td>
                            <div class="d-flex justify-content-around">
                                <a href="./edit.php?id=' . $row['id'] . '" class="btn btn-secondary text-white text-uppercase ">Edit</a>
                                <a href="./delete.php?id=' . $row['id'] . '" class="btn btn-danger text-uppercase">Delete</a>
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