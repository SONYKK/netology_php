<?php
require_once ('test.php');
if ($_POST) {
	$testName = isset($_FILES['test']['name']) ? $_FILES['test']['name']: '';
	$testTmpFileName = isset($_FILES['test']['tmp_name']) ? $_FILES['test']['tmp_name']: '';
	$successMoved = false;
	if ($testTmpFileName) {
		$testFileName = __DIR__ . '/files/' . md5($testName);
		$successMoved = move_uploaded_file($testTmpFileName, $testFileName);
		if (!$successMoved) {
			$error[] = "Не удалось загрузить тестовый файл";
		}
	}
	if (!$error) {
		$fileName = __DIR__ . '/data.json';
		$data = json_decode(file_get_contents($fileName), true);
		
	}
		if (!$error) {
			header("Location:/");
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
	<p>Выберите файл формата .json с тестом</p>
	<form enctype="multipart/form-data" action="/" method="post">
	<label for="file">Тестовый файл</label>
	<input type="file" name="file" id="file">
	<input type="submit" value="Загрузить">
	</form>

</body>