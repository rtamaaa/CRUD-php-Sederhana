<!DOCTYPE html>
<html>
<head>
    <title>Pemrograman 3</title>
    <!-- Add Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h2 class="text-center mt-3">Pemrograman 3 2023</h2>
    <div class="container mt-4">
        <a class="btn btn-primary" href="tambah_user.php">+ TAMBAH USER</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Status</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi, "select * from t_user");
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['password']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                        <td><?php echo $d['status']; ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="edit_user.php?id=<?php echo $d['id_user']; ?>">EDIT</a>
                            <a class="btn btn-danger btn-sm" >Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Add Bootstrap 5 JS and Popper.js (for Bootstrap dropdowns, tooltips, and popovers) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>