<?php
if (isset($_POST['Input'])) {
    $a = $_POST['Name'];
    $b = $_POST['Email'];
    $c = $_POST['Message'];
    echo "Nama : <b>$a</b><br>";
    echo "Email : <b>$b</b><br>";
    echo "Pesan : <b>$c</b><br>";
}
?>