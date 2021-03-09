<div class="container">
	<div class="row">
		<div class="col">
			<form action="<?= URL ?>todolist/createNewListItem" method='POST'>
				<h4>List name</h4>
				<input class="text" type="text" required name="listItemName"><br><br>
				<h4>description</h4>
				<textarea rows="8" cols="60" name="description"></textarea>
				<input type="hidden" type="number" name="List_id" value="<?= $id ?>"><br><br>
				<input class="btn btn-secondary" type="submit" value="make new list item">
			</form>
		</div>
	</div>
</div>