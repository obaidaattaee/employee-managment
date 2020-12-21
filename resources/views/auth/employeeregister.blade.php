<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>تسجيل  موظف</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('assets/admin/pages/css/login2-rtl.css')}}" rel="stylesheet" type="text/css"/>

<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="{{ asset('assets/global/css/components-rounded-rtl.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/global/css/plugins-rtl.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/admin/layout/css/layout-rtl.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/admin/layout/css/themes/default-rtl.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset('assets/admin/layout/css/custom-rtl.css')}}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">

</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    @include('shared.msg')
	<!-- BEGIN REGISTRATION FORM -->
    <form class="" action="{{route('register')}}" method="post">
        @csrf

		<div class="form-title">
			<span class="form-title">تسجيل  موظف جديد</span>
		</div>
		<p class="hint">
			 ادخل المعلومات المطلوبه بالاسفل :
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">اسم الموظف</label>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="اسم الشركة" name="name"/>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">الايميل</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="الايميل" name="email"/>
			<input class="form-control placeholder-no-fix" type="hidden" value="employee" placeholder="الايميل" name="type"/>
		</div>
        <div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">رقم التلفون</label>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="رقم التلفون" name="phone"/>
        </div>
        <div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">العنوان </label>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="العنوان " name="address"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="كلمة المرور" name="password"/>
        </div>

		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">تأكيد كلمة المرور</label>
			<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="تأكيد كلمة المرور" name="password_confirmation"/>
        </div>


        <div class="form-group">
        </div>

		<div class="form-actions">
			<a  id="register-back-btn" href="{{route('home')}}" class="btn btn-default">رجوع</a>
			<button type="submit" id="submit" class="btn btn-primary uppercase pull-right">تسجيل</button>
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
</div>

<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/admin/pages/scripts/login.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Login.init();
Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
