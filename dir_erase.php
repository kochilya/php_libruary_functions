<?php
function removeDirectory($dir) {
	// Функция удаляет рекурсивно все поддиректории и файлы в них и указанную дирректорию
	if ($objs = glob($dir."/*")) {
		foreach($objs as $obj) {
			is_dir($obj) ? removeDirectory($obj) : unlink($obj);
		}
	}
	rmdir($dir);
}
removeDirectory($_GET['dir'])
?>