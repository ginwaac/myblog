<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        
		
        <!-- Vendor CSS -->
        <link href="/day05/Public/Admin/vendors/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="/day05/Public/Admin/vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="/day05/Public/Admin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.css" rel="stylesheet">
        <link href="/day05/Public/Admin/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="/day05/Public/Admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">        
            
        <!-- CSS -->
        <link href="/day05/Public/Admin/css/app.min.1.css" rel="stylesheet">
        <link href="/day05/Public/Admin/css/app.min.2.css" rel="stylesheet">
        
        
        
    </head>
    <body>
        <header id="header" class="clearfix" data-current-skin="blue">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>

                <li class="logo hidden-xs">
                    <a href="index.html">Blog</a>
                </li>

                <li class="pull-right">
                    <ul class="top-menu">
                        <li id="toggle-width">
                            <div class="toggle-switch">
                                <input id="tw-switch" type="checkbox" hidden="hidden">
                                <label for="tw-switch" class="ts-helper"></label>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a data-toggle="dropdown" href=""><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu dm-icon pull-right">
                                <li class="skin-switch hidden-xs">
                                    <span class="ss-skin bgm-lightblue" data-skin="lightblue"></span>
                                    <span class="ss-skin bgm-bluegray" data-skin="bluegray"></span>
                                    <span class="ss-skin bgm-cyan" data-skin="cyan"></span>
                                    <span class="ss-skin bgm-teal" data-skin="teal"></span>
                                    <span class="ss-skin bgm-orange" data-skin="orange"></span>
                                    <span class="ss-skin bgm-blue" data-skin="blue"></span>
                                </li>
                                <li class="divider hidden-xs"></li>
                                <li class="hidden-xs">
                                    <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> 全屏</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        
        <section id="main" data-layout="layout-1">
            <aside id="sidebar" class="sidebar c-overflow">
                <div class="profile-menu">
                    <a href="">
                        <div class="profile-pic">
                            <img src="/day05/Public/Admin/img/profile-pics/1.jpg" alt="">
                        </div>

                        <div class="profile-info">
                            admin

                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </a>

                    <ul class="main-menu">
                        <li>
                            <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </div>

                <ul class="main-menu">
                    <li class="active">
                        <a href="<?php echo U('Index/index');?>"><i class="zmdi zmdi-home"></i> 主页</a>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-view-compact"></i> 用户管理</a>

                        <ul>
                            <li><a href="<?php echo U('User/index');?>">用户列表</a></li>
                            <li><a href="<?php echo U('User/add');?>">用户添加</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-collection-text"></i> 文章管理</a>
                        <ul>
                            <li><a href="<?php echo U('Article/index');?>">文章列表</a></li>
                            <li><a href="<?php echo U('Article/add');?>">发布文章</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="zmdi zmdi-swap-alt"></i> 心情管理</a>
                        <ul>
                            <li><a href="<?php echo U('Mood/index');?>">心情列表</a></li>
                            <li><a href="<?php echo U('Mood/add');?>">写心情</a></li>
                        </ul>
                    </li>
                </ul>
            </aside>
            
            <section id="content">
            	
	<div class="container">
		<div class="card">
	        <form class="form-horizontal" role="form" action="<?php echo U('User/insert');?>" method="post" enctype="multipart/form-data">
	            <div class="card-header">
	                <h2>添加用户</h2>
	            </div>
	            
	            <div class="card-body card-padding">
	                <div class="form-group" style="display: none;">
	                    <label for="inputPassword3" class="col-sm-2 control-label">Check Password</label>
	                    <div class="col-sm-10">
	                        
	                        <div class="fg-line">
	                            <input class="form-control input-sm" id="inputPassword3" placeholder="Password" type="password">
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="inputPassword3" class="col-sm-2 control-label">用户名</label>
	                    <div class="col-sm-10">
	                        
	                        <div class="fg-line">
	                            <input class="form-control input-sm" id="inputPassword3" placeholder="username" type="text" name="nickname">
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
	                    <div class="col-sm-10">
	                        
	                        <div class="fg-line">
	                            <input class="form-control input-sm" id="inputPassword3" placeholder="password" type="password" name="password">
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="inputPassword3" class="col-sm-2 control-label">确认密码</label>
	                    <div class="col-sm-10">
	                        
	                        <div class="fg-line">
	                            <input class="form-control input-sm" id="inputPassword3" placeholder="check password" type="password" name="checkpass">
	                        </div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label for="inputPassword3" class="col-sm-2 control-label">电话</label>
	                    <div class="col-sm-10">
	                        
	                        <div class="fg-line">
	                            <input class="form-control input-sm" id="inputPassword3" placeholder="phone" type="text" name="phone">
	                        </div>
	                    </div>
	                </div>
	                <div class="fileinput fileinput-new" data-provides="fileinput" style="padding-left: 260px; padding-bottom: 50px;">
                        <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                        <div>
                            <span class="btn btn-info btn-file waves-effect">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input name="avatar" type="file">
                            </span>
                            <a href="#" class="btn btn-danger fileinput-exists waves-effect" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
	                <div class="form-group">
	                    <div class="col-sm-offset-2 col-sm-10">
	                        <button type="submit" class="btn btn-primary btn-sm waves-effect">添 加</button>
	                    </div>
	                </div>
	            </div>
	        </form>
	    </div>
    </div>
	

            </section>
        </section>
        
        <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
        
        
        
	<script src="/day05/Public/Admin/vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/day05/Public/Admin/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script src="/day05/Public/Admin/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/day05/Public/Admin/vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="/day05/Public/Admin/vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="/day05/Public/Admin/vendors/bower_components/bootstrap-sweetalert/lib/sweet-alert.min.js"></script>
    
    <script src="/day05/Public/Admin/vendors/bower_components/moment/min/moment.min.js"></script>
    <script src="/day05/Public/Admin/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.js"></script>
    <script src="/day05/Public/Admin/vendors/bower_components/nouislider/distribute/jquery.nouislider.all.min.js"></script>
    <script src="/day05/Public/Admin/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/day05/Public/Admin/vendors/bower_components/typeahead.js/dist/typeahead.bundle.min.js"></script>
    <script src="/day05/Public/Admin/vendors/summernote/dist/summernote-updated.min.js"></script>


    <!-- Placeholder for IE9 -->
    <!--[if IE 9 ]>
        <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
    <![endif]-->
    
    <script src="/day05/Public/Admin/vendors/bower_components/chosen/chosen.jquery.min.js"></script>
    <script src="/day05/Public/Admin/vendors/fileinput/fileinput.min.js"></script>
    <script src="/day05/Public/Admin/vendors/input-mask/input-mask.min.js"></script>
    <script src="/day05/Public/Admin/vendors/farbtastic/farbtastic.min.js"></script>
    <script src="/day05/Public/Admin/js/functions.js"></script>
    <script src="/day05/Public/Admin/js/demo.js"></script>


        <!--scroll js-->
        <script src="/day05/Public/Admin/js/jquery.nicescroll.min.js"></script>
        
        
        
        	<script>
		    $(document).ready(function() {
		        var nice = $("html").niceScroll();  // The document page (body)
		    });
			</script>
		
    </body>
</html>