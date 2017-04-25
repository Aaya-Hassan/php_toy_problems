 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php 
 	function is_prime($n){
 		for( $i = 2; $i < $n; $i++) {
 			if($n % $i === 0) {
 				return "The number is prime";
 			} 
 		}
 		return "number is not prime";
 	}
 	echo is_prime(19);
 	?>
 </body>
 </html>
 