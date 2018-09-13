<!DOCTYPE html>
<html lang="en">
<head>

  <title>index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index">หน้าแรก</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><?=anchor('member/index/','การจัดการ');?></li>
      </li>
     
      <li><?=anchor('member/table/', 'ตารางสนาม');?></li>
      <li><?=anchor('member/contact/', 'ติดต่อ');?></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>เพิ่มข้อมูลของสนาม</h2>
  <form  action="add">
    <div class="form-group">
      <label class="control-label col-sm-2" for="id">ลำดับ:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="id"  name="id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="time">เวลา:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="time"  name="time">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="Ground_name">ชื่อสนาม:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Ground_name"  name="Ground_name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Price">ราคา:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Price"  name="Price">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Description">รายละเอียด:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Description"  name="Description">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" onclick="return confirm('คุณยืนยันที่จะเพิ่มข้อมูลหรือไม่  ?')" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>  เพิ่มข้อมูล</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
