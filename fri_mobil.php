
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มมือถือ</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-6">    
    <div class=" h4 text-center alert alert-warning  nb-4 mt-4 " role="alert"> เพิ่มข้อมูลมือถือ </div>
<form method="POST" action="insert_mobile.php">
    <label>ชื่อมือถือ:</label>
        <input type="text" name="fname" class="form-control" placeholder="...ชื่อมือถือ" > <br>
    <label>รุ่นมือถือ:</label>
        <input type="text" name="lname" class="form-control" placeholder="...รุ่นมือถือ"  > <br>
    <label>สีมือถือ:</label>
        <input type="text" name="color" class="form-control" placeholder="...สีมือถือ"  > <br>
        <input class="btn btn-success" type="submit" value="submit">
        <a href="show_mobile.php" class="btn btn-danger" >Cancel</a>
</form>

</div>
</div>

</div>
</body>
</html>