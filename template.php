<?// echo "<pre>"; print_r($_POST); echo "</pre>";?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Сладкое королевство</title>
		<style>
			
			#foot .footer{
				text-align:center;
				color:#777777
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
				<p id = header align="center">Добро пожаловать в Сладкое королевство!!</p>
			</td>
		</tr>
		<tr>
			<td id=ts>
				<table>
					<tr>
						<td id=menu height=350px valign=top>
							<form action="template.php" method="post" id = "form_id">
                                <input id = phptext type = hidden name="phptext">
								<div>
									<ol class = sp>
                                        <li><label onclick="upload('form_id', 'menu/us.php');">О нас</label></li>
										<li><label onclick="upload('form_id', 'menu/menu.php');">Меню</label></li>
										<ul>
											<li><label onclick="upload('form_id', 'menu/bakery.php');">Выпечка</label></li>
											<li><label onclick="upload('form_id', 'menu/coffee.php');">Кофе</label></li>
											<li><label onclick="upload('form_id', 'menu/tea.php');">Чай</label></li>
											<li><label onclick="upload('form_id', 'menu/drinks.php');">Прохладительные напитки</label></li>
										</ul>
										<li><a href=#>Адреса</a></li>
										<li><a href=#>Контакты</a></li>
									</ol>
								</div>
							</form>
						</td>
                            <td id=cont valign=top><?php
                                include_once $_POST[phptext];
                            ?></td>
					</tr>
				</table>
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