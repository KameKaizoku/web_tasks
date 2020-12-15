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
	</html>
	
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
							<form action="template.php">
								<div>
									<ol class = sp>
										<li><a href=#>О нас</a></li>
										<li><a href='menu/menu.php'>Меню</a></li>
										<ul>
											<li><a href=#>Выпечка</a></li>
											<li><a href=#>Кофе</a></li>
											<li><a href=#>Чай</a></li>
											<li><a href=#>Прохладительные напитки</a></li>
										</ul>
										<li><a href=#>Адреса</a></li>
										<li><a href=#>Контакты</a></li>
									</ol>
								</div>
							</form>
						</td>
						<td id=cont valign=top>
							<p>В сети наших кофеен теплая и спокойная атмосфера сочетается с изысканными сортами чая, профессионально приготовленным кофе и превосходной кухней. </p>
							<p>У нас вы можете попробовать великолепные десерты, а также превосходную японскую и европейскую кухню. Наше кофе идеально подходит как для деловых встреч, так и для приятного препровождения в кругу друзей. У нас вы всегда можете, как просто вкусно поужинать, пообедать и позавтракать, так и провести романтическое свидание или отпраздновать свой день рождения.</p>
							<p>Помимо основного меню, которое способно удовлетворить даже изысканного гостя, у нас появляются и тематические меню. Наше кафе идеально подходит как для тихого и уютного отдыха, так и для шумного и веселого празднования.</p>
						</td>
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