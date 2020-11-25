<html>

<head>
<title>17BCE0343 CSE3002 DA-2</title>
</head>

<body>

<?php

$c = $_POST["message"];
$c = preg_replace("/\s+/", "", $c);

if(is_numeric($c)==1){

$myfile = fopen("newfile.txt", "w");
fwrite($myfile, $_POST["message"]);
fclose($myfile);

$file = fopen("newfile.txt","r");

echo "<h3>Data: </h3>";

while(! feof($file))
  {
  echo fgets($file). "<br />";
  }

fclose($file);

$file = fopen("newfile.txt","r");
$arr=array();
while(! feof($file))
  {
    $x = fgets($file);
    array_push($arr, $x);
  }

fclose($file);

/*print_r($arr);
echo "<br>";*/

$l = (int)$_POST["line"];
$l = $l - 1;
echo "<h3>Line Number: </h3>";
echo $l;
echo "<br>";

$l = $arr[$l];
echo "<h3>Line Data: </h3>";
echo $l;
echo "<br>";

$arrf = explode(' ', $l);
//print_r($arrf);

$r = (int)0;

foreach ($arrf as $v) {
$r = $r + (int)$v;
}

echo "<h3>Answer: </h3>";
echo $r;

}

?> 

</body>

</html>