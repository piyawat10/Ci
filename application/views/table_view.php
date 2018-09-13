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
  <h2>ตารางสนาม</h2>
  <p></p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ลำดับ</th>
        <th>เวลา</th>
        <th>ชื่อสนาม</th>
        <th>ราคา</th>
        <th>รายละเอียด</th>
        <th>จองสนาม</th>    
      </tr>
    </thead>
    <?php foreach ($rs as $r){ ?>
    <tbody>
      <tr>
        <td><?php echo $r['id']; ?></td>
        <td><?php echo $r['time']; ?></td>
        <td><?php echo $r['Ground_name']; ?></td>
        <td><?php echo $r['Price']; ?></td>
        <td><?php echo $r['Description']; ?></td>
        <td><?php echo anchor ("member/agreed/".$r['id'], "จอง")?></td>
       
      </tr>
    </tbody>
    <?php } ?>
  </table>
</div>

</body>
</html>




