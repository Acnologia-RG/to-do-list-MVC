<?php

function generateLists($user_id)
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM `lists` WHERE user_id = :user_id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":user_id" => $user_id
	));

	$db = null;

	return $query->fetchAll();
}

function generateList_items($user_id)
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `list_items` WHERE user_id = :user_id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":user_id" => $user_id
	));

	$db = null;

	return $query->fetchAll();
}

function createList($user_id)
{
	$db = openDatabaseConnection();

	$db = null;
	
	return true;
}

function createListItem($user_id)
{
	$db = openDatabaseConnection();

	$db = null;

	return true;
}