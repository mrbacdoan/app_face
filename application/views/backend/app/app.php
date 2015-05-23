<?php
if(isset($type) && $type=="form")
{
	include('app_form.php');
}
else
{
	include('app_list.php');
}
?>