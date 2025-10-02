<?php
include "koneksi.php";
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
if(isset($_POST['simpan'])){
    $sqls="insert into datasiswa values('$Name',  '$Email', '$Message');";
    $simpan=mysqli_query($koneksi,$sqls);
    $hasil=mysqli_affected_rows($koneksi);
    if($hasil>0){
        echo "<script>alert('Data Berhasil Disimpan')</script>";
    }else{
        echo "<script>alert('Data Gagal Dismpan')</script>";
    }
}
?>

<meta http-equiv="refresh" content="1;url=index.php">
