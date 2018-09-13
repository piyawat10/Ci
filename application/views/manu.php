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
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="glyphicon glyphicon-cog"></span>  การจัดการ <span class="caret"></span></a>
        <ul class="dropdown-menu">

            <li><?=anchor('member/information_view/', 'ข้อมูลสนาม');?></li>
            <li><?=anchor('member/add_view/', 'เพิ่มข้อมูล');?></li>
             
        </ul>
      </li>
     
      <li><?=anchor('member/table/', 'ตารางสนาม');?></li>
      <li><?=anchor('member/show_report/', 'รายงาน');?></li>
      <li><?=anchor('member/contact/', 'ติดต่อ');?></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  




</body>
</html>
