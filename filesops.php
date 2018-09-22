<?php
function savefile($arr, $file){
	return file_put_contents($file, implode('', $arr));
	// Для вызова: $z = savefile($arr, $file);
	
	/*
	 * Для записи без первой строки:
	 * unset ($arr[0]);
	 * $z = savefile($arr, $file);
	*/
}

/* function savefile2($arr, $file){
	$fd = fopen($file, 'r');
	$tm = fopen($tmpname = tempnam('.', 'list'), 'w+');
	if($fd === false) exit('Не могу открыть целевой файл');
	if($tm === false) exit('Не могу открыть временный файл');
	$i = 0;
	while (($arr= fgets($fd)) !== false) {
		if(++$i == 1) continue;
		fwrite($tm, $arr);
	}
	fclose($fd);
	fclose($tm);
	rename($tmpname, $file);
	return true;
} */