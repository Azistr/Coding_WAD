<!DOCTYPE html>
<html>
    <head>
        <title>List Senjata TNI</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <style>
        table, th, td {
          border:1px solid black;
        }
    </style>
    <table style="width: 100%;">
        <tr>
            <th>ID</th>
            <th>Bentuk Senjata</th>
            <th>Nama Senjata</th>
            <th>jenis Senjata</th>
            <th>Asal Senjata</th>
            <th>Action</th>
        </tr>
    <phpconnect>
    <?php
    
    $conn = mysqli_connect("localhost", "root", "", "database_senjata");
    
    if ($conn->connect_error) {
        die("Connection Failed : ".$conn->connect_error);
    }
    
    $sql = "SELECT * FROM dataSenjata";
    $result = $coon->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["ID"] . "</td>
            <td><img src='data:image/png;base64," . base64_encode($row["BentukSenjata"]) . "'height='300''</td>
            <td>" . $row["NamaSenjata"] . "</td>
            <td>" . $row["jenisSenjata"] . "</td>
            <td>" . $row["AsalSenjata"] . "</td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
            </tr>";
        }
    ?>
    </phpconnect>
    </table>
</html>
