<?//echo "<pre>"; print_r($_POST); echo "</pre>";?>
<?php
if ($_REQUEST[username] != 'admin' or $_REQUEST[psw] != 'admin')
{
    die("Неверные данные для админки");
}?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Сладкое королевство</title>
    <style>

        #foot .footer{
            text-align:center;
            color:#777777
        }
        a
            color: black;
            text-decoration: none;
        }
        a:visited{
            color: black;
        }

        body{
            background-color:beige;
        }

        #tab{
            background-color:#eeeeee;
            border:2px solid #faebd7;
            width:900px;
        }

        #ts{
            min-height: 500px;
        }

        #menu{
            width:200px;
            border-right:2px solid #909090;
        }

        #header{
            font-size: 16pt;
        }
    </style>

    <script>
        function upload(id, file_name){

            document.getElementById('phptext').value = file_name;
            document.getElementById(id).submit();
        }
    </script>
</head>

<body>
<table align=center id=tab >
    <tr>
        <td>
            <img src= 'images/top_header.png' width=900 height = 225>
            <p id = header align="center">Добро пожаловать в Админку!!</p>
        </td>
    </tr>
    <tr>
        <td id=ts>
            <table>
                <tr>
                    <td id=menu height=350px valign=top>
                        <form action="adminka.php" method="post" id = "form_id">
                            <input id = phptext type = hidden name="phptext">
                            <input type="hidden" name="username" value="admin">
                            <input type="hidden" name="psw" value="admin">
                            <div>

                                <ol class = sp>
                                    <li>Изменить Меню</li>
                                    <ul>
                                        <li><label onclick="upload('form_id', 'functions/add.php');">Добавить</label></li>
                                        <li><label onclick="upload('form_id', 'functions/delete.php');">Удалить</label></li>
                                        <li><label onclick="upload('form_id', 'functions/update.php');">Изменить</label></li>
                                    </ul>
                                    <li><a href='template.php'>Вернуться на основной сайт</a></li>
                                </ol>
                            </div>
                        </form>
                    </td>
                    <td id=cont valign=top><?php
                        $php = $_POST[phptext] ? $_POST[phptext] : 'functions/add.php';
                        include_once $php;
                        ?></td>
                </tr>
            </table>
        </td>

    </tr>
    <tr>
        <td id=phones>
            <p align="center">Открыты с 9:00-20:00. Звоните 987654321!</p>
        </td>
    </tr>
    <tr>
        <td id=foot>
            <p class=footer>&copy 2020</p>
        </td>
    </tr>
</table>
</body>
</html>