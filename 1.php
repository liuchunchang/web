<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>登录页面</title>
    <?php include('mysql_connect.php') ?>
    <style>
        @font-face {
            font-family: font;
            src: url(font/font.ttf);
        }

        h1 {
            margin-top: 5.8%;
        }

        #user {
            padding: 4px;
        }

        #password {
            padding: 4px;
        }

        #code {
            padding: 4px;
        }

        form {
            margin-top: 3.5%;
            margin-left: 275px;
            text-align: center;
        }

        .bg {
            text-align: center;
            font-family: 'kaiti';
            background: url(../images/bg.png);
            background-size: cover;
            color: #ffffff;
        }

        #demo {
            display: inline-block;
            position: relative;
            width: 55px;
            border-radius: 47%;
            height: 20px;
            text-align: center;
            line-height: 20px;
            vertical-align: middle;
            font-family: 'font';
            font-size: 23px;
            background: #808080;
            color: blue;
            padding: 10px;
        }

        #submit {
            width: 65px;
            height: 25px;
            color: #fff;
            background: #008080;
            border-radius: 15%;
        }

        #register {
            width: 65px;
            height: 25px;
            color: #fff;
            background: #008080;
            border-radius: 15%;
        }
    </style>
    <script type="text/javascript">
        function test() {
            var result = '';
            var seed = new Array(
                'a', 'b', 'c', 'd', 'e',
                'f', '2', '3', '4', '5',
                'x', 'i', 'h', 'j', 'g',
                '6', '7', '8', '9', 'm',
                't', 'u', 'v', 'w', 's',
                '3', 'z', 'w', '2', '4',
                'n', 'p', 'q', 'r', 'y',
                '7', '8', '9', '5', '6'
            ); //创建需要的数据数
            for (i = 0; i < 4; i++) {
                str = Math.floor(Math.random() * 40);
                result += seed[str];
            }
            document.getElementById("demo").innerHTML = result;
        }

        function login() {
            var user = document.getElementById("user").value;
            <?php 

            $users = '刘春常';
            $sqlstr = "select *from user where name='$users'";
            $result = mysqli_query($connID, $sqlstr);
            while ($myrow = mysqli_fetch_object($result)) {
                $name = $myrow->name;
                $password = $myrow->password;
            }

            ?>
            var passwords = document.getElementById("password").value;
            var inputRandom = document.getElementById("code").value;
            var autoRandom = document.getElementById("demo").innerHTML;
            var name = '<?php 
                        echo $name;
                        ?>';
            var password = '<?php 
                            echo $password;
                            ?>';
            if (inputRandom == autoRandom && autoRandom != "") {
                if (user == name && passwords == password) {} else {
                    alert("用户名或密码错误");
                    return false;
                }
            } else {
                <?php $m = '验证码错误' ?>
                var a = '<?php echo $m; ?>';
                alert(a);
                return false;
            }

        }
    </script>
</head>

<body class="bg" onload="test()">
    <h1>欢迎登录</h1><br><br>
    <form name="form1" method="post" action="../html/demo5.html" onsubmit="return login()">
        <span>用户名:</span>
        <input type="text" name="user" id="user" size="20">
        <br><br>
        <span>密&nbsp;&nbsp;码: </span>
        <input type="password" name="pwd" id="password" size="20">
        <br><br>
        <span>&nbsp;验证码:</span>
        <input type="text" id="code" size="9">
        <div id="demo" onclick="test()">验</div>
        <br><br>
        <input name="submit" type="submit" id="submit" value="登录" />
        &nbsp;&nbsp;
        <input name="register" type="button" id="register" value="注册" onclick="location.href='3.php'" />

    </form>
</body>

</html> 