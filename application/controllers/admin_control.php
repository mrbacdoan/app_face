<?php
//Khai báo 1 đối tượng trùng tên với file Controler
//Khi khai báo 1 đối tượng controller bắt buộc kế thừa từ đối tượng quy định tên là  "CI_Controller"
class Admin_control extends CI_Controller
{
	private $data,$login,$url_admin;
	function __construct()
	{
		parent::__construct();//Gọi lại chính PT __construct của đối tượng cha
		$this->load->model('thuvien');//Khởi tạo thư viện
		$this->load->helper('url');
		$this->load->library('session');
		$this->login=$this->session->userdata('login');
		$this->load->library('form_validation');
		$this->url_admin=base_url().'admin_control/';
	}
	public function index()
	{
		require('admin_control/index.php');
	}
	public function user()
	{
		require('admin_control/user.php');
	}
	public function logout()
	{
		require('admin_control/logout.php');
	}
	public function app()
	{
		require('admin_control/app.php');
	}
	public function question()
	{
		require('admin_control/question.php');
	}
	public function answer()
	{
		require('admin_control/answer.php');
	}
	public function result()
	{
		require('admin_control/result.php');
	}
}

?>