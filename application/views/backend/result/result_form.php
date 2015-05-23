<ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> <a href="<?php echo $url_admin?>">Dashboard</a> / <a href="<?php echo $url_admin?>app">App </a>/ <a href="<?php echo $url_admin?>result/<?php echo $app_id?>">Kết quả</a> / <?php if(isset($detail)) echo 'Sửa'; else echo 'Thêm mới';?>
    </li>
</ol>
<div class="well">
  <form method="post" action="<?php echo $url_admin?>result" enctype="multipart/form-data" id="frmform">
  <input type="hidden" name="od" value="<?php if(isset($id)) echo $id;?>">
  <input type="hidden" name="app_id" value="<?php echo $app_id;?>">
  <table width="100%" border="0">
  		<?php
			if($data_type->type==1)
			{
		?>
          <tr>
            <td height="139">Text</td>
            <td><textarea name="text" id="text" style="height:100px;" class="form-control"><?php if(isset($detail)) echo $detail->text;?>
            </textarea></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
      <?php
			}
	  ?>
      <?php
			if($data_type->type==0)
			{
		?>
        <tr>
            <td height="139">Text</td>
            <td><textarea name="text" id="text" style="height:100px;" class="form-control"><?php if(isset($detail)) echo $detail->text;?>
            </textarea></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
         </tr>
	  <tr>
	    <td width="18%" height="43">Ảnh</td>
	    <td width="38%"><input type="text" name="img" id="img" class="form-control validate[required]" style="float:left;" value="<?php if(isset($detail)) echo $detail->img;?>"><button onclick="browseKCFinder('img', 'image');return false;" class="btn btn-primary" style="float:left;">Chọn</button></td>
	    <td width="10%">&nbsp;</td>
	    <td width="34%">&nbsp;</td>
    </tr>
    <?php
			}
	?> 
      <tr>
	    <td height="62">Trạng thái</td>
	    <td><label>
            <input type="radio" name="status" id="status" value="1" <?php if(isset($detail) && $detail->status==1) echo 'checked'?> checked>
            Hoạt động</label>
          <label>
            <input type="radio" name="status" id="status"  value="0" <?php if(isset($detail) && $detail->status==0) echo 'checked'?>>
        Không hoạt động</label></td>

            <td>&nbsp;</td>
            <td>&nbsp;</td>
    </tr>
	  <tr>
	    <td height="21">&nbsp;</td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td height="40"></td>
	    <td><button type="submit" class="btn btn-primary" name="btnGui">Cập nhật</button>
       	  <button type="reset" class="btn btn-danger" style="margin-left:50px;">Làm lại</button>
        </td>
	    <td></td>
	    <td>&nbsp;</td>
    </tr>
  </table>
</form>
</div>