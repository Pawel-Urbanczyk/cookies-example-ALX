<?
/*
if(!isSet($_COOKIE['odwiedziny'])){
$odw=$_COOKIE['odwiedziny']=1;
	
}else{
$odw=$_COOKIE['odwiedziny']+1;
   
}


setcookie('odwiedziny', $odw);

echo('<pre>');
//print_r($_COOKIE);
echo('<pre>');
echo('Jesteś u nas po raz: '.$odw);
*/

if(!isSet($_COOKIE['odwiedziny'])){
$odw=$_COOKIE['odwiedziny']=1;
	
}else{
$odw=$_COOKIE['odwiedziny']+1;
   
}


setcookie('odwiedziny', $odw);

echo('<pre>');
//print_r($_COOKIE);
echo('<pre>');
echo('Jesteś u nas po raz: '.$odw);

?>