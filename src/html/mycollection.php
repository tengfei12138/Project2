<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <title>mycollection</title>
    <script src="https://upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/6.css" media="all">
</head>
<body>
<header>
    <div class="nav">
        <ul>
            <li><a class="active1" href="../../index.php">Home</a> </li>
            <li><a href="Browser.php" class="active">Browser</a> </li>
            <li><a class="dropdown" style="color:green;">My account</a>
                <ul>
                    <li><a href="upload.php"><i class="pic"></i>上传</a> </li>
                    <li><a href="mycollection.php" style="color:green;"><i class="pic1"></i> 我的收藏</a> </li>
                    <li><a href="myphoto.php"><i class="pic2"></i> 我的照片</a> </li>
                    <li><a href="../php/logout.php"><i class="pic3" ></i>登出</a> </li>
                </ul>
            </li>
            <li><a href="Search.php" class="search">Search</a> </li>
        </ul>
    </div> <!--导航栏-->
</header>
<div class="sidebar">
    <div class="tab"  style="width:1300px;"><i class="reorder"></i> My Favorite</div>
</div> <!--分割栏-->
<div>
    <img src="../../img/show.jpg" style="height:200px;width:600px;">
</div>
<div id="myCollectionBox" >
</div>
<nav class="m-auto" >
    <ul class="pagination" id="pageBox" style="margin-left:50px;">
    </ul>
</nav>
<footer>
    <p id="footer">Copyright &copy; 2019-2020. All rights reserved 备案号：19302010046</p>
</footer> <!--网页版权信息-->
  <script src="../javascript/myCollection.js"></script>
</body>
</html>