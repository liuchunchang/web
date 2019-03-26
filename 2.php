<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST["submit"]) && $_POST["submit"] == "登录") {
        echo "你输入的用户名为：" . $_POST['user'] . "&nbsp;&nbsp;密码为：" . $_POST['pwd'];
    } else {
        echo "登录异常，请重新登录";
    }
    ?>
</body>

</html> 