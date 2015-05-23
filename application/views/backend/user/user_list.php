<ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> <a href="<?php echo $url_admin?>">Dashboard</a> / Tài khoản
    </li>
</ol>
<div class="well">
    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="<?php echo $url_admin?>user">
             <div class="form-group input-group col-lg-4" style="float:left;" >
                <p class="input-group-btn">
                <input name="tukhoa" type="text" class="form-control" placeholder="Tìm kiếm..." value="<?php if(isset($tukhoa))echo $tukhoa;?>">
                <button  type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </p>
             </div>
             </form>
            <div class="form-group input-group" style="float:right;" >
            <form method="post" action="<?php echo $url_admin?>user">
                <p class="input-group-btn">
                <input value="<?php echo $per_page->per_page;?>" type="text" name="page" class="form-control" style="width:50px !important;">
                <input type="submit" class="btn btn-primary" name="btnchange" value="Change" >
                </p>
             </form>   
             </div>
    
        </div>
        <div class="delete"></div>
        <div class="col-lg-12">
        	<div id="add" style="margin-bottom:5px;"><a href="<?php echo $url_admin;?>user/form" class="btn btn-success">Thêm mới</a></div>
            <div class="table-responsive">
            <form action="" method="post">
                <table align="center" class="table table-bordered table-hover table-striped" width="100%">
                        <tr>
                            <td width="51" align="center" style="font-weight: bold">#</td>
                            <td width="60" align="center" style="font-weight: bold"><input type="checkbox" name="cball" id="cball"></td>
                            <td width="154" align="center" style="font-weight: bold">E-mail</td>
                            <td width="103" align="center" style="font-weight: bold">SĐT</td>
                            <td width="198" align="center" style="font-weight: bold">Địa chỉ</td>
                            <td width="125" align="center" style="font-weight: bold">Giới tính</td>
                            <td width="196" align="center" style="font-weight: bold">Năm sinh</td>
                            <td width="108" align="center" style="font-weight: bold">Trạng thái</td>
                            <td colspan="2" align="center" style="font-weight: bold">Thao tác</td>
             
                        </tr>
                    	<?php
							$i=1;
							foreach($data_user as $item)
							{
						?>
                        <tr <?php if(($i%2==0)) echo "class='success'"; else echo "class='danger'";  ?>>
                            <td align="center"><?php echo $i++;?></td>
                            <td align="center"><input type="checkbox" name="cbitem[]" value="<?php echo $item->id;?>" class="checkbox"></td>
                            <td align="center"><?php echo $item->email;?></td>
                            <td align="center"><?php echo $item->phone;?></td>
                            <td align="center"><?php echo $item->address;?></td>
                            <td align="center"><?php if($item->sex==1)echo 'Nam'; else echo 'Nữ';?></td>
                            <td align="center"><?php echo $item->birthday;?></td>
                            <td align="center"  class="status">
                                    <?php if($item->status==1)echo "<i class='glyphicon glyphicon-ok'></i>";?>  
                                    <?php if($item->status==2)echo "<i class='glyphicon glyphicon-lock'></i>";?>  
                                    <?php if($item->status==0)echo "<i class='glyphicon glyphicon-question-sign'></i>";?>  
                            </td>
                            <td width="33">
                                 <a href="<?php echo $url_admin;?>user/form/<?php echo $item->id;?>">
                                <span class="label label-info"> Sửa </span></a>       
                            </td>
                            <td width="39">
                            	<a href="<?php echo $url_admin;?>user/del/<?php echo $item->id;?>" onClick="return confirm('Sư huynh có chắc muốn xóa không ?')" ><span class="label label-danger">Xóa</span></a> 
                            </td>
                        </tr>
                        <?php
							}
						?>
                </table>
                <div class="delete">
                  <div style="float:left;"><input type="submit" name="btnxoa" id="submit" value="Xóa mục chọn" onClick="return confirm('Sư huynh có chắc muốn xóa?')" class="btn btn-danger btn-xs"></div>
                    <div class="pages"><?php echo $this->pagination->create_links();?></div>
              </div>
             </form>
                
            </div>
        </div><!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
</div>
