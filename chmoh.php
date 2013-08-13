<?php
function chmod_R($path, $perm) {
	// Функция рекурсивно выставляет всем файлам и папкам в текущей директории права доступа 0777
	$handle = opendir($path);
	while ( false !== ($file = readdir($handle)) ) {
		if ( ($file !== "..") ) {
			@chmod($path . "/" . $file, $perm);
			if ( !is_file($path."/".$file) && ($file !== ".") )
				chmod_R($path . "/" . $file, $perm);
		}
	}
	closedir($handle);
}
$path = $_SERVER["QUERY_STRING"];
if ( $path{0} != "/" )
	$path = $_SERVER["DOCUMENT_ROOT"] . "/" . $path;
// измените права доступа здесь, если не выставляются права 777
chmod_R($path, 0777);
echo $path;
?>