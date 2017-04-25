<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php 
  function toMilitary ($time) {
    $h = substr($time,0,1);
    $m = substr($time,2,2);
    $ap = substr($time,4);
    if($time === "12:00am"){
      return "00:00";
    }
    if($ap === "pm"){
      $hh = $h + 12;
      return "$hh" . ":" . "$m" ;
    }elseif($ap === "am"){
      return "$h" . ":" . "$m";
    }
   return $time; 
   }
   echo toMilitary('3:00pm');
 ?>
</body>
</html>
