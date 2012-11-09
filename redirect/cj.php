<?php
/*
array(6) {
  ["v"]=>
  string(5) "1.0.0"
  ["did"]=>
  string(5) "DJBMM"
  ["z"]=>
  string(2) "16"
  ["x"]=>
  string(5) "58200"
  ["y"]=>
  string(5) "25778"
  ["type"]=>
  string(3) "png"
}
*/
$v = intval($_GET["v"]);
$did = htmlentities($_GET["did"]);
$z = intval($_GET["z"]);
$x = intval($_GET["x"]);
$y = intval($_GET["y"]);
$y = pow(2,$z) - $y;	// 上下反転
$type = htmlentities($_GET["type"]);

$xx = sprintf("%07d", $x);
$yy = sprintf("%07d", $y);
$x0 = $xx[0]; $y0 = $yy[0];
$x1 = $xx[1]; $y1 = $yy[1];
$x2 = $xx[2]; $y2 = $yy[2];
$x3 = $xx[3]; $y3 = $yy[3];
$x4 = $xx[4]; $y4 = $yy[4];
$x5 = $xx[5]; $y5 = $yy[5];

// ズームレベルで名称を切り替え
if ( $z == 18 ) {
	if ( $did == "DJBMM" ) {
		$did = "FGD";
		$type = "png";
	} else {
		$did = "TOHO2";
		$type = "jpg";
	}
} else if ( ($z>=15) && ($z<=17) ) {
	// ここはレイヤー名から
} else if ( ($z>=12) && ($z<=14) ) {
	$did = "BAFD200K";
	$type = "png";
} else if ( ($z>=9) && ($z<=11) ) {
	$did = "BAFD1000K";
	$type = "png";
} else if ( ($z>=5) && ($z<=8) ) {
	$did = "JAIS";
	$type = "png";
} else if ( ($z>=0) && ($z<=4) ) {
	$did = "GLMD";
	$type = "png";
} else {
	header("Location: http://cyberjapandata.gsi.go.jp/sqras/transparent.png");
}
$url = "http://cyberjapandata.gsi.go.jp/sqras/all/{$did}/latest/{$z}/{$x0}{$y0}/{$x1}{$y1}/{$x2}{$y2}/{$x3}{$y3}/{$x4}{$y4}/{$x5}{$y5}/{$xx}{$yy}.{$type}";
header("Location: {$url}");

?>