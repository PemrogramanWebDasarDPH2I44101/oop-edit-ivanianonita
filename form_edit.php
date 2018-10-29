<?php

$angka2=$_GET('input2');
$result=$kalkulator->view_data($angka2);
$row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="input2">
	<form action="index.php" method="POST">
		Nama : <input type="text" name="input1" values="<?php echo $row['nama'];?>"><br>
		Nim  : <input type="text" name="input2" values="<?php echo $row['nim'];?>"><br>
		<input type="submit" values="submit">
	</form>
</body>
</html>
?>