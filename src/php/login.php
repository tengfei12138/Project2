<?php
header('Content-type:text/html;charset=utf-8');
$connection =mysqli_connect("localhost","root","Csf2002010","travels");
if (mysqli_connect_errno()){
    die(mysqli_connect_error());
}
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
}
$check_query="select UserName,UID,Pass from traveluser where UserName='$username' limit 1";
$result=mysqli_query($connection,$check_query);
$result1=mysqli_fetch_array($result);
$acPass = $result1['Pass'];
if (password_verify($password,$acPass)||$acPass==$password){
    session_start();
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['islogin']=1;
    $_SESSION['uid']=$result1['UID'];
    echo "<script>alert('登录成功');location.href='../../index.php'</script>";
}
else{
    header('refresh:3;url=../html/sign in.html');
    echo "用户名或密码错误，系统将跳转至登录页面，请重新填写登录信息！";
    exit;
}