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
                        <input  type="text" class="form-control input-sm" placeholder="بحث عن اسم الموظف">
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
								<i class="fa fa-globe"></i>جدول الموظفين
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
									رقم الموظف
								</th>
								<th>
									اسم الموظف
                                </th>
                                <th>
									نسبة الموظف
                                </th>
                                <th>

								</th>
							</tr>
							</thead>
							<tbody>
							<tr class="odd gradeX">

								<td>
									1
								</td>
								<td>
									<a href="x">
									احمد جمال </a>
                                </td>
                                <td>
                                    16.2%
                                </td>

                                <td>
                                    <button type="submit" class="btn btn-sm green">عرض</button>
								</td>

                            </tr>

                            <tr class="odd gradeX">

								<td>
									2
								</td>
								<td>
									<a href="x">
									 محمد العاصي </a>
								</td>
                                <td>
                                    35.2%
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm green">عرض</button>
								</td>
                            </tr>

                            <tr class="odd gradeX">

								<td>
									3
								</td>
								<td>
									<a href="x">
									عبد الكريم موسى</a>
                                </td>
                                <td>
                                    21.8%
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-sm green">عرض</button>
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

