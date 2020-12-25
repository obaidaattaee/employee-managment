@extends('dashboard.layouts.master')

@section('content')

<!-- BEGIN HEADER -->
@include ('dashboard.layouts.header')
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
@include ('dashboard.layouts.sidebar')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
                <div class="col-md-4 ">
                <div class="portlet box white">
                        <input  type="text" class="form-control input-sm" placeholder="بحث حسب مكان العمل">
                </div>
                </div>
                <div class="col-md-6 ">
                    <button type="submit" class="btn btn-sm red"> <i class="fa fa-search">    </i> بحث </button>

                </div>
            </div>

			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>تقييمات العميل (سعد صالح) لكل الموظفين
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">

							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th>
									اسم الموظف
                                </th>
                                <th>
                                    مكان العمل
                             </th>
								<th width='20%'>
                                    تقييم العميل
                            </th>
                            <th width='30%'>
                                ملاحظات العميل
                            </th>
                            <th>
                                صور العمل
                            </th>

                            <th>
                                   التاريخ
                            </th>



							</tr>
							</thead>
							<tbody>
							<tr class="odd gradeX">

								<td>
									احمد جمال
								</td>
								<td>
                                    مكة المكرمة
                                </td>
                                <td>
                                    موظف مجتهد موظف مجتهدموظف مجتهدموظف مجتهدموظف مجتهد
                                </td>
                                <td>
                                    ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات ملاحظات
                                </td>
                                <td>
                                        <ul>
                                            <li> <img src="{{ asset('images/pic2.jpg')}}" width="80" height="80" alt="" />
                                            </li>
                                            <li class="divider">
                                            </li>
                                            <li> <img src="{{ asset('images/pic1.jpg')}}" width="80" height="80" alt="" />

                                            </li>
                                        </ul>
                                </td>
                                <td>
                                   25/10/2020
                                </td>

                            </tr>




							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>

		</div>
	</div>

</div>

@stop

