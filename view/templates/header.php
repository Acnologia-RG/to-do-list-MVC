<!DOCTYPE html>
<html>
<head>
	<title>hospital</title>	
	<link rel="stylesheet" href="<?= URL ?>/public/css/style.css">
	<meta charset="utf-8">
</head>
<body>
	<nav>
		<ul>
			<li><a href="<?= URL ?>hospital/index">hospital</a></li>
			<li><a href="<?= URL ?>todolist/index">to-do list</a></li>
		</ul>
	</nav>

<?php if (isset($directory)) {
		if ($directory == "hospital" ) { ?>
		<h1>Hospital</h1>
		<ul>
			<li><a href="<?= URL ?>hospital/index">Patients</a></li>
			<li><a href="<?= URL ?>hospital/clients">Clients</a></li>
			<li><a href="<?= URL ?>hospital/species">Species</a></li>
		</ul>	
<?php  }} 

if (isset($directory)) {
		if ($directory == "todolist" ) { ?>
		<h1>to-do list</h1>
		<ul>
			<li><a href="<?= URL ?>todolist/index">home</a></li>
			<li><a href="<?= URL ?>todolist/yourLists">your lists</a></li>
		</ul>
<?php  }} ?>