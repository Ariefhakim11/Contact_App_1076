<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'dbcontactapp');

$query = mysqli_query($koneksi, "SELECT * FROM users");

// Periksa apakah query berhasil dieksekusi
if ($query) {
    // Loop untuk menampilkan data dalam tabel
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <h1>LOGFOCK Dashboard</h1>
    </header>

    <div class="sidebar">
        <ul>
            <li><a href="login.php">Home</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </div>
    
    <main>
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomor Handphone</th>
                        <th>Owner</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($query)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>"; // Ganti 'id' dengan nama kolom yang sesuai
                            echo "<td>" . $row['phone_number'] . "</td>"; // Ganti 'phone_number' dengan nama kolom yang sesuai
                            echo "<td>" . $row['owner'] . "</td>"; // Ganti 'name' dengan nama kolom yang sesuai
                            echo "<td>";
                            echo "<button>Edit</button>";
                            echo "<button>Delete</button>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <a href="form.php"><button type ="submit" name="simpan" class= tambah-btn>Tambah</button></a>
    </main>
</body>
</html>
<?php 
} else {
    // Tampilkan pesan jika query tidak berhasil dieksekusi
    echo "Query failed: " . mysqli_error($koneksi);
}
?>