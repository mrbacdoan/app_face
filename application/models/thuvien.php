<?php
class Thuvien extends CI_Model
{
	function __construct()
    {
        parent::__construct();
		$this->load->database();
		$this->load->library('pagination');
    }
	//Phương thức lấy ra toàn bộ dữ liệu
	public function selectall($table,$p=0,$link='',$order='',$tukhoa='',$where='',$tt='',$segment=3)
	{
		if($tukhoa!=''){
				$tim=explode(';',$tukhoa);
				$this->db->like($tim[0],$tim[1]); 
		}
		if($where!='')$this->db->where($where); 
		$query = $this->db->get($table);
		if($p>0){
			// so ban ghi tren 1 trang
			$config['per_page'] = $p; 
			// duong link phan trang
			$config['base_url'] = $link;
			//tinh ra tong so ban ghi
			$config['total_rows'] = $query->num_rows();
			
			$config['uri_segment'] = 4;
			//Lấy ra toàn bộ dữ liệu của bảng truyền vào và giá trả về gán lên $query
			if($order!='')$this->db->order_by($order);
			if($tukhoa!=''){
				$tim=explode(';',$tukhoa);
				$this->db->like($tim[0],$tim[1]); 
			}
			if($where!='')$this->db->where($where); 
			$query = $this->db->get($table,$config['per_page'],$tt);
			$this->pagination->initialize($config);
		}
		//Phương thức trả về dữ liệu dạng mảng
		return $query->result();
	}
	public function selectone($table,$where)
	{
		if($where!='')$this->db->where($where); 
		$query = $this->db->get($table);
		return $query->first_row();//TRả về mảng 1 chiều
	}
}

?>