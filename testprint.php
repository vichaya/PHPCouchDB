<?php
	$a = 3.555555;
	$str = '"thailand" = sum option test';
	printf("|%8s|</br>",$str);
	printf("strtoupper = |%8s|</br>",strtoupper($str));
	printf("strtolower = |%8s|</br>",strtolower($str));
	printf("ucfirst = |%8s|</br>",ucfirst($str));
	printf("ucwords = |%8s|</br>",ucwords($str));
	printf("addslashes = |%8s|</br>",addslashes($str));
	printf("substring 1-8 = |%8s|</br>",substr($str,1,8));
	
	$str1 = '2';
	$str2 = '12';
	$str3 = 'aB';
	$str4 = 'AB';
	$aaa = 'str4';
	printf('strcasecmp(2,12) = %8d</br>',strcasecmp($str1,$str2));
	printf('strcasecmp(aB,AB) = %8d</br>',strcasecmp($str3,$str4));
	printf('strnatcmp(2,12) = %8d</br>',strnatcmp($str1,$str2));
	printf('strnatcmp(aB,AB) = %8d</br>',strnatcmp($str3,$str4));
	printf('strnatcasecmp(2,12) = %8d</br>',strnatcasecmp($str1,$str2));
	printf('strnatcasecmp(aB,AB) = %8d</br>',strnatcasecmp($str3,$str4));
	$ass =str_replace('aB','Hello',$str3.' '.$str4);
	echo($$aaa);
	printf("$%s",$aaa)
?>

<ol>
	<li>test ol1</li>
	<li>test ol1</li>
</ol>
<ul>
	<ol>
		<li>test ul1</li>
		<li>test ul1</li>
	</ol>
</ul>