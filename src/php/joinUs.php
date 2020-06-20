<?php
$email = $_POST['Email'];
$userName = $_POST['userName'];
$pass = $_POST['Password'];
$conn =mysqli_connect("localhost","root","Csf2002010","travels");
$findRepeatEmailSql = "SELECT UID,UserName,Pass FROM traveluser WHERE (Email='{$email}' OR Email='{$userName}');";
$findRepeatUserNameSql = "SELECT UID,UserName,Pass FROM traveluser WHERE (UserName='{$email}' OR UserName='{$userName}');";
$EmailResult = mysqli_query($conn, $findRepeatEmailSql);
$UserNameResult = mysqli_query($conn, $findRepeatUserNameSql);
if (mysqli_num_rows($UserNameResult)) {
    echo "<script>alert('用户名已存在') ;location.href='../html/join.php'</script>";
} else if (mysqli_num_rows($EmailResult)) {
    echo "<script>alert('邮箱已被注册');location.href='../html/join.php'</script>";
} else if (!preg_match('/^[A-Za-z0-9_]{6,20}$/u', $userName)) {
    echo "<script>alert('非法用户名');location.href='../html/join.php'</script>";

} else if (!preg_match('/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/u', $email)) {
    echo "<script>alert('非法邮箱');location.href='../html/join.php'</script>";
} else if (!preg_match('/^[A-Za-z0-9_]{8,16}$/u', $pass)) {
    echo "<script>alert('密码不符合要求');location.href='../html/join.php'</script>";
} else if (!(preg_match('/^.*[0-9]+.*$/u', $pass) && preg_match('/^.*[A-z]+.*$/u', $pass))) {
    echo "<script>alert('密码过于简单');location.href='../html/join.php'</script>";
} else {
    $pass1 = password_hash($pass, PASSWORD_DEFAULT);
    $rowNumberSql = "SELECT COUNT(*) FROM table_name;";
    $UID = mysqli_query($conn, $rowNumberSql) + 1;
    $addUser = "INSERT INTO traveluser (UserName,Pass,Email,DateJoined,DateLastModified,State) VALUES ('{$userName}','{$pass1}','{$email}',NOW(),NOW(),1)";
    if(mysqli_query($conn, $addUser)) {
        echo "<script>alert('注册成功');location.href='../html/sign in.html'</script>";
    }
    else {
        echo "<script>alert('注册失败');location.href='../html/join.php'</script>";
    }
}