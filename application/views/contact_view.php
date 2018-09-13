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
<style type="text/css">
  img {
    width: 1700px;
    height: 650px;
    margin-top: 10px;
  }
  .contact{
    text-align: left;
    color: black;

  }
  button{
    
    background-color: yellow;
  }
</style>

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

<div class="contact">
  <button><a href="https://www.facebook.com/profile.php?id=100002770399331">Facebook</button>ลิงค์ Facebook ติดต่อได้ตามนี้ครับ !! </a><br>
  <button><a href="https://www.instagram.com/accounts/signup/">instagram</button>ลิงค์ instagram ติดต่อได้ตามนี้ครับ !! </a><br>
  <button><a herf="https://www.google.co.th/search?q=line&oq=li&aqs=chrome.1.69i57j0j69i60j0j69i61l2.4585j0j7&sourceid=chrome&ie=UTF-8">Line</button>ลิงค์Lineติดต่อได้ตามนี้ครับ !!</a><br>
  <button><a href="https://myaccount.google.com/">E-Mail</button>ลิงค์ E-Mail ติดต่อได้ตามนี้ครับ !! </a>
</div></br>
<img src="http://localhost/ci/assets/img/2.jpg">


</body>
</html>