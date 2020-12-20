<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Логин</title>
    <style>
        table{
            font-family: "Andale Mono";
            padding: 20px;
            border: solid cadetblue;
        }

        .g1{
            font-size: 24px;
        }

        .g2{
            font-size: 18px;
        }

        input{
            border-style: dot-dot-dash;
            font-size: 15px;
            height: 40px;
            width: 100%
        }

        span.g_enter{
            font-size: 20px;
        }

        a{

            text-decoration-line: none;
        }

        input.next{
            color: white;
            font-size: 20px;
            width: min-content;
            background-color: cornflowerblue;
        }

        td{
            padding: 10px;
        }
    </style>
</head>
<body >
<form action="adminka.php" method="post">
    <table align="center" width="600" border="0" bgcolor="beige">
        <tr>
            <td colspan="2"><span class="g1">Войти в админку</span></td>
        </tr>

        <tr>
            <td colspan="2"><input type="text" name="username" placeholder="Имя пользователя"></td>
        </tr>
        <tr>
            <td><input type="password" name="psw" placeholder="Пароль"></td>
        </tr>

        <tr>
<!--            <td><span class="g_enter"><a href="template.php">Войти</a></span></td>-->
            <td align="right"><input class="next" type="submit" value="Войти"></td>
        </tr>

    </table>
</form>
</body>
</html>