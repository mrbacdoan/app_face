<ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> <a href="<?php echo $url_admin?>">Dashboard</a> / <a href="<?php echo $url_admin?>app">App</a> / <?php if(isset($detail))echo 'Sửa'; else echo "Thêm mới";?>
    </li>
</ol>
<div class="well">
  <form method="post" action="<?php echo $url_admin?>app" enctype="multipart/form-data" id="frmform">
  <input type="hidden" name="od" value="<?php if(isset($id)) echo $id;?>">
  <table width="100%" border="0">
	  <tr>
	    <td width="18%" height="57">Tên app</td>
	    <td width="34%"><input value="<?php if(isset($detail))echo $detail->name;?>" class="form-control" name="name" id="name"><?php if(isset($$error))echo $$error;?></td>
	    <td width="14%">&nbsp;</td>
	    <td width="34%">&nbsp;</td>
    </tr>
	  <tr>
	    <td height="56">Kết quả </td>
	    <td><label>
	      <input type="radio" name="type" id="type" value="1" <?php if(isset($detail) && $detail->type==1) echo 'checked'?> checked>
	      Text</label>
          <label>
            <input type="radio" name="type" id="type"  value="0" <?php if(isset($detail) && $detail->type==0) echo 'checked'?>>
        Hình ảnh</label></td>
	    <td>&nbsp;</td>
	    <td>&nbsp;</td>
      </tr>
	  <tr>
	    <td height="53">Trạng thái</td>
	    <td><label>
	      <input type="radio" name="status" id="status" value="1" checked>
	      Hoạt động</label>
          <label>
            <input type="radio" name="status" id="status"  value="0">
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
	    <td height="63"></td>
	    <td><button type="submit" class="btn btn-primary" name="btnGui">Cập nhật</button>
       	  <button type="reset" class="btn btn-danger" style="margin-left:50px;">Làm lại</button>
        </td>
	    <td></td>
	    <td>&nbsp;</td>
    </tr>
  </table>
</form>
</div>