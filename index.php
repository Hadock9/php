<!DOCTYPE html>
<html>
<head>
	<title>Hub</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="pictures/Icon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="./js/my.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>
<body>

<div class="intro">
    <?php
    require("./config.php");
    ?>
	<div class="box">
		<div><h3 class="Creator">Vasya Falyovskij</h3></div>
		<div><h3 class="Creator">Group: ІПЗ-23 </h3></div>
		<div><h3 class="Creator">Variant: 24 or 4</h3></div>
	</div>

	<div class="Welcome_to_Hub">
		<span class="Creative">Creative</span>
		<div><h1 class="Hub">Welcome to Hub</h1></div>
		<div class="line"></div>
		<div class="Learn_moredv"><a href="#What_to_do" class="Learn_more">Learn more</a></div>
	</div>
</div>

<div class="service">
	<div id="What_to_do" class="What_to_do">
		<span>I create</span>
	</div>
	<div class="Story_about_us">
		<span>Labs</span>
	</div>
	<div class="line active"></div>

	<div class="container">
		<div class="line1">
			<div class="serv_line" onclick="location.href='lab1/index_lab1.php';" style="cursor: pointer;">
				<img class="Amazing_Services_img" src="pictures/labs/lab1.png">
				<div class="serv_alltxt">
					<div class="servisces_title">lab 1 <span>Active</span></div>
					<div class="servisces_text"><p><a class="labs_text" href="lab1/index_lab1.php">Лабораторна робота 1</a></p></div>
				</div>
			</div>
			<div class="serv_line" onclick="location.href='lab2/index_lab2.php';" style="cursor: pointer;">
				<img class="Amazing_Services_img" src="pictures/labs/lab1.png">
				<div class="serv_alltxt">
					<div class="servisces_title">lab 2 <span>Active</span></div>
					<div class="servisces_text"><p><a class="labs_text" href="lab2/index_lab2.php">Лабораторна робота 2</a></p></div>
				</div>
			</div>
			<div class="serv_line" onclick="location.href='lab3/index_lab3.php';" style="cursor: pointer;">
				<img class="Amazing_Services_img" src="pictures/labs/lab1.png">
				<div class="serv_alltxt">
					<div class="servisces_title">lab 3 <span>Active</span></div>
					<div class="servisces_text"><p><a class="labs_text" href="lab3/index_lab3.php">Лабораторна робота 3</a></p></div>
				</div>
			</div>
		</div>

		<div class="line2">
			<div class="serv_line" onclick="location.href='lab4/index_lab4.php';" style="cursor: pointer;">
				<img class="Amazing_Services_img" src="pictures/labs/lab1.png">
				<div class="serv_alltxt">
					<div class="servisces_title">lab 4 <span>Active</span></div>
					<div class="servisces_text"><p><a class="labs_text" href="lab4/index_lab4.php">Лабораторна робота 4</a></p></div>
				</div>
			</div>
			<div class="serv_line" onclick="location.href='lab5/index_lab5.php';" style="cursor: pointer;">
				<img class="Amazing_Services_img" src="pictures/labs/lab1.png">
				<div class="serv_alltxt">
					<div class="servisces_title">lab 5 <span>Active</span></div>
					<div class="servisces_text"><p><a class="labs_text" href="#">Лабораторна робота 5</a></p></div>
				</div>
			</div>
			<div class="serv_line" onclick="location.href='lab6/index_lab6.php';" style="cursor: pointer;">
				<img class="Amazing_Services_img" src="pictures/labs/lab1.png">
				<div class="serv_alltxt">
					<div class="servisces_title">lab 6 <span>Active</span></div>
					<div class="servisces_text"><p><a class="labs_text" href="lab6/index_lab6.php">Лабораторна робота 6</a></p></div>
				</div>
			</div>
		</div>

		<div class="line2">
			<div class="serv_line" onclick="location.href='lab7/index_lab7.php';" style="cursor: pointer;">
				<img class="Amazing_Services_img" src="pictures/labs/lab1.png">
				<div class="serv_alltxt">
					<div class="servisces_title">lab 7</div>
					<div class="servisces_text"><p><a class="labs_text" href="lab7/index_lab7.php">Лабораторна робота 7</a></p></div>
				</div>
			</div>
			<div class="serv_line" onclick="location.href='lab8/index_lab8.php';" style="cursor: pointer;">
				<img class="Amazing_Services_img" src="pictures/labs/lab1.png">
				<div class="serv_alltxt">
					<div class="servisces_title">lab 8</div>
					<div class="servisces_text"><p><a class="labs_text" href="lab8/index_lab8.php">Лабораторна робота 8</a></p></div>
				</div>
			</div>
			<div class="serv_line" onclick="location.href='lab9/index_lab9.php';" style="cursor: pointer;">
				<img class="Amazing_Services_img" src="pictures/labs/lab1.png">
				<div class="serv_alltxt">
					<div class="servisces_title">lab 9</div>
					<div class="servisces_text"><p><a class="labs_text" href="lab9/index_lab9.php">Лабораторна робота 9</a></p></div>
				</div>
			</div>
		</div>
		<div class="line2">
			<div class="serv_line" onclick="location.href='lab10/index_lab10.php';" style="cursor: pointer;">
				<img class="Amazing_Services_img" src="pictures/labs/lab1.png">
				<div class="serv_alltxt">
					<div class="servisces_title">lab 10</div>
					<div class="servisces_text"><p><a class="labs_text" href="lab10/index_lab10.php">Лабораторна робота 10</a></p></div>
				</div>
			</div>
			<div class="serv_line"  >
			 
			 <div class="serv_alltxt">
				
			<div class="serv_line"  >
			 
				<div class="serv_alltxt">
				 
				</div>
			</div>
		</div>
	</div>
</div>

<br>
<br>
<br>

</body>
</html>
