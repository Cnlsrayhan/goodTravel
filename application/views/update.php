<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php foreach ($isi->result() as $key): ?>

		<form action="http://localhost/FastTravel/index.php/User/gantikan/<?php echo $key->id ?>" method="post" >

			<input type="text" name="username" placeholder="<?php echo $key->username ?>">
			<input type="text" name="password" placeholder="<?php echo $key->password ?>">
			<input type="text" name="fullname" placeholder="<?php echo $key->fullname ?>">
			<input type="text" name="level" placeholder="<?php echo $key->level ?>">
			<input type="submit" value="save">
		</form>


	<?php endforeach ?>
	

</body>
</html>