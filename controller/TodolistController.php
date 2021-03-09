<?php 
require(ROOT . "model/ToDoListModel.php");

function index()
{
	render("todolist/index", array(
		'directory' => "todolist")
	);
}

function yourLists()
{
	$lists = generateLists(1);
	$listItems = generateList_items(1);

	render("todolist/yourLists", array(
		'directory' => "todolist",
		'lists' => $lists,
		'listItems' => $listItems)
	);
}

function newList()
{
	render("todolist/newList", array(
		'directory' => "todolist")
	);
}

function newListItem()
{
	render("todolist/newListItem", array(
		'directory' => "todolist")
	);
}

function createNewList()
{
	//var_dump($_POST);
	if (createList(1)) {
		header("location:" . URL . "todolist/yourLists");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();	
	}
}

function createNewListItem()
{
	//var_dump($_POST);
	if (createListItem(1)) {
		header("location:" . URL . "todolist/yourLists");
		exit();
	} else {
		header("location:" . URL . "error/error_db");
		exit();	
	}
}