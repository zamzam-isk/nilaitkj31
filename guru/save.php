<?php
if (isset($_POST['save'])) {
    include_once('config.php');
    $nip = $_POST['nip'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $major_id = $_POST['major_id'];

    $sql = "INSERT INTO teachers SET nip='$nip', name='$name', gender='$gender', pob='$pob', dob='$dob', major_id='$major_id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=guru');
    } else {
        include('index.php?m=guru');
        echo '<script language="JavaSricpt">';
        echo 'alert ("Data gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Eits Tidak Boleehhh... kamu  klik aja <a href='?m=guru&s=add'>disini</a>";
}
