<?php
if($this->login=='')redirect('admin_control/'); 
		$segment3=$this->uri->segment(3);
		$segment4=$this->uri->segment(4);
		$segment5=$this->uri->segment(5);
		
		if($segment3 !='')
		{ 
			if(is_numeric($segment3))
			{
				$app_id=$segment3;
			}else{
				$type=$segment3;
			}
		}
		
		if(isset($type) && isset($segment5))
		{
			$id=$segment5;
			$app_id=$segment4;
		}
		
		// update per_page
		if(isset($_POST['btnchange']))
		{
			if($_POST['page']!='' && $_POST['page']>0)
			{
				$this->db->where('id', $this->login->id);
				$this->db->update('user',array('per_page' => $_POST['page']));
			}
			redirect('admin_control/result/'.$_POST['app_id']); 
		}
		// select ra thong tin user
		$per_page=$this->thuvien->selectone('user',array('id'=>$this->login->id));
		$data['per_page']=$per_page;
		
		$data_type=$this->thuvien->selectone('app',array('id'=>$app_id));
		$data['data_type']=$data_type;
		
		if(isset($type) && $type!='')
		{
			// selectone show su lieu ra form
			if(isset($type) && $type=='form' && isset($id) && is_numeric($id))
			{
				$detail=$this->thuvien->selectone('result',array('id'=>$id));
				$data['detail']=$detail;
			}
			//xoa 1 ban ghi
			if(isset($type) && $type=='del' && isset($id) && is_numeric($id))
			{
				$this->db->delete('result', array('id' => $id));
				redirect('admin_control/result/'.$app_id); 
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
					$this->db->update('result',$dulieu,array('id' => $od));
					redirect('admin_control/result/'.$_POST['app_id']); 
				}
				else
				{
					//insert
					unset($_POST['od']);
					unset($_POST['btnGui']);
					if(!isset($_POST['img']))$_POST['img']='';
					$dulieu=$this->input->post(NULL, TRUE);
					$this->db->insert('result',$dulieu);
					redirect('admin_control/result/'.$_POST['app_id']); 
				}
			}
			// xoa nhieu ban ghi
			if(isset($_POST['btnxoa']) && isset($_POST['cbitem']) && count($_POST['cbitem'])>0)
			{
				$listid=$_POST['cbitem'];
				for($i=0;$i<=count($listid);$i++)
				{
					$this->db->delete('result', array('id' => $listid[$i]));
				}
				redirect('admin_control/result/'.$app_id); 
			}
			//selectall
			$this->data['link']=$this->url_admin.'result/'.$app_id;
			$tukhoa=$this->input->post('tukhoa', TRUE);
			$data['tukhoa']=$tukhoa;
			$where=array();
			$where['app_id']=$this->uri->segment(3);
			$tt=$this->uri->segment(4);
			$segment=4;
			$data['data_result']=$this->thuvien->selectall('result',$per_page->per_page,$this->data['link'],'id DESC','text;'.$tukhoa,$where,$tt,$segment);
		}
		if(isset($type))$data['type']=$type;
		if(isset($app_id))$data['app_id']=$app_id;
		if(isset($id))$data['id']=$id;
		$data['login']=$this->login;
		$data['template']='result/result';
		$data['url_admin']=$this->url_admin;
		$this->load->view('backend/index',$data);	
?>