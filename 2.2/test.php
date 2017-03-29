<?php
if ($_GET) {
	$error = array ();
	$options = array (
	'options' => array (
		'min_range' => 0,
		'max_range' => 100000
		)
	);
	$sum = filter_input(INPUT_GET, 'sum', FILTER_VALIDATE_INT, $options);
		if (false === $sum) {
			$error[] = "Номер ответа не корректен";
		}
	if (!$error) {
		$data = array('sum' => $sum, );

	
	$testName = isset($_FILES['test']['name']) ? $_FILES['test']['name']: '';
	$testTmpFileName = isset($_FILES['test']['tmp_name']) ? $_FILES['test']['tmp_name']: '';
	$successMoved = false;
	if ($testTmpFileName) {
		$testFileName = __DIR__ . '/files/' . md5($testName) . '.json';
		$successMoved = move_uploaded_file($testTmpFileName, $testFileName);
		if (!$successMoved) {
			$error[] = "Не удалось загрузить тестовый файл";
		}

	if (!$error) {
		$fileName = __DIR__ . '/data.json';
		$data = json_decode(file_get_contents($fileName), true);
		$newData = array('sum' => $sum);
		if ($successMoved) {
			$newData['file_path'] = $testFileName;
			$newData['file_name'] = $testName;
		}
		if (file_put_contents($fileName, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
			$error[] = "Не удалось сохранить данные";
		}
	}
	$list = file_put_contents(__DIR__ . './list.php', $testName);
		if (!$error) {
			header("Location:/");
		}
		
	}
}


?>
<!doctype html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<title>Test</title>
</head>
<body>
	<form action="/" method="post">
	<label for="sum">2+2=? </label>
	<input id="sum" type="text" name="sum" <?= isset($_GET['sum']) ? $_GET['sum'] : '' ?> placeholder="Введите номер ответа">
	<input type="submit" value="Проверить">
	</form>
</body>
</html>