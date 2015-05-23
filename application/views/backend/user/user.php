<?php
if(isset($type) && $type=="form")
{
	include('user_form.php');
}
else
{
	include('user_list.php');
}
?>