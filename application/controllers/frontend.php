<?php
//Khai báo 1 đối tượng trùng tên với file Controler
//Khi khai báo 1 đối tượng controller bắt buộc kế thừa từ đối tượng quy định tên là  "CI_Controller"
class Frontend extends CI_Controller
{
	private $data,$login;
	function __construct()
	{
		parent::__construct();//Gọi lại chính PT __construct của đối tượng cha
		$this->load->model('thuvien');//Khởi tạo thư viện
		$this->load->helper('url');
	}
	public function index()
	{
		echo "Day la trang chu";
	}
	public function logout()
	{
		if($this->login=='') header('Location:'.base_url().'index.php/Admin');	
		$this->session->unset_userdata('login');
		header('Location:'.base_url().'index.php/Admin');	
	}
}

?>