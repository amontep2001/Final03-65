<?php
include 'condb.php';

    $id=$_POST['id_mobile'];
    $f_name=$_POST['fname'];
    $l_name=$_POST['lname'];
    $color=$_POST['color'];
    $sql = "UPDATE `mobile` SET `id` = '$id', `name` = '$f_name', `model` = '$l_name', `color number` = '$color' WHERE `id` = '$id'";
    echo $sql;
    $result=mysqli_query($conn,$sql);
    if($result){
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='show_mobile.php';</script>";
    }else{
        echo "<script>alert('ไม่สารถบันทึกข้อมูลได้');</script>";
        }
mysqli_close($conn);


?>