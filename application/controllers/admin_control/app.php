<?php
if($this->login=='')redirect('admin_control/'); 
		$segment3=$this->uri->segment(3);
		if(!is_numeric($segment3))
		{
			$type=$segment3;
		}
		$id=$this->uri->segment(4);
		
		// update per_page
		if(isset($_POST['btnchange']) && $_POST['page']!='' && $_POST['page']>0)
		{
			$this->db->where('id', $this->login->id);
			$this->db->update('user',array('per_page' => $_POST['page']));
		}

		// select ra thong tin user
		$per_page=$this->thuvien->selectone('user',array('id'=>$this->login->id));
		$data['per_page']=$per_page;
		
		if(isset($type) && $type!='')
		{
			// selectone show su lieu ra form
			if(isset($type) && $type=='form' && isset($id) && is_numeric($id))
			{
				$detail=$this->thuvien->selectone('app',array('id'=>$id));
				$data['detail']=$detail;
			}
			//xoa 1 ban ghi
			if(isset($type) && $type=='del' && isset($id) && is_numeric($id))
			{
				$this->db->delete('app', array('id' => $id));
				redirect('admin_control/app'); 
			}
		}
		else
		{
			if(isset($_POST['btnGui']))
			{
				if(isset($_POST['od']))$od=$_POST['od'];
				if(isset($od) && is_numeric($od))
				{
					//update
					unset($_POST['od']);
					unset($_POST['btnGui']);
					$dulieu=$this->input->post(NULL, TRUE);
					$this->db->update('app',$dulieu,array('id' => $od));
					redirect('admin_control/app'); 
				}
				else
				{
					//insert
					unset($_POST['od']);
					unset($_POST['btnGui']);
					$dulieu=$this->input->post(NULL, TRUE);
					$this->db->insert('app',$dulieu);
					redirect('admin_control/app'); 
				}
			}
			// xoa nhieu ban ghi
			if(isset($_POST['btnxoa']) && isset($_POST['cbitem']) && count($_POST['cbitem'])>0)
			{
				$listid=$_POST['cbitem'];
				for($i=0;$i<=count($listid);$i++)
				{
					$this->db->delete('app', array('id' => $listid[$i]));
				}
				redirect('admin_control/app'); 
			}
			//selectall
				$this->data['link']=$this->url_admin.'app';
				$tukhoa=$this->input->post('tukhoa', TRUE);
				$data['tukhoa']=$tukhoa;
				$where='';
				$tt=$this->uri->segment(3);
				$data['data_app']=$this->thuvien->selectall('app',$per_page->per_page,$this->data['link'],'id DESC','name;'.$tukhoa,$where,$tt);
		}
		if(isset($type))$data['type']=$type;
		$data['id']=$id;
		$data['login']=$this->login;
		$data['template']='app/app';
		$data['url_admin']=$this->url_admin;
		$this->load->view('backend/index',$data);	
?>