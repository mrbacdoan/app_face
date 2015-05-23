<?php
if(isset($type) && $type=="form")
{
	include('result_form.php');
}
else
{
	include('result_list.php');
}
?>