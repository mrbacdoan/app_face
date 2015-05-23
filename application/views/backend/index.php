<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>App facebook</title>
    <link href="<?php echo base_url();?>uploads/icon/icon.gif" rel="icon">
	<link href="<?php echo base_url();?>style/css/style.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>style/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>style/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>style/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $url_admin;?>">Administrator</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>  <?php echo $login->email;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo $url_admin?>logout" onClick="return confirm('Bạn có muốn thoát không?')"><i class="fa fa-fw fa-power-off"></i> Thoát</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo $url_admin?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#user"><i class="fa fa-fw fa-user"></i> Tài khoản <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="user" class="collapse">
                            <li>
                                <a href="<?php echo $url_admin?>user">Danh sách tài khoản</a>
                            </li>
                            <li>
                                <a href="<?php echo $url_admin?>user/form">Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#news"><i class="fa fa-fw fa-align-justify"></i> App <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="news" class="collapse">
                            <li>
                                <a href="<?php echo $url_admin?>app">Danh sách App</a>
                            </li>
                            <li>
                                <a href="<?php echo $url_admin?>app/form">Thêm mới</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $url_admin?>logout" onClick="return confirm('Bạn có muốn thoát không?')"><i class="fa fa-fw fa-power-off"></i> Thoát</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <?php 
					if(isset($template))include($template.'.php');
				?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
	<script src="<?php echo base_url();?>js/jquery-1.11.0.js"></script>
    <script src="<?php echo base_url();?>style/js/bootstrap.min.js"></script>
    <script>
		$(document).ready(function() {
			$('#cball').click(function(event) {  //on click 
				if(this.checked) { // check select status
					$('.checkbox').each(function() { //loop through each checkbox
						this.checked = true;  //select all checkboxes with class "checkbox1"               
					});
				}else{
					$('.checkbox').each(function() { //loop through each checkbox
						this.checked = false; //deselect all checkboxes with class "checkbox1"                       
					});         
				}
			});
		});
    </script>
    
    
    
    
     <!-- Tích hợp tynimce vào CodeIgniter -->
    <script 
		type="text/javascript" 
		src="<?php echo base_url();?>plugins/tinymce_3.5.11/jscripts/tiny_mce/tiny_mce.js">
    </script> 	
	<script type="text/javascript">

	    //tinyMCE
	   tinyMCE.init({
		  // General options
		  mode : "textareas",
		  width:700,
		  height:350,
		  editor_selector : "wysiwygEditor", // Sử dụng với class
		  entity_encoding : "raw", // Thay Ch&agrave;o c&aacute;c bạn = Chào các bạn
		  theme : "advanced",
		  plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
	  
		  file_browser_callback: 'openKCFinder',
		  
		  // Theme options
		  theme_advanced_buttons1 : "preview,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,formatselect,fontselect,fontsizeselect,|,bullist,numlist,|,blockquote,|,sub,sup",
		  theme_advanced_buttons2 : "tablecontrols,|,link,unlink,anchor,image,|,forecolor,backcolor,|,charmap,emotions,iespell,media,advhr,|,hr,removeformat,visualaid,|,fullscreen,|,code",
		  theme_advanced_toolbar_location : "top",
		  theme_advanced_toolbar_align : "left",
		  theme_advanced_statusbar_location : "bottom",
		  theme_advanced_resizing : true,
	  
		  // Skin options
		  skin : "o2k7",
		  skin_variant : "silver",
	  
		  language : 'en',
	  
		  // Example content CSS (should be your site CSS)
		  content_css : "",
		  
		  // Cấu hình để font-size to hơn
		  setup : function(ed){
			  ed.onInit.add(function(ed){
				  ed.getDoc().body.style.fontSize = '11px';
			  });
		  },
	  
		  // Drop lists for link/image/media/template dialogs
		  template_external_list_url : "js/template_list.js",
		  external_link_list_url : "js/link_list.js",
		  external_image_list_url : "js/image_list.js",
		  media_external_list_url : "js/media_list.js",
	  
		  // Replace values for the template plugin
		  template_replace_values : {
				  username : "Some User",
				  staffid : "991234"
		  },
	  
		  // Link của chính nó
		  // Cấu hình link thực
		  relative_urls : 0,
		  remove_script_host : 0,
	  });
	  
	  function openKCFinder(field_name, url, type, win) {
		  tinyMCE.activeEditor.windowManager.open({
			  file: '<?php echo base_url(); ?>plugins/kcfinder_2.51/browse.php?opener=tinymce&lang=vi&type=' + type,
			  title: 'KCFinder',
			  width: 700,
			  height: 500,
			  resizable: "yes",
			  inline: true,
			  close_previous: "no",
			  popup_css: false
		  }, {
			  window: win,
			  input: field_name
		  });
		  return false;
	  }
	  
	  function browseKCFinder(field, type) {
		  window.KCFinder = {
			  callBack: function(url) {
				  document.getElementById(field).value = url;
				  window.KCFinder = null;
			  }
		  };
		  window.open('<?php echo base_url(); ?>plugins/kcfinder_2.51/browse.php?type='+type+'&lang=vi', 'kcfinder_textbox',
			  'status=0, toolbar=0, location=0, menubar=0, directories=0, ' +
			  'resizable=1, scrollbars=0, width=800, height=600'
		  );
	  }
</script>


</body>

</html>
