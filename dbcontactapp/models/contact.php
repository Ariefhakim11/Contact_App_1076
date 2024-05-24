<?php
require_once 'database.php';

class Contact
{
    static function select()
    {
        global $conn;
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        $arr = array();

        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
    static function update()
    {

    }
    static function delete()
    {
        global $conn;
        if (isset($_GET['id'])) {
            $id = htmlspecialchars($_GET["id"]);

            $sql = "delete from laporan where id='$id' ";
            $hasil = mysqli_query($conn, $sql);

            if ($hasil) {
                header("Location:index.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
            }
        }
    }
}