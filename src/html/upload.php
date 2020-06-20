<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <title>upload</title>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="../javascript/countriesSelect.js"></script>
    <script src="../javascript/citesSelect.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/4.css" media="all">
    <script src="../javascript/upload1.js" type="text/javascript"></script>
</head>
<body>
<header>
    <div class="nav">
        <ul>
            <li><a class="active1" href="../../index.php">Home</a> </li>
            <li><a href="Browser.php" >Browser</a> </li>
            <li><a class="dropdown">My account</a>
                <ul>
                 <li><a href="upload.php" style="color:green;"><i class="pic"></i>上传</a> </li>
                 <li><a href="mycollection.php"><i class="pic1"></i> 我的收藏</a> </li>
                 <li><a href="myphoto.php"><i class="pic2"></i> 我的照片</a> </li>
                  <li><a href="../php/logout.php" ><i class="pic3" ></i>登出</a> </li>
                </ul>
               </li>
            <li><a href="Search.php" class="search">Search</a> </li>
        </ul>
    </div> <!--导航栏-->
</header>
    <div class="sidebar">
        <div class="tab"  style="width:1300px;"><i class="reorder"></i>upload </div>
    </div>
<form enctype="multipart/form-data" action="../php/upload1.php" method="post" id="form">
    <div id="photoUpload">
        <input type="file" value="" name="file" id="fileUpload" accept="image/jpeg,image/jpg,image/png" onchange="imgPreview(this)">
        <img id="imgUpload" class="photos">
    </div>
<div class="upload">
<h4>图片标题</h4>
<input type="text"  name="title" id="imgTitle" style="width:800px;">
</div>
<div class="upload">
    <h4>图片描述</h4>
    <textarea name="description" id="imgDescription" style="width:1300px;height:200px;"></textarea>
</div>
<select name="content" id="contents" >
    <option value="null">Filter by Content</option>
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
</form>
<!--<div class="upload" id="upload" style="text-align:center;" >
    <a href="myphoto.html"><input type="submit" value="提交" style="width:100px;background-color:green;height:30px;" onclick="alert('已提交')"></a>
</div>  提交上传图片-->
<button onclick="submit()" style="margin-top:20px;margin-left:30px;">Submit</button>
<footer >
    <p id="footer">Copyright &copy; 2019-2020. All rights reserved 备案号：19302010046</p>
</footer> <!--网页版权信息-->

</body>

</html>