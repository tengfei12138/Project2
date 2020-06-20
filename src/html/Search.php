<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <script src="https://upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.2.min.js"></script>
    <script src="../javascript/SearchFilter.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/3.css" media="all">
</head>
<body>
<header>
    <div class="nav">
        <ul>
            <li><a class="active1" href="../../index.php">Home</a> </li>
            <li><a class="active" href="Browser.php">Browser</a> </li>
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
            <li ><a href="Search.php" class="search" >Search</a> </li>
        </ul>
    </div> <!--导航栏-->
    <div class="sidebar">
        <div>
        <div class="tab"  id="cate0" style="width:900px;"><i class="reorder"></i> Search</div>
        <input type="radio" val="byTitle" name="Filter" checked>Filter by Title</div>
        <input type="text" style="width:500px;" id="titSearcher">
        <input type="radio" val="byDescription" name="Filter" >Filter by Description</div>
        <textarea style="width:1300px;height:200px;" id="desSearcher"></textarea><br>
       <button id="searchBtn" >Search</button>
        </div>
        <div>
            <div class="tab"  id="cate8" style="width:900px;margin-top:20px;"><i class="reorder"></i> Result</div>
            <div id="resultBox">
            </div>
            <nav class="m-auto">
                <ul class="pagination" id="pageBox">

                </ul>
            </nav>
    </div>  <!--搜索结果-->
</header>
<footer>
    <p id="footer">Copyright &copy; 2019-2020. All rights reserved 备案号：19302010046</p>
</footer>  <!--网页版权信息-->
</body>
</html>