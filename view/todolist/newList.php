<div class="container">
	<div class="row">
		<div class="col">
			<form action="<?= URL ?>todolist/createNewList" method='POST'>
				<h5>List name</h5>
				<input class="text" type="text" required name="listName"> <br><br>
				<input class="btn btn-secondary" type="submit" value="make new list">
			</form>
		</div>
	</div>
</div>