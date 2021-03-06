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
<title>تسجيل الدخول للشركات</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ asset('dash/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('dash/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('dash/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('dash/assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('dash/assets/admin/pages/css/login2-rtl.css')}}" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="{{ asset('dash/assets/global/css/components-rounded-rtl.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{ asset('dash/assets/global/css/plugins-rtl.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('dash/assets/admin/layout/css/layout-rtl.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('dash/assets/admin/layout/css/themes/default-rtl.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset('dash/assets/admin/layout/css/custom-rtl.css')}}" rel="stylesheet" type="text/css"/>
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
    <!-- BEGIN LOGIN FORM -->
<form class="login-form" action="{{route('login')}}" method="post">
    @csrf
		<div class="form-title">
			<span class="form-title">مرحبا.</span>
			<span class="form-subtitle">من فضلك قم بتسجيل الدخول.</span>
		</div>
		<div class="alert alert-danger display-hide">
			<button class="close" data-close="alert"></button>
			<span>
			ادخل كود الشركة وكلمة المرور. </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">كود الشركة</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="كود الشركة" name="code"/>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">كلمة المرور</label>
			<input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="كلمة المرور" name="password"/>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary btn-block uppercase">تسجيل دخول</button>
		</div>
		<div class="form-actions">
			<div class="pull-left">
				<label class="rememberme check">
				<input type="checkbox" name="remember" value="1"/>تذكرني</label>
			</div>
			{{-- <div class="pull-right forget-password-block">
				<a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
			</div> --}}
		</div>

		<div class="create-account">
			<p>
            <a href="{{route('register1')}}" id="register-btn">تسجيل حساب جديد</a>
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	{{-- <form class="forget-form" action="index.html" method="post">
		<div class="form-title">
			<span class="form-title">Forget Password ?</span>
			<span class="form-subtitle">Enter your e-mail to reset it.</span>
		</div>
		<div class="form-group">
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn btn-default">Back</button>
			<button type="submit" class="btn btn-primary uppercase pull-right">Submit</button>
		</div>
	</form> --}}
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	{{-- <form class="register-form" action="index.html" method="post">
		<div class="form-title">
			<span class="form-title">تسجيل حساب جديد</span>
		</div>
		<p class="hint">
			 ادخل المعلومات المطلوبه بالاسفل :
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">اسم الشركة</label>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="اسم الشركة" name="name"/>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">الايميل</label>
			<input class="form-control placeholder-no-fix" type="text" placeholder="الايميل" name="email"/>
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
			<label class="control-label visible-ie8 visible-ie9">رقم التلفون</label>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="رقم التلفون" name="phone"/>
		</div>
        <div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">نوع الشركة</label>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="نوع الشركة" name="type_id"/>
        </div>

        <div hidden class="form-group">
			<label class="control-label visible-ie8 visible-ie9">كود الشركة</label>
			<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="كود الشركة" name="code"/>
        </div>

        <div class="form-group">
        </div>

		<div class="form-actions">
			<button type="button" id="register-back-btn" class="btn btn-default">رجوع</button>
			<button type="submit" id="register-submit-btn" class="btn btn-primary uppercase pull-right">تسجيل</button>
		</div>
	</form> --}}
	<!-- END REGISTRATION FORM -->
</div>
<div class="copyright hide">
	 2014 © Metronic. Admin Dashboard Template.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('dash/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dash/assets/global/plugins/jquery-migrate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dash/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dash/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dash/assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('dash/assets/global/plugins/jquery.cokie.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('dash/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('dash/assets/global/scripts/metronic.js')}}" type="text/javascript"></script>
<script src="{{ asset('dash/assets/admin/layout/scripts/layout.js')}}" type="text/javascript"></script>
<script src="{{ asset('dash/assets/admin/layout/scripts/demo.js')}}" type="text/javascript"></script>
<script src="{{ asset('dash/assets/admin/pages/scripts/login.js')}}" type="text/javascript"></script>
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
