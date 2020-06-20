<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../javascript/Resultshowing.js"></script>
    <script src="../javascript/countriesSelect.js"></script>
    <script src="../javascript/citesSelect.js"></script>
    <script src="../javascript/singleSearch.js"></script>
    <script src="../javascript/HotSelect.js"></script>
    <script src="../javascript/filterChoose.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/2.css" media="all">
    <script src="../javascript/countriesSelect.js"></script>
    <title>Browser</title>
</head>
<body>
<header>
    <div class="nav">
        <ul>
            <li><a class="active1" href="../../index.php">Home</a> </li>
            <li><a href="Browser.php" class="active">Browser</a> </li>
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
    </div>  <!--导航栏-->
</header>
<div class="div">
   <div class="div1" style="float:left ;margin-right:60px;">
       <table class="table1" border="0">
           <tr>
               <td colspan="3" style="background-color: #eeeeee">Search by Title</td>
           </tr>
           <tr>
               <td colspan="2"><input type="text" id="searchInput" ></td>
               <td style="background-color: #ddd;"><a  id="singleSearch"  style="line-height:40px;text-align: center;background-color: lightslategray;margin-left:10px;">Search</a></td>
           </tr>
           <tr>
               <td colspan="3" style="background-color: #eeeeee">&nbsp</td>
           </tr>
       </table>
       <div style="margin-left:45px">
           <h3>Hot Tags</h3>
       </div>
       <div id="hotTags" style="margin-top:20px;">

       </div>
   </div> <!--侧边栏-->
<div class="div2" style="float:left;">
    <div class="sidebar">
        <div class="tab" style="width:900px;" ><i class="reorder"></i> Filter</div>
    </div>
    <form id="filter" method='post'>
        <select id="contents" style="width:200px;" >
            <option value='null'>Filter by Content</option>
            <option value="scenery">Scenery</option>
            <option value="city">City</option>
            <option value="people">People</option>
            <option value="animal">Animal</option>
            <option value="building">Building</option>
            <option value="wonder">Wonder</option>
            <option value="other">Other</option>
        </select>
        <select name="country" id="countries" style="margin-left:20px;width:200px;">
            <option value='null'>Filter by Country</option>
            <script src="../javascript/countriesSelect.js"></script>
        </select>
        <select name="city" id="cities" style="margin-left:20px;width:200px;">
            <option value='null'>Filter by City</option>
            <script src="../javascript/citesSelect.js"></script>
        </select>
        <a id="chooseBtn"  style="background-color: lightslategray;height:20px;text-align:center;">Filter</a>
    </form>



    <!--<select id="select" onChange="move()" style="width:200px;">
        <option value="china">China</option>
        <option value="uk">UK</option>
        <option value="usa">USA</option>
        <option value="select">请选择</option>
    </select>
    <select id="val" class="sel" style="margin-left:20px;width:200px;margin-right:50px;">请选择</select>
    <script>

                   function move() {

                       var seclect = document.getElementById("seclect");

                       var val = document.getElementById("val");
                     var add;

                       if (select.value == "china") {

                           add = new Array("上海", "北京", "郑州"); //对比value值，实现对应二级text值的动态生成

                       } else if (select.value == "uk") {

                           add = new Array("伦敦", "威尔士", "利物浦");

                       } else if (select.value == "usa") {

                           add = new Array("纽约", "洛杉矶", "华盛顿");

                       } else if (select.value == "select") {

                           add = new Array("请选择");

                       }

                 else {

                           add = null; //如果没有的话就为空,在这里是不存在这种情况，不过你也可以自己设置出来；
                     }
                       val.length = 0;val
                    for (var i = 0; i < add.length; i++) {

                           var aaa = new Option();

                           aaa.text = add[i].split()[0];

                           val.add(aaa);

                           //把text值添加到二级select中，显示出来
                       }
                   }
               </script>
    <input type="submit" value="Filter" onclick="alert('已搜索')" style="float:right;"> 使用js实现select的二级联动-->
    <div>
        <table class="center" id="resultTable">
            <tr>
                <td><a href="Browser.php"><img src="../../img/travel-images/square/square-medium/5855191275.jpg"></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/5855221959.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/5855774224.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/5855752464.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
            </tr>
            <tr>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/5855174537.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/5856654945.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/5856658791.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/5856616479.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
            </tr>
            <tr>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/6114850721.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/6114859969.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/6114867983.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/6114904363.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
            </tr>
            <tr>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/6114960821.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/6115548152.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/6115603234.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
                <td><a href="Browser.php"><div style="background:url(../../img/travel-images/normal/medium/6119143988.jpg);width:150px;height:150px;background-size:cover;"></div></a></td>
            </tr>
        </table>
        <div style="margin:0px 50px;text-align:center;" id="footShow">
        </div> <!--页码 -->
    </div> <!--部分图片展示-->
    <footer>
        <p id="footer">Copyright &copy; 2019-2020. All rights reserved 备案号：19302010046</p>
    </footer>
</div>
</div>
</body>
</html>
