<html>
	<head>
		<title>Homewok #6 (Web)</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" href="main.css" type="text/css"/>
		<style>
			table {
				font-family: Sans-Serif;
				font-size: 14px;
				border-collapse: collapse;
				text-align: center;
			}
			th, td:first-child {
				background: #AFCDE7;
				color: white;
				padding: 10px 20px;
			}
			th, td {
			border-style: solid;
			border-width: 0 1px 1px 0;
			border-color: white;
			}
			td {
			background: #D8E6F3;
			}
			body {
			background: rgb(240,240,240);
			}			
		</style>
	</head>
	<body style="margin: 0;">
		<div class="header">
			<h1>Лабораторная работа #6</h1>
		</div>

<?php
$start=microtime(true);
$x = (int) $_GET['x'];
$y = (int) $_GET['y'];
$R = (int) $_GET['R'];
/*
if (empty($x)) die ("Введите x!");
if (empty($y)) die ("Введите y!");
if (empty($R)) die ("Введите R!");
if (empty($y) && !empty($_GET['y'])) die ("Переменная у введена неверно.");
*/
if ($x<-3|| $x>5 || !is_int($x)) die ("Ввод данных через адресную строку запрещен. Пожалуйста, используйте форму для ввода данных.");
if ($y>5 || $y<-3) die ("Ввод данных через адресную строку запрещен. Пожалуйста, используйте форму для ввода данных.");
if ($R>5 || $R<1 || !is_int($R)) die ("Ввод данных через адресную строку запрещен. Пожалуйста, используйте форму для ввода данных.");

;
$current_time = date("H:i:s");
$script_time_duration = microtime(true) - $start;
echo "
<div style=\"margin: 30px 30px;\">
<table>
	<tr>
		<th>Переменная</th>
		<th>Значение</th>
	</tr>
	<tr>
		<td>x</td>
		<td>$x</td>
	</tr>
	<tr>
		<td>y</td>
		<td>$y</td>
	</tr>
	<tr>
		<td>R</td>
		<td>$R</td>
	</tr>
</table>
<p>
Текущее время: $current_time<br/>
Время работы скрипта:	$script_time_duration
</p>
</div>
";
?>
</body>
</hmtl>
