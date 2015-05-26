<?php
include __DIR__.'/conf.php';
$cmd=$_SERVER['QUERY_STRING'];
if(isset($conf[$cmd]))
{
	if($conf[$cmd][0]=='h'&&$conf[$cmd][6]=='/')header('location:'.$conf[$cmd]);  //is url
	else echo file_get_contents('http://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'].'/../'.$conf[$cmd]);
}
?>