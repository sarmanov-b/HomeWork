<!DOCTYPE html> 
<html>
<head>
	<title></title>
</head>
<body>
	<?php require_once 'second.php'; ?>

	<?php
		$mysqli = new mysqli('localhost', 'root', '', 'berik') or die(mysql_error($mysqli));
		$result = $mysqli->query("SELECT * FROM data")or die($mysqli->error);
	?>
	<div>
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Surname</th>
					<th>Email</th>
				</tr>
			</thead>
			<?php
				while ($row = $result->fetch_assoc()):
			?>		
				<tr>
					<th><?php echo $row['id']; ?></th>
					<th><?php echo $row['name']; ?></th>
					<th><?php echo $row['surname']; ?></th>
					<th><?php echo $row['email']; ?></th>
					<th>

						<a href="first.php?delete=<?php echo $row['id']; ?>">Delete
						</a>
				

					<th>
				</tr>
			<?php endwhile; ?>
		</table>
	</div>

	<form method="POST" action="first.php">
		<div>
			<label>ID</label>
			<input type="text" name="id">
		</div>
		<div>
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Surname</label>
			<input type="text" name="surname">
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email" >
		</div>
		<div>
			<button type="submit" name="save" >Save</button>
		</div>
	</form>
</body>
</html>
