<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="src/css/1.css" media="all">

</head>
<body>
<header>
 <div class="nav">
     <ul id="ul">
         <li><a  class="active" href="index.php">Home</a> </li>
         <li><a  href="src/html/Browser.php">Browse</a> </li>
         <?php
         session_start();
         if (isset($_SESSION['islogin'])) {
                 echo '<li><a class="dropdown">My account</a>';
                 echo '<ul>';
                 echo '<li><a href="src/html/upload.php"><i class="pic"></i>上传</a> </li>';
                 echo '<li><a href="src/html/mycollection.php"><i class="pic1"></i> 我的收藏</a> </li>';
                 echo '<li><a href="src/html/myphoto.php"><i class="pic2"></i> 我的照片</a> </li>';
                 echo '<li><a href="src/php/logout.php" ><i class="pic3" ></i>登出</a> </li>';
                 echo '</ul>';
                 echo '</li>';
             }
             else echo '<li><a href="src/html/sign in.html" >log in</a> </li>';
         ?>
         <li><a href="src/html/Search.php" class="search">Search</a> </li>
     </ul>
 </div><!--导航栏 -->
    <div>
        <img src="img/logo.jpeg" width="1530" height="500">
    </div><!--导航栏下的展示图片  -->
<table border="0" class="table" id="shows">
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table><!--部分图片展示 -->

</header>
<a class="button" onclick="alert('图片已刷新')" id="refresh">
    refresh
</a><!--刷新图片-->
<div id="gotop"><a href="javascript:scroll(0,0)" style="color:green;">
    gotop</a><!--返回顶部 -->
</div>
<footer>
    <p id="footer1">联系方式：571360669@qq.com</p>
    <p id="footer">Copyright &copy; 2019-2020. All rights reserved 备案号：19302010046</p>
</footer><!--网页版权信息-->
</body>
<script src="src/javascript/pictureshow.js"> </script>
<script src="src/javascript/indexrefresh.js"></script>
</html>