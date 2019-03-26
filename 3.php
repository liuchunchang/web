<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF8">
    <title>Document</title>
    <style>
        body {
            background: url(../images/bg.png);
        }

        .title {
            position: relative;
            top: 12px;
            font-size: 35px;
        }

        input {
            padding: 4px;
        }

        span {
            /* font-size: 25px; */
        }

        /* div居中 */
        div {
            margin-top: 12.89%;
            margin-left: 350px;
            text-align: center;
            font-family: kaiti;
            color:blue;
        }

        #reset {
            width: 65px;
            height: 25px;
            color: #fff;
            background: #008080;
            border-radius: 15%;
            /* 垂直居中 （里面）*/
            line-height: 10px;
            /* 这个也是垂直局中 （外面）*/
            vertical-align: middle;
        }

        #submit {
            width: 65px;
            height: 25px;
            color: #fff;
            background: #008080;
            border-radius: 15%;
            /* 垂直居中 （里面）*/
            line-height: 10px;
            /* 这个也是垂直局中 （外面）*/
            vertical-align: middle;
        }
    </style>
</head>

<body>

    <div>
        <form action="#" method="post" enctype="multipart/form-data">
            <span class="title">——注册——</span>
            <br><br><br>
            <span>姓 名：</span>
            <input type="text" name="username">
            <br><br>
            <span>密 码：</span>
            <input type="password" name="userpassword">
            <br><br>
            <span>电 话：</span>
            <input type="number" name="number">
            <br><br>
            <span>email：</span>
            <input type="email" name="email">
            <br><br>
            <input type="reset" name="userrest" id="reset" value="清空">
            &nbsp;&nbsp;
            <input type="submit" name="submit" id="submit" value="提交">
        </form>
    </div>
</body>
</html> 