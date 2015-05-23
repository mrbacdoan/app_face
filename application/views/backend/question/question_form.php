<ol class="breadcrumb">
    <li class="active">
        <i class="fa fa-dashboard"></i> <a href="<?php echo $url_admin?>">Dashboard</a> / <a href="<?php echo $url_admin?>app">App</a> / <a href="<?php echo $url_admin?>question/<?php echo $app_id;?>">Câu hỏi</a> / <?php if(isset($detail)) echo 'Sửa'; else echo 'thêm mới';?>
    </li>
</ol>
<div class="well">
  <form method="post" action="<?php echo $url_admin?>question" enctype="multipart/form-data" id="frmform">
  <input type="hidden" name="od" value="<?php if(isset($id)) echo $id;?>">
  <input type="hidden" name="app_id" value="<?php echo $app_id;?>">
  <table width="100%" border="0">
	  <tr>
	    <td width="18%" height="43">Câu hỏi</td>
	    <td width="34%"><textarea name="content" id="content" style="height:100px;" class="form-control"><?php if(isset($detail)) echo $detail->content;?></textarea></td>
	    <td width="14%">&nbsp;</td>
	    <td width="34%">&nbsp;</td>
    </tr>
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