<?php
header('Content-Type: text/cache-manifest');
echo "CACHE MANIFEST\n";

$hashes = "";

$dir = new RecursiveDirectoryIterator(".");
foreach(new RecursiveIteratorIterator($dir) as $file) {
	if($file->isFile() && $file != "./manifest.php" && substr($file->getFileName(), 0, 1) != "."){
		echo $file . "\n";
		$hashes .= md5_file($file);
	}
}
echo "# Hash: " . md5($hashes) . "\n";
?>
