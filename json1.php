<?php 

function getData ($filter)
{
	$json = '{  "firstName": "Иван",
  "lastName": "Иванов",
  "address": "г.Москва, ул. Алиева,2",
  "phoneNumber": "812 123-1234"
}, {
  "firstName": "Александр",
  "lastName": "Васенев",
  "address": "г.Москва, ул. генерала Глаголева,25к1",
  "phoneNumber": "9850615-0171"
}
';


$data = file_get_contents("$json"); 
$data1 = json_decode($data, TRUE); 


foreach ($data1 as $i => $item) {
	if (isset($filter['address'])) {
		if ($item['address'] != $filter['address']) {
			unset($data[$i]);
		}
	}
}

return $data;
}
