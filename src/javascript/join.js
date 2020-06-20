let username = document.getElementById("userName");
let Email = document.getElementById("Email");
let password = document.getElementById("Password");
let confirm = document.getElementById("confirm");
function Check(){
    if(username.value===""){
        username.focus();
        alert("请输入用户名");
        return false;
    }
    if(Email.value===""){
        Email.focus();
        alert("请输入邮箱");
        return false;
    }
    if(password.value===""){
        password.focus();
        alert("请输入密码");
        return false;
    }
    if(confirm.value===""){
        confirm.focus();
        alert("请确认密码");
        return false;
    }
    if(password.value !== confirm.value){
        confirm.focus();
        alert("两次密码输入不一致");
        return false;
    }
}