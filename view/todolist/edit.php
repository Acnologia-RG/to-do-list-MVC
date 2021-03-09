<div class="container">
	<div class="row">
		<div class="col">
<?php if ($edit == "list") {?>

			<form action="<?= URL ?>todolist/updateList" method='POST'>
				<h4>item name</h4>
				<input class="text" type="text" value="<?= $list[0]->name ?>" required name="listName"><br><br>
				<input type="hidden" type="number" name="List_id" value="<?= $list[0]->id ?>"><br><br>
				<input class="btn btn-secondary" type="submit" value="update list">

<?php } elseif ($edit == "item") {?>

			<form action="<?= URL ?>todolist/updateListItem" method='POST'>
				<h4>item name</h4>
				<input class="text" type="text" value="<?= $listItem[0]->name ?>" required name="listItemName"><br><br>
				<h4>description</h4>
				<textarea rows="8" cols="60" name="description"><?= $listItem[0]->description ?></textarea>
				<input type="hidden" type="number" name="List_id" value="<?= $listItem[0]->id ?>"><br><br>
				<input class="btn btn-secondary" type="submit" value="update list item">

<?php }?>
			</form>
		</div>
	</div>
</div>