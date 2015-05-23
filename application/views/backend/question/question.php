<?php
if(isset($type) && $type=="form")
{
	include('question_form.php');
}
else
{
	include('question_list.php');
}
?>