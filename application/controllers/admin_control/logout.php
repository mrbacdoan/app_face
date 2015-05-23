<?php
if($this->login=='') header('Location:'.$this->url_admin);	
		$this->session->unset_userdata('login');
		header('Location:'.$this->url_admin);	
?>