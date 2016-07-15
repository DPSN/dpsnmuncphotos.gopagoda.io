<?php
#function directory listing into table form
function dir_table($path) {
	$dirhandle = scandir($path);
	$ctr = 0;
	$print_str = "";
	foreach($dirhandle as $filename) {
		if($filename == '.' || $filename == '..') continue;
		$ctr++;
		if($ctr % 3  == 1) {
			$print_str = $print_str."<tr>"."<td><a href=\"".$path."/".$filename."\"><img src=\"file.png\"><br/>".$filename."</a></td>";
		}
		else if($ctr % 3 == 0) {
			$print_str = $print_str."<td><a href=\"".$path."/".$filename."\"><img src=\"file.png\"><br/>".$filename."</a></td>"."</tr>";
		}
		else {
			$print_str = $print_str."<td><a href=\"".$path."/".$filename."\"><img src=\"file.png\"><br/>".$filename."</a></td>";
		}
	}
	if($ctr % 3 != 0) {
		$print_str = $print_str."</tr>";
	}
	return $print_str;
}
