<?php
include 'condb.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mobile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css">

</head>
<body>
    <div class="container"> 
    <div class=" h4   alert alert-warning  nb-4 mt-4 " role="alert"> ข้อมูลมือถือ </div>
<a href="fri_mobil.php" class="btn btn-warning" >เพิ่ม</a>

    <table class="table table-hover">
     <tr>
        <th>รหัส</th>
        <th>ชื่อ</th>
        <th>รุ่น</th>
        <th>สี</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
    </tr>
   <?php
$sql = "SELECT * FROM mobile";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){  
?>
    <tr>
    <td><?=$row["id"]?></td>
    <td><?=$row["name"]?></td> 
    <td><?=$row["model"]?></td> 
    <td><?=$row["color number"]?></td>
    <td><a href="edit_mobile.php?id=<?=$row["id"]?>" class="btn btn-secondary" >แก้ไข</a>    </td>
    <td><a href="delete_mobile.php?id=<?=$row["id"]?>" class="btn btn-danger" onclick="Del(this.href);return false;">ลบ</a>    </td>
    

</tr>
<?php
}
mysqli_close($conn);  //ปิดการเชื่อมต่อฐานข้อมูล
?>

</table>

</div>
</body>
</html>

<script language="JavaScript"> 
function Del (mypage){
   var agree=confirm("Do you want to delete data?"); 
   if(agree){
    window.location=mypage; 
    } 
} 
    
    </script>