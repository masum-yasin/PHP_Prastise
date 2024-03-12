<?php
function directorySize($directory) {
$directorySize=0;

if ($dh = opendir($directory)) {

while (($filename = readdir ($dh))) {

if ($filename != "." && $filename != "..")
{

if (is_file($directory."/".$filename))
$directorySize += filesize($directory."/".$filename);

if (is_dir($directory."/".$filename))
$directorySize += directorySize($directory."/".

$filename);

}
}
}
closedir($dh);
return $directorySize;
}
$directory = 'F:\xampp7\htdocs\wdpf55_php\Masum_1273758';
$totalSize = round((directorySize($directory) / 1048576), 2);
printf("Directory %s: %f MB", $directory, $totalSize);
?>
Chapter 10 Working with the File and Operating System