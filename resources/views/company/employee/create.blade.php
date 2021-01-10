@extends('company.layouts.app')

@section('content')

{{-- {{ dd("adad") }} --}}
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> اضافة موظف جديد
                </div>
                <div class="tools">
                    <a href="{{ route('company.employees.qwqwqw') }}" >
                        <button class="btn btn-info btn-sm">
                            رجوع
                        </button>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="page-head">

                </div>
                <div>
                    <form class="" style="padding-bottom: 20px" action="{{route('company.employee.store')}}" method="post">
                        @csrf


                        <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">الاسم </label>
                            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="الاسم " name="name"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">المسمى الوظيفي</label>
                            <input class="form-control placeholder-no-fix" type="text" placeholder="المسمى الوظيفي " name="title"/>
                        </div>

                        <div class="form-group">
                            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                            <label class="control-label visible-ie8 visible-ie9">الايميل</label>
                            <input class="form-control placeholder-no-fix" type="text" placeholder="الايميل" name="email"/>
                            <input class="form-control placeholder-no-fix" type="hidden" value="company" placeholder="الايميل" name="type"/>
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
                            <button type="submit" id="submit" class="btn btn-primary uppercase pull-right">تسجيل</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->

    </div>
</div>

<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection
