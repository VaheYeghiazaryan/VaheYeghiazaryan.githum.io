<?php
if(!empty($_post['name']) AND !empty($_post['email']) AND !empty($_post['subject']) AND !empty($_post['message'])){
	$headers= 'From: Վահե Եղիազարյան' \r\n .
			  'Reply-to: vaheyeghiazaryan9@gmail.com\r\n'.
			  'X-Mailer: PHP/'. phpversion();

	$theme = 'Նոր Հաղորդագրություն':

	$letter ='Հաղորդագրության պարունակությունը:\r\n';
	$letter .='Անուն:'.$_post['name'].'\r\n' ;
	$letter .='Էլ. փոստ:'.($_post['email'].'\r\n' ;
	$letter .='Թեմա:'.$_post['subject'].'\r\n' ;
	$letter .='Հաղորդագրություն:'.$_post['message'].'\r\n' ;
	if(mail('vaheyeghiazaryan9@gmail.com', 'Նոր հաղորդագրություն', $theme, $letter, $headers)){
		header('location:/thankyou.html');
	}
}else{
	header('location:/');
}
else{
	header('location:/');
}