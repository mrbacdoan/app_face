<?php
if(isset($type) && $type=="form")
{
	include('answer_form.php');
}
else
{
	include('answer_list.php');
}
?>