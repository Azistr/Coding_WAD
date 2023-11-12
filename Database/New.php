<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Senjata</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    </head>
    <body>
        <h1>Menambah Senjata Baru</h1>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    <form action="" method="post">

    <div class="form-group">
        <label for="GambarSenjata">Gambar Senjata</label>
        <input type="file" name="BentukSenjata" class="form-control-file" id="GambarSenjata">
    </div>

    <div class="form-group">
        <label for="NamaSenjata">Nama Senjata</label>
        <input type="text" name="NamaSenjata" class="form-control" id="NamaSenjata" placeholder="SS2">
    </div>

    <div class="form-group">
        <label for="JenisSenjata">Jenis Senjata</label>
        <input type="text" name="JenisSenjata" class="form-control" id="JenisSenjata" placeholder="Assault Rifle">
    </div>

    <div class="form-group">
        <label for="AsalSenjata">Asal Senjata</label>
        <input type="text" name="AsalSenjata" class="form-control" id="AsalSenjata" placeholder="Indonesia">
    </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

  <button type="submit" name="cancel" class="btn btn-danger">Cancel</button>

</form>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "character");
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

if(isset($_POST["submit"])) {
    $BentukSenjata = $_POST['BentukSenjata'];
    $NamaSenjata = $_POST['NamaSenjata'];
    $JenisSenjata = $_POST['JenisSenjata'];
    $AsalSenjata = $_POST['AsalSenjata'];
    $query = "INSERT INTO datasenjata (BentukSenjata, NamaSenjata, JenisSenjata, AsalSenjata)
              VALUES ('$BentukSenjata', '$NamaSenjata', '$JenisSenjata', '$AsalSenjata')";
    
    if (mysqli_query($conn, $query)) {
        phpAlert("Data Successfully added"   );
    } else {
        phpAlert("Data failed to be added". mysqli_error($conn)   );
    }

}
?>