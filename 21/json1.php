<?php 


$data = file_get_contents(__DIR__ . "./data.json"); 
$data1 = json_decode($data, TRUE); 

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <title>Phonebook</title>
</head>
<body>
  <table>
  <tr>
    <th>Имя</th>
    <th>Фамилия</th>
    <th>Адресс</th>
    <th>Номер телефона</th>
  </tr>

    <?php foreach ($data1 as $item) : ?>
      <tr>
        <td><?php echo $item['firstName'] ?></td>
        <td><?php echo $item['lastName'] ?></td>
        <td><?php echo $item['address'] ?></td>
        <td><?php echo $item['phoneNumber'] ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
    </body>
</html>
