<?php
include 'condb.php';
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$color = $_POST['color'];

$sql="INSERT INTO `mobile` (`id`, `name`, `model`, `color number`) VALUES (NULL, '$f_name', '$l_name', '$color')";

$result=mysqli_query($conn,$sql);
if($result){
    echo "<script>alert('บันทึกข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_mobile.php';</script>";
}else{
    echo "<script>alert('ไม่สารถบันทึกข้อมูลได้');</script>";
}
mysqli_close($conn);

?>