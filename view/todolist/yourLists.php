<div class="container">
	<div class="row">
<?php if (empty($lists[0])) { ?>
			<p>you don't seem to have any lists yet</p>
<?php } ?>
		
<?php foreach ($lists as $list) { ?>
		<div class="col" style="border-style:solid; border-color:red;">
			<h2><?= $list["name"] ?></h2>
			<a style="margin-right:30px" href="<?= URL ?>todolist/editList/<?= $list["id"] ?>"><button class="btn btn-secondary">edit list name</button></a>
			<a href="<?= URL ?>todolist/newListItem/<?= $list["id"] ?>"><button class="btn btn-secondary">New list item</button></a><br><br>
			
<?php foreach ($listItems as $listItem) { ?>
<?php if ($listItem["List_id"] == $list["id"]) { ?>
				<div style="border-style:solid; border-color:red;">
				<p><?= $listItem["name"] ?></p>
				<p><?= $listItem["description"] ?></p>
				
				<input type="checkbox" id="<?= $listItem->id ?>" <?php if ($listItem["status"] == 1) { ?>
				checked
				<?php } ?>
				><label for="status">DONE</label><br>
				
				<a style="margin-right:30px" href="<?= URL ?>todolist/editListItem/<?= $listItem["id"] ?>"><button class="btn btn-secondary">Edit item</button></a>
				<a href="<?= URL ?>todolist/deleteListItem/<?= $listItem["id"] ?>"><button class="btn btn-secondary">Delete item</button></a><br><br>
				</div>
<?php }} ?>
			<br>
			<a href="<?= URL ?>todolist/deleteList/<?= $list->id ?>"><button class="btn btn-secondary">Delete list</button></a><br><br>
		</div>
<?php } ?>
		
	</div>
	<a class="nav-link" href="<?= URL ?>todolist/newList"><button class="btn btn-secondary">make a new list</button></a><br><br>
</div>