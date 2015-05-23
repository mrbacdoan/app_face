<ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> <a href="<?php echo $url_admin?>">Dashboard</a> / <a href="<?php echo $url_admin?>app">App</a> / Kết quả
    </li>
</ol>
<div class="well">
    <div class="row">
        <div class="col-lg-12">
            <form method="post" action="<?php echo $url_admin?>result/<?php echo $app_id;?>">
             <div class="form-group input-group col-lg-4" style="float:left;" >
                <p class="input-group-btn">
                <input name="tukhoa" type="text" class="form-control" placeholder="Tìm kiếm..." value="<?php if(isset($tukhoa))echo $tukhoa;?>">
                <button  type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </p>
             </div>
             </form>
            <div class="form-group input-group" style="float:right;" >
            <form method="post" action="<?php echo $url_admin?>/result">
            	<input type="hidden" name="app_id" value="<?php echo $app_id;?>">
                <p class="input-group-btn">
                <input value="<?php echo $per_page->per_page;?>" type="text" name="page" class="form-control" style="width:50px !important;">
                <input type="submit" class="btn btn-primary" name="btnchange" value="Change" >
                </p>
             </form>   
             </div>
    
        </div>
        <div class="delete"></div>
        <div class="col-lg-12">
        	<div id="add" style="margin-bottom:5px;"><a href="<?php echo $url_admin;?>result/form/<?php echo $app_id;?>" class="btn btn-success">Thêm mới</a></div>
            <div class="table-responsive">
            <form action="" method="post">
                <table align="center" class="table table-bordered table-hover table-striped" width="100%">
                        <tr>
                            <td width="124" align="center" style="font-weight: bold">#</td>
                            <td width="41" align="center" style="font-weight: bold"><input type="checkbox" name="cball" id="cball"></td>
                            <?php
                            	if($data_type->type==1)
								{
							?>
                            <td width="467" align="center" style="font-weight: bold">Text</td>
                            <?php
								}
							?>
                            <?php
                            	if($data_type->type==0)
								{
							?>
                            <td width="467" align="center" style="font-weight: bold">Hình ảnh</td>
                            <td width="467" align="center" style="font-weight: bold">Text</td>
                            <?php 
								}
							?>
                            <td width="333" align="center" style="font-weight: bold">Trạng thái</td>
                            <td colspan="2" align="center" style="font-weight: bold">Thao tác</td>
             
                        </tr>
                    	<?php
							$i=1;
							foreach($data_result as $item)
							{
						?>
                        <tr <?php if(($i%2==0)) echo "class='success'"; else echo "class='danger'";  ?>>
                            <td align="center"><?php echo $i++;?></td>
                            <td align="center"><input type="checkbox" name="cbitem[]" value="<?php echo $item->id;?>" class="checkbox"></td>
                            <?php
                            	if($data_type->type==1)
								{
							?>
                            <td align="center"><?php echo $item->text;?></td>
                            <?php
								}
							?>
                            <?php
                            	if($data_type->type==0)
								{
							?>
                            <td align="center"><img src="<?php echo $item->img;?>" width="200px" height="100px"></td>
                            <td align="center"><?php echo $item->text;?></td>
                            <?php
								}
							?>
                            <td align="center"  class="status">
                                    <?php if($item->status==1)echo "<i class='glyphicon glyphicon-ok'></i>";?>  
                                    <?php if($item->status==0)echo "<i class='glyphicon glyphicon-lock'></i>";?>  
                            </td>
                            <td width="41">
                                 <a href="<?php echo $url_admin;?>result/form/<?php echo $item->app_id;?>/<?php echo $item->id;?>">
                                <span class="label label-info"> Sửa </span></a>       
                            </td>
                            <td width="62">
                            	<a href="<?php echo $url_admin;?>result/del/<?php echo $item->app_id;?>/<?php echo $item->id;?>" onClick="return confirm('Bạn có chắc muốn xóa không ?')" ><span class="label label-danger">Xóa</span></a> 
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
