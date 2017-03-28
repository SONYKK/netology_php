<?php 

require_once 'json1.php';
?>

<!doctype html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<title>Table</title>
</head>
<body>
	<table>
		<tr>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Адресс</th>
			<th>Телефон</th>
		</tr>
		
		<?php foreach (getData () as $item) : 
			if ($item['address'] === 'Москва') : ?>
			<tr>
				<td><?php echo $item['firstName'] ?></td>
				<td><?php echo $item['lastName'] ?></td>
				<td><?php echo $item['address'] ?></td>
				<td><?php echo $item['phoneNumber'] ?></td>
			
			</tr>
			<?php endif; ?>
		<?php endforeach; ?>
			
		
	</table>
</body>
