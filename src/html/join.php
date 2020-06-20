<!DOCTYPE html>
<html lang="ch">
<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../javascript/join.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/7.css" media="all">
</head>
<body>
<div style="text-align:center;">
    <div><img src="../../img/travel-images/square/square-medium/222222.jpg"></div> <!--网页主图类似logo-->
    <h4>Sign up for Fisher</h4>
    <form action="../php/joinUs.php" method="post" onclick="return Check()" name="joinForm">
    <div class="sign">
        <h5>Username:</h5>
        <input type="text" required class="in" id="userName" name="userName">
        <h5>E-email:</h5>
        <input type="text" required class="in" id="Email" name="Email">
        <h5>Password:</h5>
        <input type="password" class="in" required id="Password" name="Password">
        <h5>Confirm Your Password:</h5>
        <input type="password" class="in" required id="confirm"><br>
        <a href="sign in.html"><input type="submit" class="in" id="in" value="sign up"></a> <!--点击提交后进行跳转-->
    </div> <!--注册相关内容-->
    </form>
</div>
<footer>
    <p id="footer">Copyright &copy; 2019-2020. All rights reserved 备案号：19302010046</p>
</footer> <!--网页版权信息-->
</body>
</html>