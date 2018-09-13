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

  <?php echo form_open('member/add_report/',$rs); ?>
<div class="container">
  <h2>จองสนาม</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="id">ID:</label>
      <div class="col-sm-10">
        <input type="text" value="<?php echo $rs['id']?>" class="form-control" id="id" placeholder="Enter email" name="id" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="time">time:</label>
      <div class="col-sm-10">
        <input type="text" value="<?php echo $rs['time']?>" class="form-control" id="time" name="time" readonly>
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="Ground_name">Name:</label>
      <div class="col-sm-10">
        <input type="text" value="<?php echo $rs['Ground_name']?>"  class="form-control" id="Ground_name" placeholder="Enter email" name="Ground_name" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Price">Price:</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $rs['Price']?>" class="form-control" id="Price" placeholder="Enter password" name="Price" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Description">Description:</label>
      <div class="col-sm-10">          
        <input type="text" value="<?php echo $rs['Description']?>" class="form-control" id="Description" placeholder="Enter password" name="Description" readonly>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">ชื่อ:</label>
      <div class="col-sm-10">          
        <input type="text"  class="form-control" id="name" placeholder="กรุณากรอกชื่อของคุณ" name="name" >
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" onclick="return confirm('คุณยืนยันที่จะจองข้อมูลหรือไม่  ?')" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>  จอง</button>
      </div>
    </div>
  </form>
  <?php 
echo form_Close() ?>
</div>

</body>
</html>
