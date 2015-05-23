<?php
if(isset($_POST['btnlog']))
		{
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('pass', 'mật khẩu', 'required');
			$this->form_validation->set_message('required', 'Phiền bạn nhập %s');
			$this->form_validation->set_message('valid_email', 'Bạn nhập chưa đúng định dạng email');
			if ($this->form_validation->run() == TRUE)
			{
					$email=$this->input->post('email',true);
					$pass=md5($this->input->post('pass',true));
					$this->db->where(array('email'=>$email,'password'=>$pass));
					$query=$this->db->get('user');
					if($query->num_rows()>0){//Đăng nhập thành công
							$dulieu=$query->result();
							$newdata["login"]=$dulieu[0];
							$this->session->set_userdata($newdata);//Lưu vào biến SESSION
							$this->login=$this->session->userdata('login');
					}else{//Đăng nhập không thành công
						$data['error']='Email hoặc mật khẩu sai';
						$this->load->view('backend/login',$data);
						return;
					}	
			}
		}
		if($this->login=='')
		{
			$data['url_admin']=$this->url_admin;
			$this->load->view('backend/login',$data);
		}
		else{
			$data['login']=$this->login;
			$data['template']='home/home';
			$data['url_admin']=$this->url_admin;
			$this->load->view('backend/index',$data);
		}
?>