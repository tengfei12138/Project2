<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <title>Details</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/8.css" media="all">
</head>
<body>
<header>
    <div class="nav">
        <ul>
            <li><a href="../../index.php">Home</a> </li>
            <li><a href="Browser.php" >Browser</a> </li>
            <?php
            session_start();
            if (isset($_SESSION['islogin'])) {
                echo '<li><a class="dropdown">My account</a>';
                echo '<ul>';
                echo '<li><a href="upload.php"><i class="pic"></i>上传</a> </li>';
                echo '<li><a href="mycollection.php"><i class="pic1"></i> 我的收藏</a> </li>';
                echo '<li><a href="myphoto.php"><i class="pic2"></i> 我的照片</a> </li>';
                echo '<li><a href="../php/logout.php" ><i class="pic3" ></i>登出</a> </li>';
                echo '</ul>';
                echo '</li>';
            }
            else echo '<li><a href="sign in.html">log in</a></li>';
            ?>
            <li><a href="Search.php" >Search</a> </li>
        </ul>
    </div> <!--导航栏  -->
</header>
<div class="sidebar">
    <div class="tab" style="width:1300px;" ><i class="reorder"></i> Details</div>
</div> <!--分割栏  -->
<div style="text-align:center;margin-top:40px;" >
        <h3 id="titleDetail">神圣教堂</h3>
    <div style="margin-left:100px;" id="uploader"><h4 >by csf</h4></div>
</div>
<div>
    <div class="details1" style="background:url(../../img/travel-images/normal/medium/222222.jpg);width:400px;height:400px;" id="imgDetail"></div>
    <div class="details2">
        <div class="sidebar">
            <div class="tab" style="width:900px;margin-top:40px;" ><i class="reorder"></i>Like Number</div>
            <div class="design" >
                <div class="navto-nav" style="color:red;text-align:center;" id="like"><i class="imooc-icon"></i> 99</div>
            </div>
        </div>
        <div>
            <div class="sidebar">
                <div class="tab" style="width:900px;margin-top:40px;" ><i class="reorder"></i>Image Details</div>
                <div class="design" >
                    <div class="navto-nav" id="contentDetail"><i class="imooc-icon"></i> Content:Building</div>
                </div>
                <div class="design" >
                    <div class="navto-nav" id="countryDetail"><i class="imooc-icon"></i> Country:Italy</div>
                </div>
                <div class="design" >
                    <div class="navto-nav" id="cityDetail"><i class="imooc-icon"></i>City:Florence</div>
                </div>
            </div>
        </div>
        <div class="details3" id="likeButton"></div>
    </div>
</div> <!--通过两个div的浮动使左侧为图片 右侧为图片相关信息  -->
<div style="clear:both"></div><!--清除浮动效果 -->
<div class="details4" id="desDetail">
    <p >When we talk about being "moved" by a building, it's also a bittersweet feeling produced by the contrast between the noble quality incarnated as a building structure and the more sad and broader reality that we know exists. We cry because we see beauty, because we clearly know that the happiness it makes us feel is just an exception.</p>
</div>
<footer>
    <p id="footer">Copyright &copy; 2019-2020. All rights reserved 备案号：19302010046</p>
</footer> <!--网页版权信息 -->
<script src="../javascript/Details.js"></script>
</body>
</html>