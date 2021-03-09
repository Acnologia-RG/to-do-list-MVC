<!DOCTYPE html>
<html>
<head>
	<title>To-Do List</title>	
	<link rel="stylesheet" href="<?= URL ?>/public/css/style.css">
	<meta charset="utf-8">
</head>
<body>
<?php
if (isset($directory)) {
		if ($directory == "todolist" ) { ?>
		<h1>to-do list</h1>
		<ul>
			<li><a href="<?= URL ?>todolist/index">home</a></li>
			<li><a href="<?= URL ?>todolist/yourLists">your lists</a></li>
		</ul>
<?php  }} ?>